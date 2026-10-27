#!/bin/bash
# Rohschnitt Spot Fulehorn: Clips trimmen, auf 1080x1920@30 bringen, mit kurzen Blenden verbinden.
set -e
cd "$1"
# Uebergang je Schnitt (vor Clip k): Typ und Dauer; "fade" mit 0.034 = harter Schnitt
T=( "" "fade 0.3" "fade 0.034" "fadeblack 0.5" "fade 0.034" "fade 0.4" )
# name in dauer
CLIPS=(
  "shot1.mp4 0.0 3.0"
  "shot2.mp4 1.0 3.5"
  "shot3.mp4 0.8 3.4"
  "shot4v.mp4 1.0 4.5"
  "shot5.mp4 0.5 3.5"
  "endkarte.mp4 0.0 3.5"
)
mkdir -p cut
i=0
for c in "${CLIPS[@]}"; do
  set -- $c
  out=cut/c$i.mp4
  if ffprobe -v error -select_streams a -show_entries stream=index -of csv=p=0 "$1" | grep -q .; then
    ffmpeg -v error -y -ss $2 -t $3 -i "$1" -vf "scale=1080:1920:force_original_aspect_ratio=increase,crop=1080:1920,fps=30,setsar=1" \
      -af "aresample=48000,aformat=channel_layouts=stereo" -c:v libx264 -crf 16 -pix_fmt yuv420p -c:a aac -b:a 192k "$out"
  else
    ffmpeg -v error -y -ss $2 -t $3 -i "$1" -f lavfi -t $3 -i anullsrc=r=48000:cl=stereo \
      -vf "scale=1080:1920:force_original_aspect_ratio=increase,crop=1080:1920,fps=30,setsar=1" \
      -c:v libx264 -crf 16 -pix_fmt yuv420p -c:a aac -b:a 192k -shortest "$out"
  fi
  i=$((i+1))
done
# xfade-Kette
n=${#CLIPS[@]}
inputs=""; for k in $(seq 0 $((n-1))); do inputs="$inputs -i cut/c$k.mp4"; done
fc=""; off=0; prev="0:v"; aprev="0:a"
for k in $(seq 1 $((n-1))); do
  set -- ${T[$k]}; ty=$1; X=$2
  d=$(ffprobe -v error -show_entries format=duration -of csv=p=0 cut/c$((k-1)).mp4)
  off=$(python3 -c "print(round($off+$d-$X,3))")
  fc="$fc[$prev][$k:v]xfade=transition=$ty:duration=$X:offset=$off[v$k];[$aprev][$k:a]acrossfade=d=$X[a$k];"
  prev="v$k"; aprev="a$k"
done
ffmpeg -v error -y $inputs -filter_complex "${fc%;}" -map "[$prev]" -map "[$aprev]" -c:v libx264 -crf 18 -pix_fmt yuv420p -c:a aac -b:a 192k rohschnitt.mp4
ffprobe -v error -show_entries format=duration -of csv=p=0 rohschnitt.mp4
