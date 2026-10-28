# formateins — Website

Die eigene Website. Webdesign, Branding und Video für Selbstständige, kleine
Unternehmen und Vereine in Olten und der Region. Startseite v2, Preisseite und der
Rechner für alle drei Richtungen sind seit dem 28.10.2026 live.

Statisches HTML, kein Build-Schritt, keine externen Abhängigkeiten. Die zwei
Schriften liegen selbst im Projekt (`schriften/`, `schriften.css`).

## Dateien

| Datei | Inhalt |
|---|---|
| `index.html` | Startseite (v2, live seit 28.10.2026; Gestaltung siehe Zeile `entwurf*` unten) |
| `kostenrechner.html` | Kostenrechner für Website, Branding und Video: Weiche, je Richtung ein Ast, Kombi-Preis, Preisrahmen vor dem Formular. Direktlinks `?fuer=website\|marke\|video` und `?paket=start\|auftritt\|film` |
| `preise.html`, `preise.js` | Preisseite: zuerst Einzelpreise je Richtung, darunter drei Kombi-Pakete mit Optionen zum Ankreuzen. Alle Ansätze stehen in `PREISE` in `preise.js`, der Rechner rechnet damit |
| `website-kosten.html` | Ratgeber «Was kostet eine Website in Olten?», Artikel für die Suche |
| `arbeiten/guardops.html`, `arbeiten/craniosacral-praxis.html` | Projektseiten; liegen im Ordner, darum alle Pfade mit `../` |
| `leiste.css`, `leiste.js` | Menü in Kopfzeile und Mitlaufleiste, Handymenü; auf allen Seiten ausser Gespräch und Rechtsseiten |
| `start-*.webp`, `seite-desktop.webp`, `video-*` | Bilder und Videos der Startseite, Herkunft in den Zeilen unten |
| `anfrage.php` | Nimmt die Anfrage aus dem Rechner an und schickt sie als Mail |
| `gespraech.html`, `termine.php` | Terminbuchung, siehe „Gespräch vereinbaren“ unten |
| `kalender-zugang.php` | Platzhalter für den Kalenderzugang, der Upload füllt ihn aus den Secrets |
| `messung.js` | Banner und Messung mit Google, ausgeschaltet bis eine Kennung steht |
| `impressum.html`, `datenschutz.html` | Rechtsseiten, gemeinsame Gestaltung in `recht.css`, dauerhaft `noindex` |
| `foto.webp`, `portrait.webp` | Fotos, siehe unten |
| `arbeiten/` | Aufnahmen der Projekte für die Werkbank, siehe unten |
| `schriften/`, `schriften.css` | Selbst ausgelieferte Schriften, siehe `schriften/LIZENZ.md` |
| `quellen/` | Vorlagen fuer Teilen-Bild und Favicon, siehe unten |
| `archiv/` | Frühere Entwurfsrichtungen, nicht mehr aktuell |
| `entwurf*.html` | Entwürfe, nur auf Pages sichtbar (siehe CLAUDE.md). Seit dem 28.10.2026 ist v2 live: `entwurf-v2.html` wurde `index.html`, die Unterseiten zogen unter ihre Adressen um; was hier über v2 steht, gilt für die Startseite. Als Entwurf bleiben `entwurf.html` (v1) und die Platzhalter der Bereichsseiten `entwurf-website.html`, `entwurf-branding.html`, `entwurf-video.html`. Bis diese stehen, führen die Links der Bereiche auf Ratgeber, Preisseite und Rechner. `entwurf.html` ist der Stand vom 24.10.2026 (v1, eingefroren), weitergearbeitet wird in `entwurf-v2.html`; die Unterseiten und die Leiste teilen sich beide. v2 (25.10.2026): Die drei Richtungen sind der Tisch, ein Klick auf Fenster, Blatt oder Telefon zoomt wie auf der Live-Seite in die Werkbank-Fläche (Punktraster, Auswahl mit Massen, Inspektor, Werkzeugleiste); die Werkbank-Optik gibt es nur im Zoom, die Übersicht bleibt die Reihe ohne Kasten. Markenblatt als Konstruktionsblatt (Fassung B: Wortmarke mit Grundlinie, x-Höhe, Schutzraum und Massen als SVG); seit dem 26.10.2026 ein einziges Blatt, das entsteht, solange es im Bild ist (Reihe und Stand): Raster und Wortmarke in Playfair 900 stehen sofort, dann wird «eins» Signal, Konstruktionslinien und Masse ziehen sich, Farbfelder probieren Blau, Grün und Ocker und rasten ein, zuletzt Schriften, Regeln und Dunkelprobe; nach vier Sekunden fertig und sofort wieder von vorn (alle 4,3 Sekunden), bei abgeschalteter Bewegung fertig. Ablauf und Zeiten im CSS unter «Das Blatt entsteht». Die Website fährt im kleinen Fenster langsam durch. Im Stand zeigt das Fenster seit dem 27.10.2026 keine ganze Seite mehr, sondern drei Startseiten im Wechsel (formateins, GuardOpS und die Demo Shiro von demo.formateins.ch, bis die Craniosacral Praxis ihre Fotos hat; `start-*-seite.webp` und `-plan.webp`, die obersten 900 Pixel der Aufnahmen auf 1200 × 750): jede steht kurz als Bauplan da, dann zieht die orange Linie durch, alle 3,6 Sekunden die nächste; links die Schlagwörter als Pfeile wie bei Branding und Video. Der Schieber Bauplan/Seite ist dafür weg. formateins ist die Startseite von `entwurf-v2.html` (Stand 27.10.2026) und wird neu aufgenommen, wenn sich ihr Kopf ändert. Der Bauplan entsteht mit `quellen/bauplan.js`, bei Shiro zusätzlich mit `img,video{opacity:0!important}`, weil das Bild sonst durchscheint. Nach «Gebaut, nicht behauptet» folgt der Ablauf «So läuft es ab» in zwei Spalten: links Titel, Satz und Knopf (ab 900 Pixeln angedockt, fährt mit), rechts vier nummerierte Schritte; der orange Balken daneben füllt sich mit dem Scrollen (Leselinie bei 72 Prozent der Fensterhöhe), die Nummern färben sich, sobald er sie erreicht. «Passen wir zusammen?» ist der einzige mittige Abschnitt: Titel und Satz mittig, darunter zwei Boxen mit je vier Punkten («Passt, wenn du …» / «Passt nicht, wenn du …»); die Passt-Box ist orange gerahmt mit leisem Schein, am Zeiger läuft darin die Taschenlampe von der Live-Seite. Die Arbeiten sind Referenzkarten (Bildschirm und Handy, Nummer, Kategorie, Name, Kennwerte als Chips, Link zur Projektseite); der Prüfstand (die Seite selbst im Rahmen, mit Griff und drei Breiten) steht jetzt auf den Projektseiten `arbeiten/*.html` unter «Die Seite selbst». «Wer das macht» ist eine Karte in derselben Form: Foto randlos links in voller Höhe, Text rechts, am Handy Foto oben. Texte in den Ständen und im Ablauf sind Entwurfstext. Die drei Richtungen heissen Webdesign, Branding und Video («Branding» nutzen fast alle Agenturen, «Marke» niemand; vom 25. bis 26.10.2026 hiess die dritte Motion Design, seit dem 27.10.2026 wieder Video, weil das jeder versteht; «Kreation» und «Content» verworfen, weil sie die anderen Bereiche mit einschliessen); die Bereichsseiten heissen `entwurf-branding.html` und `entwurf-video.html`, `entwurf-marke.html` und `entwurf-motion.html` leiten weiter, damit alte Links ankommen. Die Leiste: Menü mit Bereiche, Arbeiten, Preise, Fragen und Knopf, in Kopfzeile und Mitlaufleiste, am Handy als Menüknopf mit offener Liste; auf allen Entwurfsseiten dieselbe. Beim Livegang in `leiste.css`/`leiste.js` umbenennen oder in die Seiten nehmen. Das Logo führt in Kopfzeile, Mitlaufleiste, offenem Menü und Fuss auf die Startseite und lädt sie neu (`href="./"`, auf den Projektseiten `href="../"`). `entwurf-gespraech.html` ist eine Kopie der Live-Seite, bei der nur die Rückwege (Logo, Querlinks) in den Entwurf v2 führen; Inhalt gehört ins Original. `entwurf-kostenrechner.html` ist seit dem 28.10.2026 keine Kopie mehr, sondern der neue Rechner für Website, Marke und Video (siehe „Preise für Marke, Video und Pakete“ unten); er ersetzt beim Livegang `kostenrechner.html`. Impressum und Datenschutz bleiben die Live-Seiten |
| `video-spot.mp4`, `.webm`, `.jpg` | Der Spot im Telefon der dritten Richtung (Video), ohne Ton, 720 px hoch, dazu das Standbild. Aus der Quelle neu bauen: `ffmpeg -i QUELLE.mp4 -an -vf scale=-2:720 -c:v libx264 -crf 27 -preset slow -movflags +faststart video-spot.mp4`, dasselbe mit `-c:v libvpx-vp9 -crf 36 -b:v 0` als `.webm`, Standbild mit `-ss 5.2 -frames:v 1`. Beide Fassungen, weil Chromium ohne Lizenz kein H.264 spielt |
| `video-spot-ton.mp4`, `.webm` | Derselbe Spot mit Ton, für den Motion-Stand mit Tonknopf (das Video trägt `data-ton`). Die Richtung oben behält den stummen Spot. Aus Adrians Fassung mit Ton (26.10.2026): `ffmpeg -i QUELLE.mp4 -vf scale=406:720:flags=lanczos -c:v libx264 -profile:v main -preset slow -crf 28 -c:a aac -b:a 96k -ac 2 -movflags +faststart video-spot-ton.mp4`, als `.webm` mit `-c:v libvpx-vp9 -crf 40 -b:v 0 -c:a libopus -b:a 96k` |
| `video-reel-ton.mp4`, `.webm` und `video-reel-ohne-titel-ton.mp4`, `.webm` | Das Reel im Video-Stand (16 s, 540 × 960, mit Ton), in zwei Fassungen seit dem 27.10.2026: mit Titel-Einblender («Beispiel Werbevideo») fürs Handy, ohne Einblender für ab 900 Pixel, dort läuft der Formate-Kasten mit (Teile ab 0, 4,5, 8 und 12 s). Im HTML stehen die Quellen mit Titel, `data-breit` am Video nennt die Fassung ohne; das Skript wählt nach Breite und fällt auf die Fassung mit Titel zurück, solange die andere fehlt. Beide Fassungen brauchen dieselbe Länge und dieselben Schnitte. Herkunft und Skripte: `quellen/video-reel/` auf `claude/pensive-albattani-870hom`. |

