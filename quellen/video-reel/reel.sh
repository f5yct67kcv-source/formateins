#!/bin/bash
# Reel Video: vier Teile hart geschnitten, Bereichs-Schild oben links, Soundakzente, Lautheit -15 LUFS.
set -e
cd "$(dirname "$0")"
S=..
V="scale=1080:1920:force_original_aspect_ratio=increase,crop=1080:1920,fps=30,setsar=1,format=yuv420p"

# 1) Bild: Teile aneinander
ffmpeg -v error -y \
  -i $S/social/reel-social.mp4 \
  -i teaser-erklaervideo.mp4 \
  -i $S/fulehorn/reel-ausschnitt-werbevideo.mp4 \
  -i $S/praxis/reel-betriebsvideo.mp4 \
  -filter_complex "[0:v]$V,trim=0:4.5,setpts=PTS-STARTPTS[a];[1:v]$V,trim=0:3.5,setpts=PTS-STARTPTS[b];[2:v]$V,trim=0:4.0,setpts=PTS-STARTPTS[c];[3:v]$V,trim=0:4.0,setpts=PTS-STARTPTS[d];[a][b][c][d]concat=n=4:v=1:a=0[v]" \
  -map "[v]" -c:v libx264 -crf 14 -pix_fmt yuv420p bild.mp4

# 2) Schilder: je Teil von links hereinschieben (0.3 s), stehen lassen, kurz vor dem Schnitt ausblenden
ov=""; prev="0:v"; k=1
for e in "tag-social 0.15 4.4" "tag-erklaer 4.6 7.9" "tag-werbe 8.1 11.9" "tag-betrieb 12.1 15.9"; do
  set -- $e
  ov="$ov[$k:v]format=rgba,fade=t=out:st=$(python3 -c "print($3-0.2)"):d=0.2:alpha=1[t$k];[$prev][t$k]overlay=x='if(lt(t-$2,0.3),-w+(54+w)*(1-pow(1-(t-$2)/0.3,3)),54)':y=1762:enable='between(t,$2,$3)':eval=frame[o$k];"
  prev="o$k"; k=$((k+1))
done
ffmpeg -v error -y -i bild.mp4 \
  -loop 1 -t 16 -i tag-social.png -loop 1 -t 16 -i tag-erklaer.png -loop 1 -t 16 -i tag-werbe.png -loop 1 -t 16 -i tag-betrieb.png \
  -filter_complex "${ov%;}" -map "[$prev]" -c:v libx264 -crf 14 -pix_fmt yuv420p -t 16 bild-tags.mp4

# 3) Ton: Originalton von Werbe- und Betriebsvideo, Akzente aus der CC0-Bibliothek
X=sfx
ffmpeg -v error -y \
  -f lavfi -t 16 -i anullsrc=r=48000:cl=stereo \
  -ss 1.5 -t 4.0 -i $S/fulehorn/shot4v.mp4 \
  -i $S/praxis/reel-betriebsvideo.mp4 \
  -i $X/kui__click3.wav -i $X/kui__click1.wav -i $X/qbd__qubodup-megaswosh2.wav -i $X/swish__swosh-13.wav \
  -i $X/kimp__impactBell_heavy_004.wav -i $X/kdig__powerUp1.wav -i $X/swish__swosh-31.wav \
  -filter_complex "\
[1:a]aresample=48000,volume=1.6,afade=t=in:d=0.3,afade=t=out:st=3.6:d=0.4,adelay=8000|8000[werbe];\
[2:a]aresample=48000,volume=1.4,afade=t=in:d=0.2,afade=t=out:st=3.7:d=0.3,adelay=12000|12000[betrieb];\
[3:a]asplit=4[c1][c2][c3][c4];\
[c1]volume=0.5,adelay=1450|1450[k1];[c2]volume=0.45,adelay=1650|1650[k2];[c3]volume=0.4,adelay=1850|1850[k3];[c4]volume=0.55,adelay=5200|5200[k4];\
[4:a]asplit=2[d1][d2];[d1]volume=0.55,adelay=6250|6250[k5];[d2]volume=0.55,adelay=7250|7250[k6];\
[5:a]volume=0.8,adelay=1150|1150[wisch];\
[6:a]volume=0.9,adelay=3300|3300[sprung];\
[7:a]volume=0.7,adelay=4480|4480[schnitt1];\
[8:a]volume=0.35,adelay=8050|8050[licht];\
[9:a]volume=0.5,adelay=11550|11550[uebergang];\
[0:a][werbe][betrieb][k1][k2][k3][k4][k5][k6][wisch][sprung][schnitt1][licht][uebergang]amix=inputs=14:normalize=0:duration=first,afade=t=out:st=15.6:d=0.4[mix]" \
  -map "[mix]" -ar 48000 -ac 2 ton-roh.wav

# 4) Lautheit und Zusammenfuehren
ffmpeg -v error -y -i ton-roh.wav -af loudnorm=I=-13.5:TP=-1.5:LRA=11 -ar 48000 ton.wav
ffmpeg -v error -y -i bild-tags.mp4 -i ton.wav -map 0:v -map 1:a -c:v copy -c:a aac -b:a 192k -shortest -movflags +faststart reel-video.mp4
ffprobe -v error -show_entries format=duration -of csv=p=0 reel-video.mp4
ffmpeg -i reel-video.mp4 -af ebur128=peak=true -f null - 2>&1 | grep -E "^\s+(I|Peak):" | tail -2
