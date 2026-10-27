#!/bin/bash
# Ton des Reels mit Musikbett: Musik auf 120 BPM, Beat-Einsatz bei 2.0 s, Schnitte 4.5 / 8 / 12 auf dem Takt.
# Aufruf: musik.sh <musik.mp3> <einsatz_s> <bpm> <name>
#   einsatz_s = Zeit des ersten vollen Schlags (Bass/Kick) im Original, bpm = gemessenes Tempo
set -e
cd "$(dirname "$0")"
S=..
M=$1; D=$2; BPM=$3; N=$4; MV=${MV:-1.0}; LU=${LU:--15.7}   # MV Musikpegel, LU Ziel-Lautheit
R=$(python3 -c "print(120/$BPM)")                 # Tempofaktor auf 120 BPM
S0=$(python3 -c "print(round($D-2.0*$R,4))")      # Start im Original, damit der Einsatz bei 2.0 s liegt
L=$(python3 -c "print(round(16.6*$R,4))")
X=sfx
ffmpeg -v error -y \
  -ss $S0 -t $L -i "$M" \
  -ss 1.5 -t 4.0 -i $S/fulehorn/shot4v.mp4 \
  -i $S/praxis/reel-betriebsvideo.mp4 \
  -i $X/swish__swosh-13.wav \
  -filter_complex "\
[0:a]aresample=48000,aformat=channel_layouts=stereo,rubberband=tempo=$R,atrim=0:16,asetpts=PTS-STARTPTS,volume=$MV,\
volume='if(lt(t,7.9),1,if(lt(t,8.05),1-0.5*(t-7.9)/0.15,0.5))':eval=frame,afade=t=in:d=0.25,afade=t=out:st=15.3:d=0.7[mus];\
[1:a]aresample=48000,aformat=channel_layouts=stereo,volume=1.0,afade=t=in:d=0.15,afade=t=out:st=3.7:d=0.3,adelay=8000|8000[werbe];\
[2:a]aresample=48000,aformat=channel_layouts=stereo,volume=2.0,afade=t=in:d=0.15,afade=t=out:st=3.5:d=0.5,adelay=12000|12000[betrieb];\
[3:a]aresample=48000,aformat=channel_layouts=stereo,highpass=f=300,volume=0.22,asplit=3[w1][w2][w3];\
[w1]adelay=4394|4394[a1];[w2]adelay=7894|7894[a2];[w3]adelay=11894|11894[a3];\
[mus][werbe][betrieb][a1][a2][a3]amix=inputs=6:normalize=0:duration=first[mix]" \
  -map "[mix]" -ar 48000 -ac 2 -t 16 ton-$N-roh.wav
# Lautheit wie bisher (-15.7 LUFS integriert, Spitze -1.5 dBTP), zweistufig linear
J=$(ffmpeg -i ton-$N-roh.wav -af loudnorm=I=$LU:TP=-1.5:LRA=11:print_format=json -f null - 2>&1 | sed -n '/^{/,/^}/p')
g(){ echo "$J" | python3 -c "import json,sys;print(json.load(sys.stdin)['$1'])"; }
ffmpeg -v error -y -i ton-$N-roh.wav -af "loudnorm=I=$LU:TP=-1.5:LRA=11:measured_I=$(g input_i):measured_TP=$(g input_tp):measured_LRA=$(g input_lra):measured_thresh=$(g input_thresh):offset=$(g target_offset):linear=true" -ar 48000 ton-$N.wav
ffmpeg -i ton-$N.wav -af ebur128=peak=true -f null - 2>&1 | grep -E "^\s+(I|Peak):" | tail -2
# Feinabgleich auf -15.7 LUFS (loudnorm faellt bei knapper Spitze auf dynamisch zurueck)
I=$(ffmpeg -i ton-$N.wav -af ebur128 -f null - 2>&1 | grep -E "^\s+I:" | tail -1 | awk '{print $2}')
ffmpeg -v error -y -i ton-$N.wav -af "volume=$(python3 -c "print(round($LU-($I),2))")dB" ton-$N-fein.wav && mv ton-$N-fein.wav ton-$N.wav
ffmpeg -i ton-$N.wav -af ebur128=peak=true -f null - 2>&1 | grep -E "^\s+(I|Peak):" | tail -2