## Noch offen

- **Preise** sind gesetzt, in `PREISE` in `preise.js` (Website wie bisher im Rechner).
  Grundpreis und Zuschlaege je Groesse (Texte, Bilder, Logo, Funktionen), daraus ein Punktwert, der Rahmen ist
  -10 % bis +15 % davon. Ueberarbeiten -20 %, Eilzuschlag +15 % nur bei Termin
  unter sechs Wochen. Lage: oberes Freelancer-Feld, rund halb so teuer wie eine
  Kleinagentur. Nach den ersten echten Projekten nachkalibrieren.
- **Preise für Marke, Video und Pakete** (Entwurf, festgelegt mit Adrian am
  28.10.2026, stehen in `PREISE` in `preise.js`). Lage wie bei der
  Website: Mittelfeld, rund 55–60 % vom Einstieg einer Kleinagentur, klar über
  den Billiganbietern (Faustregel aus dem Hochzeitsfilm: 2'500 gegen 4'500 der
  Profis). Marke: Auffrischung 900, Logo und Erscheinungsbild 1'900, mit Drucksachen 2'900,
  Social-Vorlagen +400. Video nach Art und Länge (kurz bis 20 s, mittel 30–60 s,
  lang 60–120 s): Imagefilm 1'800/2'700/3'800, animiert 1'300/2'400/3'500,
  Produktvideo 1'300/2'000/2'900; zweites Format +300/+400/+500,
  Social-Schnitte +600, Sprecherstimme +450. Kombi: die teuerste Richtung voll,
  jede weitere −20 %, Optionen in einem Paket immer −20 %. Rahmen wie im Rechner
  −10 % bis +15 %. Nach den ersten Projekten an der Abschlussquote messen: sagen
  über 80 % ohne Verhandeln Ja, um 10–15 % erhöhen. Marktvergleich: Logo bei
  Schweizer Freelancern 400–1'500, Agentur 1'500–4'000, Corporate Design
  3'500–9'000; Imagefilm ab 4'500 (Basis), mit Interviews ab 6'500;
  Erklärvideo 60–90 s bei Agenturen 3'900–12'500.
  **Name der Markenleistung** (28.10.2026, nach Vergleich mit zwölf Schweizer
  Anbietern): Die Leistung heisst „Logo und Erscheinungsbild“, weil Kunden nach
  „Logo“ suchen und alle Anbieter das Wort voranstellen. Das „Markenblatt“ ist,
  was man am Ende bekommt: alles auf einem Blatt statt eines CD-Manuals,
  Styleguides oder Brand Guidelines, wie die Konkurrenz es nennt. Als Name der
  Leistung allein liess „Blatt“ den Preis zu klein wirken.
  Die Richtung heisst auf Preisseite und im Rechner „Branding“ wie auf v2
  (entschieden 28.10.2026); im Code bleibt der Schlüssel `marke`.
- **Laufende Kosten** stehen im Ergebnis als feste Zeile: rund CHF 200–250 im
  Jahr fuer Hosting und Domain (Hostpoint Standard ab CHF 15.90/Monat plus Domain), beim Anbieter auf den Namen des Kunden. Betrag
  steht im HTML (`class="laufend"`), pruefen wenn der Hoster die Preise aendert.
