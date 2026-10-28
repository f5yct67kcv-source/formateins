#!/usr/bin/env python3
# Schreibt die FAQ als strukturierte Daten (schema.org FAQPage) in die Seiten.
# Quelle sind die <details> im Block class="faq". Nach jeder Aenderung an den
# Fragen ausfuehren: python3 quellen/faq-daten.py (Live-Seiten) oder mit
# Dateinamen: python3 quellen/faq-daten.py entwurf.html
# Ersetzt wird nur, was zwischen <!-- FAQ-DATEN --> und <!-- /FAQ-DATEN --> steht.
import html, json, re, pathlib, sys

wurzel = pathlib.Path(__file__).resolve().parent.parent

def text(roh):
    return re.sub(r'\s+', ' ', html.unescape(re.sub(r'<[^>]+>', '', roh))).strip()

# Ohne Argumente die Live-Seiten; mit Dateinamen als Argument nur diese
# (zum Beispiel die Entwuerfe: python3 quellen/faq-daten.py entwurf.html).
for name in sys.argv[1:] or ['index.html', 'kostenrechner.html', 'website-kosten.html']:
    pfad = wurzel / name
    s = pfad.read_text(encoding='utf-8')
    faq = s[re.search(r'class="faq[" ]', s).start():]
    faq = faq[:faq.index('</div>')]
    paare = re.findall(r'<summary>(.*?)</summary>\s*(.*?)</details>', faq, re.S)
    daten = {
        '@context': 'https://schema.org',
        '@type': 'FAQPage',
        'mainEntity': [{'@type': 'Question', 'name': text(f), 'acceptedAnswer': {'@type': 'Answer', 'text': text(a)}} for f, a in paare],
    }
    block = ('<!-- FAQ-DATEN -->\n<!-- Erzeugt aus den Fragen oben mit quellen/faq-daten.py, nicht von Hand aendern. -->\n'
             '<script type="application/ld+json">\n' + json.dumps(daten, ensure_ascii=False, indent=2) + '\n</script>\n<!-- /FAQ-DATEN -->')
    alt = re.search(r'<!-- FAQ-DATEN -->.*?<!-- /FAQ-DATEN -->', s, re.S)
    if not alt:
        raise SystemExit(f'{name}: Markierung FAQ-DATEN fehlt')
    pfad.write_text(s[:alt.start()] + block + s[alt.end():], encoding='utf-8')
    print(f'{name}: {len(paare)} Fragen')
