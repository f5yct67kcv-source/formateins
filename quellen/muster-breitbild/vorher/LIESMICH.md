# Vorher-Auftritt der Schreinerei Kully (Schritt 1.2)

Quellen für die Bilder des alten Auftritts: Logo von 1994 (drei Varianten),
Website von 2011, Profil mit dem letzten Beitrag von 2019. Die Bilder selbst
liegen nicht im Repository (ENT-030), sie lassen sich hieraus neu rechnen.

| Datei | Was |
|---|---|
| `logos.py` | zeichnet `logo-a.svg`, `logo-b.svg`, `logo-c.svg` und das Blatt `logos.html` |
| `website-2011.html` | die alte Website, `LOGO` durch die Logo-Datei ersetzen |
| `profil-2019.html` | das stille Profil, `LOGO` ebenso |
| `render.cjs` | Bild mit Playwright: `node render.cjs <html> <png> <breite> <höhe> voll` |

Daneben braucht es `fonts/fonts.css` mit Yellowtail (Google Fonts, OFL) für
Logo B und `fotos/web1.jpg` bis `web4.jpg`.

Die Fotos sind mit KI gerechnet (Higgsfield, `gpt_image_2_5`, 30.10.2026, je
0.25 Credits), im Higgsfield-Konto unter diesen Jobs:

| Foto | Job |
|---|---|
| web1 Küche in Kirschbaum, Blitz | 2c7dbca3-fe2c-47f9-8f4b-eb1b81036256 |
| web2 Werkstatt mit Formatkreissäge | 7289ac02-2c37-41c3-aec8-b1e9d0752438 |
| web3 Einbauschrank mit Spiegeltüre | d03f28c0-eff6-481b-bc11-f34de0006fe7 |
| web4 Weihnachtsbaum aus Reststücken | d5ac2feb-417a-4cec-8d14-ba8f1dc9980e |

Verkleinert auf 400 bis 560 Pixel Breite, JPEG-Qualität 55, damit sie wie 2011
aussehen.
