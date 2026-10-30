# Agentic Browsing (Lighthouse) – Prioritäten formateins.ch

Stand: 30.10.2026. Analyse von Adrian, Gegenprobe am Code unten (ENT-060).
Quelle: [Chrome for Developers – Lighthouse: Bewertungen der Kategorie «Agentic Browsing»](https://developer.chrome.com/docs/lighthouse/agentic-browsing/scoring?hl=de)
Ergebnis heute: 3/3 bestanden (Barrierefreiheit für Agenten, llms.txt, Layoutstabilität).
WebMCP ist experimentell (ab Chrome 150) und nur ein Hinweis, noch nicht bewertet.

## Ziel
KI-Agenten (surfen, füllen Formulare aus, fassen Inhalte zusammen) sollen die Seite
verstehen und bedienen können. Sie lesen den Barrierefreiheitsbaum, nicht das Design,
und klicken oft auf Bildschirm-Koordinaten.

## Prioritäten

### P1 – llms.txt bei jedem Update mitpflegen (9/10)
- Datei: /llms.txt (Markdown, Stand 28.10.2026, Inhalt vollständig und gut)
- Ändern sich Preise, Pakete, Seiten, Arbeiten oder Kontakt → llms.txt im gleichen Commit anpassen
- Datum «Stand:» in der Datei jeweils nachführen
- Gleiche Regel für sitemap.xml (neue Seite = Eintrag + lastmod)
- Gehört auf die Checkliste vor jedem Deploy

### P2 – Keine Layout-Sprünge (8/10)
- Gemessen über CLS; Verschiebungen lassen Agenten daneben klicken
- /kostenrechner: CLS mobil 0,071 (Ziel ≤ 0,02) → Platz für Ergebnisfeld und dynamische Elemente vorab reservieren (feste Höhe / min-height)
- Bilder und Videos immer mit width/height bzw. aspect-ratio
- Schriften: font-display und passende Ersatzschrift, damit beim Laden nichts springt

### P3 – Jedes Bedienelement beschriften (8/10)
- Jeder Button, Link und jedes Feld braucht einen lesbaren Namen
- Icon-Buttons (Menü, Pfeile, Video-Play/Pause, Schliessen) → aria-label
- Formularfelder → echtes <label for="…">, nicht nur Platzhalter
- Bedienelemente nie mit aria-hidden oder versteckten Elternelementen ausblenden
- Rollen und Verschachtelung korrekt halten (keine div-Buttons ohne role/Tastaturbedienung)

### P4 – Inhalte als echtes HTML ausliefern (7/10)
- Heute gut gelöst: der ganze Text steht im Quellcode, nicht erst nach JavaScript
- Bei neuen Seiten und Effekten so beibehalten

### P5 – WebMCP für Formulare vorbereiten (heute 3/10, später höher)
- Betrifft: /gespraech (4 Felder) und /kostenrechner (6 Felder), heute ohne Attribute
- Umsetzen, sobald der Standard stabil ist (Backlog, nicht jetzt)
- Deklarativ im HTML, Beispiel:

  ```html
  <form toolname="gespraech_anfragen"
        tooldescription="Fragt ein unverbindliches Erstgespräch mit formateins an">
    <input name="email" type="email" toolparamdescription="E-Mail-Adresse der anfragenden Person">
  </form>
  ```

- Alternativ per JS: `document.modelContext.registerTool(...)`
- Max. 40 Werkzeuge pro Seite, Namen handlungsorientiert, Beschreibung präzise

### P6 – robots.txt bewusst offen halten (Ergänzung, nicht aus der Doku)
- Heute: alles erlaubt, auch für KI-Crawler → so lassen, solange formateins in KI-Antworten erscheinen soll
- Bei jeder Änderung an robots.txt prüfen, dass Agenten und Suchmaschinen nicht ausgesperrt werden

## Gegenprobe am Code (30.10.2026)

Lokal geprüft mit Playwright (Chromium, 412 px mobil, gedrosselt auf Slow 4G
und vierfach langsamere CPU, wie PageSpeed) und mit dem Barrierefreiheitsbaum
von Chromium.

**P2, Kostenrechner: Ursache gefunden und behoben (ENT-061).** Die 0,071
liessen sich genau nachstellen. Gesprungen ist allein die Fusszeile, nicht das
Ergebnisfeld: Alle Fragen waren im HTML versteckt (`.frage{display:none}`),
erst das Skript zeigte die erste. Bis dahin war die Bühne 0 px hoch und die
Fusszeile stand 235 px zu weit oben. Jetzt trägt die erste Frage `dran`
schon im HTML. Danach CLS 0,000, die Fusszeile steht mit und ohne Skript an
derselben Stelle, das Bild nach dem Laden ist pixelgleich (390 und 1366 px).
Die Schriften waren nicht die Ursache (mit gesperrten Schriften gleiches
Ergebnis). Übrige Seiten: Startseite 0,000, Gespräch 0,001.

**P3: erfüllt.** Auf allen sieben ausgelieferten Seiten hat jedes Bedienelement
(Knopf, Link, Feld) einen Namen. Alle Felder in Gespräch und Kostenrechner
haben ein echtes `<label>`, auch das versteckte Spamfeld. Der Menüknopf trägt
`aria-label="Menü"`, die Bildknöpfe ihr eigenes `aria-label` (ENT-051).

**P1: richtig, mit Einschränkung.** Lighthouse prüft nur, ob `llms.txt` da
ist. Die grossen KI-Suchen lesen sie heute nicht (README, «KI-Suchen»). Sie
aktuell zu halten lohnt sich trotzdem, weil falsche Preise darin schlimmer
wären als keine Datei. Die Regel «im selben Commit wie die Preisänderung»
steht schon im README bei `preise.html` und `llms.txt`.

**P5: Versionsangabe nicht belegt.** Die Übersichtsseite der Quelle nennt
WebMCP als Prüfung, aber keine Chrome-Version und nicht, dass sie nur ein
Hinweis ist. «Ab Chrome 150» stammt aus Adrians Analyse und ist hier nicht
nachgeprüft. Backlog, ENT-062.

## Quellen
- Übersicht und Bewertung: https://developer.chrome.com/docs/lighthouse/agentic-browsing/scoring?hl=de
- llms.txt: https://developer.chrome.com/docs/lighthouse/agentic-browsing/llms-txt?hl=de
- Spezifikation llms.txt: https://llmstxt.org/
- Layoutstabilität: https://developer.chrome.com/docs/lighthouse/agentic-browsing/layout-stability?hl=de
- Barrierefreiheit für Agenten: https://developer.chrome.com/docs/lighthouse/agentic-browsing/accessibility-for-agents?hl=de
- Registrierte WebMCP-Tools: https://developer.chrome.com/docs/lighthouse/agentic-browsing/registered-webmcp-tools?hl=de
- Formulare ohne deklaratives WebMCP: https://developer.chrome.com/docs/lighthouse/agentic-browsing/forms-missing-declarative-webmcp?hl=de
- Geprüft auf formateins.ch am 30.10.2026 (llms.txt, robots.txt, Formulare, CLS aus PageSpeed-Bericht 12:45)