- **Fotos vor Ort** kosten pauschal CHF 650 (halber Tag, Anfahrt bis 30 km),
  ein Video laeuft ueber die Video-Preise und liefert die Bilder fuer die Seite
  gleich mit. Der Rechner fragt freiwillig den Ort ab, er steht in der Anfrage.
- **Versand der Anfragen** laeuft ueber `anfrage.php` beim Hoster (Hostpoint).
  Das Skript prueft die Angaben, schickt sie als Mail und legt keine Anfrage ab. Es
  bremst nach fuenf Anfragen pro Stunde und Absender, faengt Spam-Programme ueber
  ein unsichtbares Feld und eine Zeitfalle ab (unter acht Sekunden Seitenzeit gibt
  es ein falsches „ok“) und nimmt nur Anfragen von der eigenen Seite an.
- **Telefon ist Pflicht** im Anfrageformular (Schweizer Nummer mit zehn Ziffern
  oder +41, sonst Ausland mit Vorwahl; gleiche Regel in `kostenrechner.html`,
  `gespraech.html`, `anfrage.php` und `termine.php`). Grund: Angebote koennen im
  Spam landen, und vor dem Festpreis kommt ohnehin ein kurzes Gespraech, um die
  Vorstellung des Kunden zu verstehen. Der Preisrahmen bleibt ohne Nummer
  sichtbar, so steht es auch auf der Startseite.
- **Bestaetigung an den Kunden** schickt `anfrage.php` erst, wenn die Anfrage bei
  mir raus ist: HTML mit Textfassung, Preisrahmen und Antworten, Antworten gehen an
  adrian@formateins.ch. Gegen Missbrauch als Spam-Schleuder steht darin nichts
  frei Eingegebenes ausser einem geprueften Vornamen, keine Bemerkung, kein
  Betrieb, keine URL. Die Antworttexte kommen aus `ANTWORTEN` in `anfrage.php`
  (muss zu den `data-wert` im Rechner passen), nicht aus dem mitgeschickten Text.
  Hoechstens eine Bestaetigung pro Adresse und Tag, keine bei Links im Namen.
  Lokal testen: `php -d sendmail_path=… ` mit einem Skript, das die Mail in eine
  Datei schreibt.
  Auf GitHub Pages laeuft kein PHP, dort schlaegt der Versand bewusst fehl.
