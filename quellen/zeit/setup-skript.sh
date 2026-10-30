#!/bin/bash
# Projekt-Timer formateins (ENT-046): richtet den Hook ein, der jede Nachricht,
# jedes «fertig» und Start und Ende einer Sitzung mit Claude Code an
# betreiber.formateins.ch meldet.
#
# Cloud: Diesen Text in der Umgebung unter «Setup-Skript» eintragen. Er laeuft
# bei jedem neuen Container. Den Schluessel setzt der Proxy (Netzwerk-Secret
# «Projekt-Timer»), er steht hier nicht.
# Mac: einmal im Terminal ausfuehren (bash setup-skript.sh). Den Schluessel
# dort in ~/.config/formateins/zeit-schluessel ablegen (nur eine Zeile).
#
# Laesst sich beliebig oft ausfuehren: bestehende Einstellungen bleiben, der
# Hook steht danach genau einmal drin.
set -e
mkdir -p "$HOME/.claude"

cat > "$HOME/.claude/zeit-puls.sh" <<'HOOK'
#!/bin/sh
# Projekt-Timer formateins (ENT-046), Hook fuer Claude Code.
# Schickt nur Zeitpunkt und Kennungen, nie den Text einer Nachricht. Gibt
# nichts aus, wartet nicht auf den Server und endet immer mit 0: Die Arbeit
# wird nie gebremst. Ein verlorener Puls laesst sich aus dem Verlauf der
# Sitzung nachtragen.
url="${FORMATEINS_ZEIT_URL:-https://betreiber.formateins.ch/api/zeit_puls.php}"
eingabe=$(cat)
feld() { printf '%s' "$eingabe" | sed -n "s/.*\"$1\" *: *\"\([^\"]*\)\".*/\1/p" | head -n 1; }
case "$(feld hook_event_name)" in
  UserPromptSubmit) ereignis=nachricht ;;
  Stop)             ereignis=fertig ;;
  SessionStart)     ereignis=start ;;
  SessionEnd)       ereignis=ende ;;
  *) exit 0 ;;
esac
sitzung=$(feld session_id | tr -cd 'A-Za-z0-9_.-')
[ -n "$sitzung" ] || exit 0
cloud=$(printf '%s' "${CLAUDE_CODE_REMOTE_SESSION_ID:-}" | tr -cd 'A-Za-z0-9_.-')
if [ -n "${CLAUDE_CODE_REMOTE:-}" ]; then geraet=cloud; else geraet=$(uname -s | tr 'A-Z' 'a-z' | sed 's/darwin/mac/'); fi
repo=""
ort=$(feld cwd)
if [ -n "$ort" ]; then
  wurzel=$(git -C "$ort" rev-parse --show-toplevel 2>/dev/null) && repo=$(basename "$wurzel")
fi
repo=$(printf '%s' "$repo" | tr -cd 'A-Za-z0-9_.-')
# Der Schritt der Roadmap, den Claude zu Beginn eines Schritts setzt,
# z. B. «muster-breitbild 3.1».
schritt=$(head -n 1 "$HOME/.zeit-schritt" 2>/dev/null | tr -cd 'A-Za-z0-9 ._-' | cut -c1-80)
zeit=$(date -u +%Y-%m-%dT%H:%M:%SZ)
body=$(printf '{"ereignis":"%s","quelle":"claude-code","zeit":"%s","sitzung":"%s","sitzung_cloud":"%s","geraet":"%s","repo":"%s","schritt":"%s"}' \
  "$ereignis" "$zeit" "$sitzung" "$cloud" "$geraet" "$repo" "$schritt")
schluessel="${FORMATEINS_ZEIT_SCHLUESSEL:-}"
[ -n "$schluessel" ] || schluessel=$(head -n 1 "$HOME/.config/formateins/zeit-schluessel" 2>/dev/null | tr -d ' \r\n')
if [ -n "$schluessel" ]; then
  ( curl -s -m 8 -o /dev/null -X POST -H 'Content-Type: application/json' -H "X-Zeit-Schluessel: $schluessel" -d "$body" "$url" ) >/dev/null 2>&1 &
else
  ( curl -s -m 8 -o /dev/null -X POST -H 'Content-Type: application/json' -d "$body" "$url" ) >/dev/null 2>&1 &
fi
exit 0
HOOK
chmod +x "$HOME/.claude/zeit-puls.sh"

# In die Einstellungen eintragen, ohne Bestehendes zu ueberschreiben.
python3 - <<'PY'
import json, os
pfad = os.path.expanduser('~/.claude/settings.json')
try:
    with open(pfad, encoding='utf-8') as f:
        einst = json.load(f)
except FileNotFoundError:
    einst = {}
hooks = einst.setdefault('hooks', {})
for ereignis in ['UserPromptSubmit', 'Stop', 'SessionStart', 'SessionEnd']:
    liste = hooks.setdefault(ereignis, [])
    if not any('zeit-puls.sh' in json.dumps(e) for e in liste):
        liste.append({'hooks': [{'type': 'command', 'command': '~/.claude/zeit-puls.sh'}]})
with open(pfad, 'w', encoding='utf-8') as f:
    json.dump(einst, f, indent=2, ensure_ascii=False)
    f.write('\n')
PY
echo "Projekt-Timer: Hook eingerichtet."
