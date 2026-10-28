"""Meldet Bing (und den anderen IndexNow-Suchmaschinen) die Seiten, die sich
mit diesem Push geaendert haben. Laeuft im Workflow nach dem Upload, weil die
Suchmaschine die Schluesseldatei auf formateins.ch abruft (ENT-025).

Aufruf: python3 quellen/indexnow.py <commit vor dem Push>
Gemeldet wird nur, was in sitemap.xml steht: keine Entwuerfe, kein Impressum.
Fehlt der alte Commit (erster Push, workflow_dispatch), gehen alle Seiten raus.
"""
import json, re, subprocess, sys, urllib.request
from pathlib import Path

HOST = 'www.formateins.ch'
schluessel = [p.stem for p in Path('.').glob('*.txt') if re.fullmatch(r'[0-9a-f]{32}', p.stem)]
if len(schluessel) != 1:
    sys.exit(f'Genau eine Schluesseldatei erwartet, gefunden: {schluessel}')
KEY = schluessel[0]

sitemap = re.findall(r'<loc>([^<]+)</loc>', Path('sitemap.xml').read_text(encoding='utf-8'))

def adresse(datei):
    if not datei.endswith('.html'):
        return None
    pfad = datei[:-5]
    pfad = '' if pfad == 'index' else pfad
    return f'https://{HOST}/{pfad}'

vorher = sys.argv[1] if len(sys.argv) > 1 else ''
geaendert = None
if vorher and set(vorher) != {'0'}:
    lauf = subprocess.run(['git', 'diff', '--name-only', vorher, 'HEAD'], capture_output=True, text=True)
    if lauf.returncode == 0:
        geaendert = {adresse(d) for d in lauf.stdout.split()}
urls = sitemap if geaendert is None else [u for u in sitemap if u in geaendert]

if not urls:
    print('Keine Seite aus der Sitemap geaendert, nichts zu melden.')
    sys.exit(0)

daten = {'host': HOST, 'key': KEY, 'keyLocation': f'https://{HOST}/{KEY}.txt', 'urlList': urls}
anfrage = urllib.request.Request('https://api.indexnow.org/indexnow', data=json.dumps(daten).encode(),
                                 headers={'Content-Type': 'application/json; charset=utf-8'})
try:
    with urllib.request.urlopen(anfrage, timeout=30) as antwort:
        print(f'IndexNow {antwort.status}:', *urls, sep='\n  ')
except urllib.error.HTTPError as fehler:
    # 202 heisst angenommen, Pruefung folgt; 403 Schluessel nicht gefunden; 422 Adresse passt nicht zum Host.
    print(f'::warning::IndexNow antwortet {fehler.code}: {fehler.read().decode()[:300]}')