- **Fotos** sind drin, aus einer Vorlage mit 1448 Pixel Breite: `foto.webp`
  (480 x 480, runder Platz im ersten Bild) und `portrait.webp` (680 x 850, 4:5,
  Abschnitt „Wer das macht"). Vor dem Livegang aus dem Original neu schneiden,
  damit sie auf Bildschirmen mit doppelter Pixeldichte scharf sind:

  ```bash
  cwebp -metadata none -q 80 -crop X Y B H -resize 480 480 original.jpg -o foto.webp
  cwebp -metadata none -q 80 -crop X Y B H -resize 680 850 original.jpg -o portrait.webp
  ```

  Der Kreis wird bis 190 Pixel breit, das Hochformat bis 340, gebraucht werden
  also mindestens 380 und 680 Pixel. `-metadata none` entfernt Kameradaten und Ort.

- **Arbeiten** (`#arbeiten`, zwischen Angebot und häufigen Fragen) zeigen
  Projekte nicht als Galerie, sondern auf einer Werkbank. Zuerst ein Leuchttisch
  mit allen Projekten verkleinert (Fenster und Telefon), ein Klick zoomt in eines
  hinein. Dort: Desktop-Fenster mit Bauplan unter dem Schnitt, Telefon,
  Inspektor mit drei Kennzahlen in Kundensprache: wievielmal leichter als
  der Durchschnitt, Cookies, Hosting in der Schweiz. Beide Geräte fahren die
  Seite von selbst ab, in gleichem Tempo für jede Seitenlänge (`--tempo`, Zeit
  pro Bildschirm voll, heute 4 s). Zwei gestrichelte Plätze „in Arbeit“ halten Raum für weitere
  Projekte. Projekte: GuardOpS (online), Craniosacral Praxis Johann von Arb
  (noch ohne Fotos aufgenommen).

  **Aufnehmen.** `quellen/aufnahme.mjs` steuert Chrome über das
  DevTools-Protokoll und nimmt die ganze Seite in fester Breite auf. Chrome ohne
  Kopf rendert sonst nicht schmaler als rund 500 px, Handy-Aufnahmen wären
  breiter als 390 und rechts abgeschnitten. Die Ausgabe nennt die Seitenhöhe.

  ```bash
  node quellen/aufnahme.mjs https://ADRESSE/ 1440 1 desk.png
  node quellen/aufnahme.mjs https://ADRESSE/ 1440 1 plan.png quellen/bauplan.js
  node quellen/aufnahme.mjs https://ADRESSE/ 390 2 mobil.png
  cwebp -metadata none -q 62 desk.png -o arbeiten/NAME-desktop.webp
  cwebp -metadata none -q 62 plan.png -o arbeiten/NAME-bauplan.webp
  cwebp -metadata none -q 62 -resize 440 0 mobil.png -o arbeiten/NAME-mobil.webp
  ```

  Der Bauplan ist dieselbe Seite mit eingeschobenem Stil: Hintergründe weg,
  Text in Balken, Abschnitte gestrichelt. Er muss mit denselben Massen wie
  `desk.png` aufgenommen werden, sonst springt die Seite am Schnitt.

  Für den Leuchttisch je zwei kleine Vorschauen, das obere Bildschirmende:
  `NAME-vorschau.webp` (1440 × 900 aus `desk.png`, verkleinert auf 960 × 600)
  und `NAME-vorschau-mobil.webp` (780 × 1688 aus `mobil.png`, verkleinert auf
  220 × 476). Die Desktop-Vorschau dient im Projekt auch als Platzhalter, bis
  die grosse Aufnahme geladen ist.

  Danach in `index.html` die Höhen `--h` und `data-mass` auf die neue
  Seitenlänge setzen, die Kennzahlen im Inspektor im Browser nachmessen
  (Netzwerk, übertragene Grösse, Hosts, Cookies) und die Zahl hinter `?v=` an
  allen Bildadressen der Werkbank hochzählen. Sonst zeigen Browser bis zu zehn
  Minuten lang das alte Bild aus dem Zwischenspeicher.

  **Kennzahlen im Inspektor.** Der Faktor ist 2652 KB geteilt durch das
  gemessene Gewicht der ganzen Seite, abgerundet. 2652 KB ist der Median aller
  Seiten am Desktop laut HTTP Archive, Web Almanac 2024; die Quelle steht als
  Fussnote unter der Werkbank. Gibt es einen neueren Almanac, Wert und
  Fussnote zusammen nachführen. „0 Cookies“ und „CH“ nur hinschreiben, wenn es
  für das Projekt stimmt: keine Cookies, keine fremden Server, Hosting bei
  einem Schweizer Anbieter. Johanns Seite trägt CH schon, gilt aber erst nach
  dem Umzug zu Hostpoint (`LIVEGANG`).

  **Neues Projekt:** eine Karte auf dem Tisch und einen Stand auf der Fläche
  nach dem Muster der bestehenden ergänzen, einen gestrichelten Platz
  entfernen, die Zahl „2 Projekte“ und „von 2“ in der Werkzeugleiste
  anpassen. Pro Kundenprojekt vorher eine schriftliche Freigabe einholen.

- **Anbieterin** ist die pzu consulting gmbh (UID CHE-411.716.010), formateins
  ihre Marke. Die eingetragene Firma muss auf Seite, Offerten und Rechnungen
  sichtbar sein (Art. 954a OR), darum steht sie im Fuss und im Impressum.
  Nicht MWST-pflichtig (Umsatz unter CHF 100'000), darum steht im Rechner
  „Mehrwertsteuer kommt keine dazu“. Wird die GmbH pflichtig: Rechner, FAQ
  und Impressum anpassen. Der Zweck im Handelsregister wird noch um Webdesign
  erweitert.
- **Markenname** formateins. Auf swissreg.ch am 22.10.2026 geprüft, kein
  Konflikt. `formateins.ch` ist registriert. `format1.ch` als Umleitung
  darauf ist noch offen (fängt „eins“ als Ziffer ab).
- **Kontaktweg:** `adrian@formateins.ch` (Postfach bei Hostpoint, seit
  22.10.2026) steht im Fuss, im Abschnitt „Wer das macht“, in Impressum,
  Datenschutz und JSON-LD. Telefon 079 686 84 86 in Fuss, Impressum und JSON-LD. Bewusst nicht an Hotmail
  weiterleiten: Weiterleitungen landen dort gern im Spam, und die
  Datenschutzerklärung geht davon aus, dass Anfragen bei Hostpoint bleiben.
- **Datenschutzerklaerung geht davon aus**, dass `EMPFAENGER` ein Postfach bei
  Hostpoint ist. Wird an Hotmail oder einen anderen Anbieter weitergeleitet,
  muss dieser dort genannt werden.

## Offen am Entwurf v2

Stand 28.10.2026. Was hier steht, wartet auf Adrians Entscheid oder auf
Material. Erledigtes streichen, nicht löschen, bis der Entwurf live ist.

**Entscheide**

- **Reel-Ton abnehmen.** Seit 06ddf28 neu gemischt, mit Musikbett statt
  einzelner Klicks. Am Desktop mit Ton anhören. Gemischt wird in der
  Reel-Sitzung (`quellen/video-reel/` auf `claude/pensive-albattani-870hom`),
  die Seite braucht dafür keine Änderung.
- **Webdesign-Text, Schluss.** «… zu einem festen Preis.» wiederholt das
  Schlagwort daneben («Ein fester Preis, kein Kleingedrucktes.»). Eins von
  beiden kürzen oder bewusst stehen lassen.
- **Preislinks für Branding und Video.** Webdesign hat «Was sie kostet →»,
  die beiden anderen Stände noch nicht. Dafür braucht es Richtwerte von
  Adrian (ab CHF …).

**Gestaltung**

- **Markenblatt am Handy.** Die Dunkelprobe prüfen und den Umbruch von
  «Playfair Display» in der Schriftzeile.
- **Reel nach Breitenwechsel.** Wechselt das Fenster über 900 Pixel, tauscht
  die Seite die Fassung und soll an derselben Stelle weiterlaufen. Lokal nicht
  prüfbar (der Testserver kann nicht im Video springen), auf Pages einmal von
  Hand prüfen: Fenster während des Reels schmal und wieder breit ziehen.

**Material**

- **Craniosacral Praxis** kommt zurück ins Webdesign-Fenster, sobald ihre
  Fotos da sind; bis dahin steht dort die Demo Shiro (keine Kundenreferenz,
  kein Link). Dann auch die Aufnahmen unter Arbeiten erneuern.
- **Bereichsseiten** `entwurf-website.html`, `entwurf-branding.html` und
  `entwurf-video.html` sind noch Platzhalter. Live ging die Startseite ohne
  sie (28.10.2026): Die Kacheln sagen «Was eine Website kostet →» (Ratgeber),
  «Was Branding kostet →» und «Was ein Video kostet →» (Preisseite), die
  Knöpfe in den Ständen führen in den Rechner, der Fuss nennt Preise statt
  der Bereiche. Steht eine Bereichsseite, geht sie einzeln live und die Links
  ihres Bereichs zeigen wieder auf sie («… ansehen →»).
- **Fotos neu schneiden** aus dem Original (siehe oben unter Noch offen).

**Livegang des Entwurfs (erledigt am 28.10.2026)**

- v2 wurde `index.html`, Preisseite, Ratgeber und Projektseiten zogen unter
  `/preise`, `/website-kosten` und `/arbeiten/…` um, die Leiste heisst
  `leiste.css`/`.js`, Bilder und Videos ohne `entwurf`-Präfix. Die Kopien
  `entwurf-kostenrechner.html` und `entwurf-gespraech.html` sind weg, der neue
  Rechner ist `kostenrechner.html`. Für kurze Adressen reicht die allgemeine
  Regel in `htaccess-hostpoint`, eingetragen sind sie in `sitemap.xml`.
- `anfrage.php` kennt die Antworten aus Branding und Video und Mehrfachwahl
  (`richtungen`, `ziel`); der Betreff nennt die Richtungen. Lokal getestet mit
  `php -S` und einem Sendmail-Ersatz, der die Mails in eine Datei schreibt.
- FAQ-Daten neu erzeugt (`python3 quellen/faq-daten.py`, jetzt mit
  `website-kosten.html`).
- Paketnamen (28.10.2026): **Startformat**, **Vollformat**, **Breitbild**, aus
  «formateins» und der Sprache von Foto und Film. Was drin ist, sagt die Zeile
  darüber («01 · Branding und Seite»). Verworfen: «Erster/Ganzer/Grosser Auftritt».
- Danach **Search Console** wie unten unter «Nach dem Livegang des Entwurfs».

## Auslieferung auf Hostpoint

Jeder Push auf `main` lädt die Seite per GitHub Action auf Hostpoint
(`.github/workflows/deploy-hostpoint.yml`), über FTPS mit
`SamKirkland/FTP-Deploy-Action`. Vorher prüft die Action die Syntax von
`anfrage.php` und `messung.js`, bei einem Fehler wird nichts hochgeladen.

Hochgeladen wird alles ausser `archiv/`, `quellen/`, `README.md`, `CLAUDE.md`,
`.github/`, `.claude/`, `.gitignore`, `node_modules/` und allem, was
mit `entwurf` anfaengt (siehe CLAUDE.md, Entwuerfe). Neue Dateien kommen
also von selbst mit, nur neue Ausnahmen gehören in den Workflow.
`htaccess-hostpoint` wird als `.htaccess` ausgeliefert: immer https und
`www.formateins.ch`, Zwischenspeicher-Regeln, Sicherheitskopfzeilen.

### Kommentare bleiben im Repository

Der Quelltext ist dicht kommentiert, und das soll er bleiben — aber nur hier.
Wer auf der Seite den Quelltext öffnet, soll den Bau sehen und nicht die Notizen
dazu. Darum nimmt die Action nach dem Zusammenstellen die Kommentare aus
`dist/`: `node quellen/kommentare-entfernen.mjs dist`, für HTML, CSS und
JavaScript. Allein auf der Startseite sind das rund 25'000 Zeichen, ein Viertel
der Datei.

Bewusst kein Minifizieren. Die Einrückung, die kurz zusammengezogenen Zeilen,
die Reihenfolge der Eigenschaften: das ist die Handschrift der Seite, und ein
Minifizierer schreibt sie um. Das Skript schneidet nur Zeichenbereiche heraus,
der Rest bleibt Zeichen für Zeichen gleich. Wo bei JavaScript ein Kommentar
anfängt, sagt der Parser (`acorn`) und kein Suchmuster — ein `//` kann in einer
Zeichenkette oder einem regulären Ausdruck stehen, und dort darf nichts
verschwinden. Danach vergleicht das Skript die Token vor und nach dem Schnitt;
sind sie nicht identisch, bricht es ab und es wird nichts hochgeladen. PHP
bleibt unberührt, der Quelltext verlässt den Server nie.

Geprüft wurde der Schnitt mit beiden Fassungen im Browser: alle fünf Seiten auf
Handy- und Desktopbreite pixelgleich, gleicher DOM, gleiches Verhalten beim
Durchklicken, gleiche Preisrahmen im Rechner, keine Fehler in der Konsole.

Secrets im Repository (Settings → Secrets and variables → Actions):

| Secret | Inhalt |
|---|---|
| `HOSTPOINT_FTP_HOST` | `sl250.web.hostpoint.ch` (Webhosting itufeden), nicht `ftp.formateins.ch`, sonst passt das Zertifikat nicht |
| `FORMATEINS_FTP_USER` | `deploy@formateins.ch`, Pfad `/home/itufeden/www/formateins.ch` |
| `FORMATEINS_FTP_PASSWORD` | dessen Passwort |
| `KALENDER_BENUTZER` | `adrian@formateins.ch`, Anmeldung bei Hostpoint Cloud Office |
| `KALENDER_PASSWORT` | dessen Passwort. Ändert es sich, hier nachführen, sonst geht jede Buchung nur als Mail ein. Alte Absage-Links werden dann ungültig |

Der FTP-Benutzer ist bewusst auf den einen Ordner beschränkt: Gelangt das
Passwort je nach aussen, kommt man damit nur an diese Seite.

Der Pfad muss genau der Document Root der Website sein (Hostpoint → Websites →
formateins.ch, Grundeinstellung «Apache mit PHP»). Beim ersten Versuch fehlte
`www/`: Der Upload lief fehlerfrei durch, landete aber in einem Ordner, den
niemand ausliefert. Die Abgleichsdatei `.ftp-deploy-sync-state.json` liegt im
Zielordner, die `.htaccess` sperrt sie für Besucher.

Den Workflow kann der normale GitHub-Zugang nicht ändern (fehlender Scope
`workflow`). Für Änderungen daran vorher `gh auth refresh -h github.com -s workflow`,
oder die Datei direkt auf github.com bearbeiten. Neu starten ohne Push:
Actions → «Website zu Hostpoint» → Run workflow.

GitHub Pages läuft parallel weiter, als Vorschau. Nach dem Livegang
abschalten (Settings → Pages), sonst steht die Seite doppelt im Netz.

### Adressen ohne .html

Die Seiten heissen `/kostenrechner`, `/gespraech`, `/impressum`, `/datenschutz`.
Die Dateien behalten ihre Endung, `.htaccess` legt die kurze Adresse intern auf
die Datei und leitet die alte Form mit 301 um (Angaben nach `?` bleiben, also
funktionieren auch Absage-Links aus alten Mails). `/index.html` geht auf `/`.
Interne Links stehen ohne Endung und relativ (`gespraech`, `./#angebot`), damit
sie auch in der Vorschau auf GitHub Pages laufen. Geprueft mit einem lokalen
Apache und denselben Regeln.

## Gespräch vereinbaren

`gespraech.html` zeigt freie Zeiten und bucht sie, `termine.php` holt sie per
CalDAV aus dem Kalender «Gespräche» in Hostpoint Cloud Office
(`https://caldav.hostpoint.ch/caldav/Y2FsOi8vMC8xMDE/`). Kein fremder Dienst,
nichts eingebettet: «0 Cookies» und «Gehostet in der Schweiz» bleiben wahr.

**Bedienung, nur im Kalender:**
- Termin mit Titel **frei** = in diesem Fenster ist buchbar. Feste Zeiten als
  wiederkehrender Termin (wöchentlich, auch mit Ausnahmen).
- **Alles andere** im Kalender «Gespräche» blockiert, auch ganztägig
  («gesperrt») und die gebuchten Gespräche selbst.
- Ohne «frei» ist nichts buchbar. TimeTree (Familienkalender) hat keine
  Schnittstelle, darum gibt Adrian nur frei, was dort frei ist.

**Regeln** zuoberst in `termine.php`: 30 Minuten, 15 Minuten Puffer, ab morgen,
vier Wochen voraus. Ein Fenster 14–17 Uhr ergibt 14:00, 14:45, 15:30, 16:15.
Arten: Telefon oder Video über kMeet (Infomaniak, Schweiz): jede Buchung bekommt
den eigenen Raum `VIDEO_RAUM` + 16 Zufallszeichen, ohne Konto. Der Link steht in
der Bestätigung, im Kalendereintrag (Ort) und in Adrians Mail.

**Ablauf einer Buchung:** Zeit unter Sperre nochmals prüfen, Termin per PUT in
den Kalender, Mail an Adrian, Bestätigung an den Kunden (HTML, `termin.ics`,
Absage-Link mit HMAC). Ist der Kalender nicht erreichbar, geht der Wunsch als
Mail an Adrian („NICHT eingetragen“) und der Kunde sieht „ich bestätige per
Mail“. Absagen über `/gespraech?absagen=…&t=…` löscht den Termin.

**Zugang:** `KALENDER_BENUTZER`/`KALENDER_PASSWORT` als Secrets, der Workflow
schreibt sie beim Upload in `kalender-zugang.php` (per `.htaccess` gesperrt).
Ohne Secrets zeigt die Seite Telefon und Mail statt Zeiten, ebenso auf GitHub
Pages und lokal.

**Lokal testen:** `termine.php` mit geänderter `KALENDER`-Adresse gegen einen
nachgebauten CalDAV-Server (`php -S` mit Router, der REPORT/PUT/GET/DELETE auf
Dateien abbildet), Mails über `sendmail_path` in Dateien.

## Messung und Banner (Google)

Gebaut, aber ausgeschaltet. `messung.js` liegt auf allen vier Seiten und tut
nichts, solange oben in `MESSUNG` keine Kennung steht: kein Banner, keine
Verbindung zu Google, die Datenschutzerklärung zeigt die Fassung ohne Messung.
Einschalten, wenn die Google-Kampagne startet.

**Entschieden (22.10.2026):**

- Google zuerst, Meta später.
- Google laedt erst nach „Akzeptieren“. Vorher geht keine einzige Anfrage an
  Google. Bewusst nicht der erweiterte Einwilligungsmodus, in dem Google auch
  ohne Zustimmung Signale ohne Cookies schickt und fehlende Conversions schätzt.
- Banner als Leiste unten. Titel „Cookies“, Text „Ich nutze Cookies, um zu
  sehen, ob meine Werbung wirkt. Nur wenn du zustimmst.“, Link zum Datenschutz.
  Google steht nicht im Banner, aber in der Datenschutzerklärung.
- Knöpfe „Ablehnen“ und „Akzeptieren“, gleich gross.
- Die Wahl liegt zwölf Monate im Browser (localStorage, kein Cookie). Link
  „Cookies“ im Fuss jeder Seite öffnet den Banner wieder. Wer nachträglich
  ablehnt, dessen Google-Cookies werden gelöscht.

**Gezählt wird** (im Kostenrechner, über `messen()` aus `messung.js`):

| Ereignis | Wann | Rolle |
|---|---|---|
| `page_view` | jeder Seitenaufruf, kommt vom Google-Tag | automatisch |
| `rechner_start` | erste Antwort im Rechner | Nebenziel |
| `rechner_frage` mit `nr` | jede Frage beim ersten Beantworten | Trichter: wo steigen Leute aus |
| `anfrage_gesendet` | erst wenn `anfrage.php` den Eingang bestätigt | Hauptziel, Conversion |
| `kontakt_klick` mit `weg` | Klick auf Mail- oder Telefonlink, auf allen Seiten | Nebenziel |
| `termin_gebucht` mit `art` | erst wenn `termine.php` die Buchung bestätigt | Hauptziel, Conversion wie `anfrage_gesendet` |

Formularinhalte gehen nie an Google, auch nicht die Antworten im Rechner,
nur die Nummer der Frage. Die Mail-Rückfalllösung zählt nicht als Anfrage,
weil niemand weiss, ob die Mail abgeschickt wurde.

**Einschalten:**

1. In Google Analytics eine Property anlegen, Mess-ID `G-…` in
   `MESSUNG.analytics` eintragen. Unter Datenaufbewahrung 14 Monate
   einstellen, so steht es in der Datenschutzerklärung.
2. `anfrage_gesendet` in Analytics als Schlüsselereignis markieren.
3. In Google Ads die Conversion-ID `AW-…` in `MESSUNG.ads` eintragen. Die
   Conversion „Anfrage gesendet“ entweder aus Analytics importieren (dann
   `adsLabel` leer lassen) oder in Ads anlegen und das Label in
   `MESSUNG.adsLabel` eintragen. Nicht beides, sonst zählt sie doppelt.
4. Testen: Seite öffnen, akzeptieren, Rechner durchspielen, eine Anfrage
   schicken und in Analytics unter Echtzeit nachsehen.

Zum Ansehen ohne Kennung: `?banner-test` an die Adresse hängen. Dann
erscheint der Banner, geladen wird nichts.

Die Datenschutzerklärung hat dafür zwei Fassungen (`data-messung="aus"` und
`"an"`). `messung.js` schaltet um, sobald eine Kennung steht. Ändert Google
etwas an Cookies, Anbieter oder Datenübermittlung, dort nachführen.

## Vor dem Livegang

Die SEO-Grundlage steht, aber sie ist bewusst stillgelegt. Alle Schalter sind
im Code mit `LIVEGANG` markiert — `grep -rn LIVEGANG .` findet sie alle.

1. ~~**noindex entfernen**~~ erledigt am 26.10.2026: `index.html`,
   `kostenrechner.html` und `gespraech.html` sind indexierbar, `robots.txt`
   erlaubt alles und nennt die Sitemap, `canonical`, `og:url` und `og:image`
   stehen mit voller Adresse. Impressum und Datenschutz bleiben `noindex`.
2. **Domain einschalten.** `formateins.ch` ist registriert (22.10.2026, bei
   Hostpoint). Adresse der Seite ist `https://www.formateins.ch`; sie steht
   schon in `sitemap.xml`, im auskommentierten Block in `robots.txt`, im
   JSON-LD und in `canonical`/`og:url`. Beim Livegang: bei Hostpoint ein
   Webhosting mit der Domain verknüpfen, die Adresse ohne `www` auf die mit
   `www` umleiten, `canonical` und `og:url` einkommentieren und `og:image`
   auf die volle Adresse setzen (`https://www.formateins.ch/teilen.png`).
   Offen: `format1.ch` als Umleitung.
3. **Versand testen.** `EMPFAENGER` und `ABSENDER` in `anfrage.php` sowie
   `VERSAND.mail` in `kostenrechner.html` stehen auf `adrian@formateins.ch`.
   Nach dem Hochladen auf Hostpoint eine Testanfrage abschicken und prüfen,
   ob sie ankommt, auch im Spam-Ordner. Falls ein eigener Absender gewünscht
   ist (`anfrage@formateins.ch`, zum Filtern), muss er bei Hostpoint als
   Postfach existieren.
4. **Kontaktangaben** stehen: pzu consulting gmbh, Hochgasse 7, 4632
   Trimbach (Sitz laut Handelsregister), `adrian@formateins.ch`,
   079 686 84 86. So in Impressum, Fuss und JSON-LD. Genau dieselben Angaben im
   Google-Unternehmensprofil und in den Verzeichnissen verwenden, im Profil
   als Einzugsgebiet ohne sichtbare Adresse.
5. **Google-Unternehmensprofil anlegen.** Bei lokalen Suchen dominiert das
   Kartenpaket ueber den organischen Treffern, und auch KI-Assistenten stützen
   Empfehlungen wie „Webdesigner in Olten“ stark auf Profile und Bewertungen.
   Die ersten Kunden um eine Bewertung bitten. Kostet nichts.
6. **Bei Google und Bing anmelden.** Google Search Console und Bing Webmaster
   Tools, jeweils die Sitemap einreichen. Bing geht oft vergessen, dabei stützt
   sich die Websuche von ChatGPT unter anderem darauf.
7. **Branchenverzeichnisse:** local.ch und search.ch. Überall genau derselbe
   Name, dieselbe Adresse, dieselbe Telefonnummer wie auf der Seite. Danach
   die Einträge und das Google-Profil im JSON-LD unter `sameAs` eintragen
   (Hinweis steht über dem JSON-LD in `index.html`).
8. **Vermerk auf Kundenseiten**, zum Beispiel „Website: formateins“ mit Link im
   Fuss, nur mit Einverständnis des Kunden. Jede Kundenseite wird so zu einer
   Erwähnung, für Suchmaschinen wie für KI. Bei Johann und GuardOpS zuerst.

### Nach dem Livegang des Entwurfs: Search Console

Sobald die neue Seite auf formateins.ch steht und der Lauf «Website zu
Hostpoint» grün ist, Google und Bing nachführen. Sonst zeigen sie wochenlang
den alten Titel und die alte Beschreibung, und neue Seiten bleiben unbekannt.

1. **Sitemap neu einreichen.** In der Google Search Console unter Sitemaps
   `https://www.formateins.ch/sitemap.xml` erneut senden, mit allen neuen
   Adressen darin. Dasselbe in den Bing Webmaster Tools.
2. **Startseite neu prüfen lassen.** URL-Prüfung für
   `https://www.formateins.ch/`, dann «Live-URL testen» und «Indexierung
   beantragen». Ebenso für jede neue Seite (Preise, Bereichsseiten, Arbeiten).
3. **Weggefallene Adressen.** Gibt es eine alte Adresse nicht mehr, in
   `htaccess-hostpoint` mit 301 auf die neue umleiten, nicht ins Leere laufen
   lassen. In der Search Console unter Seiten nach «Nicht gefunden (404)»
   schauen.
4. **Strukturierte Daten prüfen.** Rich-Results-Test für Startseite und
   Preise (FAQ und Unternehmen), Fehler unter «Verbesserungen» beheben.
5. **Nach einer Woche nachsehen.** Unter Seiten: Sind die neuen Adressen
   indexiert? Unter Leistung: Erscheint der neue Titel in den Suchergebnissen?

Bewusst weggelassen: `llms.txt`. Kein grosser KI-Anbieter nutzt die Datei
nachweislich (Stand Oktober 2026).

Was bereits liegt: Favicons samt `site.webmanifest`, `teilen.png` (Open-Graph-Bild 1200x630),
`robots.txt`, `sitemap.xml`, JSON-LD-Geruest, `lang="de-CH"`, Open Graph und
Twitter Cards auf beiden Seiten.

**FAQ als strukturierte Daten.** Die Fragen auf beiden Seiten stehen
zusätzlich als `FAQPage` im Code, damit Suchmaschinen und KI-Assistenten sie
als Frage und Antwort lesen. Nach jeder Änderung an den Fragen ausführen:

```bash
python3 quellen/faq-daten.py
```

## Massnahmen aus dem Vergleich mit beyondweb.ch

Am 24.10.2026 wurde beyondweb.ch (Webdesign- und SEO-Agentur, Zug) gecrawlt
und mit formateins verglichen. Sieben Massnahmen wurden daraus abgeleitet und
hier festgehalten. Was ohne Adrian geht, ist im Entwurf gebaut; der Rest
wartet auf ihn. Alles liegt in `entwurf*`-Dateien, bis er es abnimmt.

Die Sperre fuer Suchmaschinen (`robots.txt` mit `Disallow: /`, `noindex` auf
den Seiten) ist seit dem 26.10.2026 aufgehoben.

1. **Je Arbeit eine eigene Seite.** Gebaut: `arbeiten/guardops.html`
   und `arbeiten/craniosacral-praxis.html`, je mit Steckbrief,
   Ausgangslage, was gebaut wurde, Bauplan, gemessenen Kennwerten und Link.
   Verlinkt aus dem Pruefstand auf der Entwurfs-Startseite.
   *Adrian:* Ausgangslage je Projekt gegenlesen (die Saetze stammen aus dem,
   was die Seiten selbst zeigen), schriftliche Freigabe der Kunden fuer die
   Nennung einholen (steht schon oben unter Arbeiten), beim Livegang die
   Adressen `/arbeiten/guardops` und `/arbeiten/craniosacral-praxis` in
   `.htaccess` und `sitemap.xml` eintragen.
2. **Text um den Kostenrechner.** Gebaut: `website-kosten.html`,
   „Was kostet eine Website in Olten?“ mit „Das Wichtigste in Kuerze“, den
   drei Groessen samt Rahmen aus den Ansaetzen des Rechners, Zuschlaegen,
   laufenden Kosten, Quellen, FAQ (als `FAQPage` im Code), Artikel-Schema mit
   Autor und Datum, „zuletzt aktualisiert“. Verlinkt aus FAQ und Fuss der
   Entwurfs-Startseite. *Pflege:* Aendern sich die Ansaetze in
   `kostenrechner.html` (`const preis`), die Rahmen im Artikel nachfuehren
   (Grundpreis −10 % bis +15 %). Beim Livegang Adresse `/website-kosten` in
   `.htaccess` und `sitemap.xml`.
3. **Google-Unternehmensprofil fuer Olten** und die ersten Kunden um eine
   Bewertung bitten. *Adrian*, steht auch unter „Vor dem Livegang“. Sterne
   auf der Website erst ab etwa fuenf Bewertungen, mit echter Zahl.
4. **Suchbegriff sichtbar im Text.** Gebaut: eine Zeile „Webdesign in Olten
   und der Region“ ueber den Bereichen in `entwurf.html`. H1 bleibt
   „Du machst gute Arbeit.“
5. **„Passen wir zusammen?“** mit Ja- und Nein-Liste. Gebaut als Abschnitt
   `#passung` in `entwurf.html` zwischen Arbeiten und Fragen. Die Punkte
   stammen aus Aussagen, die schon auf der Seite stehen (keine Shops, kein
   Login, kein Platz-eins-Versprechen, nichts unter tausend Franken).
6. **Datum und Pflege sichtbar.** Gebaut in `entwurf.html`: `WebPage` mit
   `dateModified` im Schema, „Kennwerte gemessen am …“ unter dem Pruefstand;
   die neuen Seiten tragen `datePublished`/`dateModified` und ein sichtbares
   Datum. *Adrian:* `sameAs` (Google-Profil, LinkedIn, local.ch, search.ch)
   sobald es die Eintraege gibt; `kostenrechner.html` ist live und bekommt
   sein „zuletzt aktualisiert“ erst mit der Abnahme des Entwurfs.
7. **Ansprechperson als Block.** Gebaut in `entwurf.html`, Abschnitt „Wer das
   macht“: Telefon, E-Mail und „30 Minuten, kostet nichts“ direkt unter dem
   Text, zusaetzlich zum Fuss.

Bewusst nicht uebernommen: Stadtseiten (Aarau, Zofingen, Solothurn), Zaehler
per Skript, Presselogos, Knappheitsdruck, Tracker.

## Gestaltungsauftrag

Der Auftrag, nach dem die beiden Hauptseiten gebaut sind. Er stand bis zum
23.10.2026 als Kommentar in `index.html` und `kostenrechner.html` und steht
jetzt hier: er gehoert zur Arbeit am Bau, nicht in die Datei, die der Besucher
laedt.

**Startseite**

- *Leitsatz:* Eine Person aus Olten baut Websites von Hand zum Festpreis. Die
  Seite zeigt das Gesicht im ersten Bild und den Preisweg. Arbeiten erscheinen
  nicht als Referenzband, sondern aufgeschnitten auf einer Werkbank
  (`#arbeiten`). Sie verweigert die Paketkarten-Tabelle.
- *Eigene Welt:* Schiefer als kuehler getraenkter Grund, warmes Creme als
  Papier, Signalorange als einziges Signal. Playfair Display als Stimme,
  Schibsted Grotesk fuer alles Funktionale. Karten gibt es nicht — es gibt
  Flaechen, Zeilen und ein rundes Portraet mit laufendem Schriftring.
- *Weg des Besuchers:* Er erkennt sein Problem, sieht wer dahintersteht,
  versteht den Ablauf und holt sich den Preisrahmen, ohne vorher telefonieren
  zu muessen.
- *Erster Bildschirm:* Schieferblaue Vollflaeche, Headline links ueber sieben
  Spalten, darunter Knopf in Signalorange und ruhiger Zweitweg, rechts das
  runde Portraet mit Schriftring, der Name und Ort traegt.
- *Form:* Vierte Richtung, vom Nutzer gewaehlt nach drei gewuerfelten
  Vorschlaegen (`archiv/richtungen.html`).

**Kostenrechner**

- *Leitsatz:* Der Rechner qualifiziert, statt Kontaktdaten abzugreifen. Der
  Preis steht vor dem Formular, nicht dahinter. Er verweigert die uebliche
  Leadstrecke, in der die Zahl erst nach der Mailadresse kommt.
- *Eigene Welt:* Dieselbe Welt wie die Startseite — Schiefer, Creme,
  Signalorange, Playfair Display und Schibsted Grotesk. Eine Frage pro
  Bildschirm, keine Karten.
- *Weg des Besuchers:* Sieben Fragen, sofort ein Rahmen, dann entscheidet er
  selbst, ob er seine Daten hergibt.
- *Erster Bildschirm:* Knotenleiste oben wie der Ablauf der Startseite, Frage
  gross gesetzt, Antworten als breite Zeilen, Zurueck links und Weiter rechts
  unten.
- *Form:* Vierte Richtung, Fortsetzung der Startseite.

## Logo

Wortmarke ohne Zeichen: „format“ in Schibsted Grotesk 700, „eins“ in Playfair
Display 900 und Signalorange — dieselben zwei Stimmen wie in den Ueberschriften.
Im HTML als `<span class="s">format</span><span class="p">eins</span>` in
`.logo`. Die verworfenen Varianten liegen in `archiv/logo-varianten.html`.

## Markenpaket

`quellen/marke/` baut ein ZIP mit allem, was jemand ausserhalb der Website
braucht: Wortmarke als SVG (Buchstaben als Pfade, keine Schrift noetig) und PNG,
Signet „fe“, Favicons mit Manifest, Profilbild, LinkedIn-Banner, Titelbild fuer
das Google-Profil, die CSS-Variablen und das Stylesheet als PDF (Logo, Farben mit
HEX/RGB/CMYK und Kontrast, Schriften, Regeln).

- `umriss.py` setzt Wortmarke und Signet mit HarfBuzz aus den Schriften in
  `schriften/`, mit derselben Laufweite wie `.logo` im CSS. Nachgeprueft:
  deckungsgleich mit der Darstellung im Browser.
- `bauen.py` erzeugt SVGs und Vorlagen, `raster.mjs` rendert sie mit Chrome zu
  PNG und PDF. Farben stehen in `bauen.py` oben und muessen zu `:root` in
  `index.html` passen. `web/formateins.css` wird direkt aus `index.html` gezogen.
- Vier Instagram-Beitraege (1080x1440) mit Bildunterschriften. Fuer den
  Beitrag zu Johann liegt `johann-handy.webp` daneben: seine Seite am Telefon,
  abgeschnitten ueber der Karte „Platz fuer ein Foto“. Sobald seine Fotos drin
  sind, neu aufnehmen. Der Willkommensbeitrag nimmt `willkommen-foto.webp`
  (gleicher Ausschnitt wie `foto.webp`, aber 640 px aus der Vorlage mit 1448 px)
  und `willkommen-licht.webp`, einen Hintergrund aus Higgsfield (GPT Image 2.5,
  3:4, Qualitaet high, 2K), auf 1080 px Breite verkleinert. Prompt: „Empty
  photographic studio backdrop, hand-painted canvas in deep slate blue-grey
  (#1b2a33), subtle mottled texture, a soft warm orange glow (#ff8a4c) like a
  low sun halo centered slightly above the middle, fading gently into darkness
  at the edges, minimal, calm, premium, editorial. No objects, no people, no
  text, no logos.“
- Profilbild auf Instagram ist das Signet. Anheften lassen sich hoechstens drei
  Beitraege: Willkommen, Johann und Kostenrechner; „Haltung“ laeuft normal.
- Signalorange traegt auf Weiss oder Papier keinen Text (Kontrast nur 2.0 bis
  2.3 zu 1), nur Flaechen, Linien und die Wortmarke. Fuer Druck auf hellem
  Grund ist ein tieferes Orange noch offen.
- CMYK sind Richtwerte ueber das macOS-Profil „Generic CMYK“.
- Die Schriftdateien liegen bewusst nicht im Paket: Playfair Display hat einen
  reservierten Namen, eine beschnittene Fassung duerfte so nicht weitergegeben
  werden. Das Stylesheet verweist auf Google Fonts.

```bash
python3 -m venv /tmp/marke-venv
/tmp/marke-venv/bin/pip install "fonttools[woff]" uharfbuzz skia-pathops pillow
/tmp/marke-venv/bin/python quellen/marke/bauen.py ~/Downloads/formateins-marke.zip
```

## Teilen-Bild und Favicon neu erzeugen

Das Teilen-Bild wird aus `quellen/teilen.html` mit Chrome gerendert, damit es die
echten Schriften traegt. Lokalen Server starten (siehe unten), dann:

```bash
C="/Applications/Google Chrome.app/Contents/MacOS/Google Chrome"
"$C" --headless=new --hide-scrollbars --force-device-scale-factor=1 --virtual-time-budget=3000 --window-size=1200,630 --screenshot=teilen.png http://localhost:8000/quellen/teilen.html
```

Die Favicons (`favicon.ico`, `favicon.svg`, `apple-touch-icon.png`,
`icon-192.png`, `icon-512.png`, `site.webmanifest`) kommen aus dem Markenpaket.
Paket bauen (siehe „Markenpaket“), dann im Repo:

```bash
unzip -o -j ~/Downloads/formateins-marke.zip 'formateins-marke/favicon/*' -x '*EINBAUEN.txt' -d .
```

## Lokal ansehen

```bash
php -S 127.0.0.1:8000 -t . quellen/lokal.php
```

Dann `http://localhost:8000` öffnen. Der Router `quellen/lokal.php` liefert die
Seiten wie Hostpoint ohne `.html` aus; ein einfacher `python3 -m http.server`
kennt `/gespraech` nicht. Formular und Terminbuchung schicken lokal nichts ab.
