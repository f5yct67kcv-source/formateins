# Logbuch formateins.ch

Jeder Entscheid und jede Aufgabe bekommt eine Nummer **ENT-…**, die nie
wiederverwendet wird. `[x]` heisst erledigt und belegt (Commit oder Lauf),
`[ ]` heisst offen. Neue Einträge kommen unten an die Liste, die Nummer zählt
weiter. Wird ein Entscheid später geändert, bekommt die Änderung eine neue
Nummer und verweist auf die alte, der alte Eintrag bleibt stehen.

Läufe = Actions «Website zu Hostpoint» (#Nummer). Commits auf `main`.

## Einträge

- [x] **ENT-001** · 26.10.2026 · Schreibstil festgelegt: Titel als Hook, Ich-Form
  und du, konkret statt Floskel, kein «Betrieb», nicht gendern, CHF 2'400.
  Beleg: `CLAUDE.md`, «Schreibstil der Seite».
- [x] **ENT-002** · 27.10.2026 · formateins.ch bleibt reines HTML. Bei neuen
  Projekten zuerst HTML oder Astro abwägen, Adrian entscheidet. Beleg: `3a957bb`.
- [x] **ENT-003** · 27.10.2026 · Die dritte Richtung heisst wieder «Video»
  (vorher Motion Design). Beleg: README, Abschnitt `entwurf*.html`.
- [x] **ENT-004** · 28.10.2026 · Die Markenleistung heisst «Logo und
  Erscheinungsbild». «Markenblatt» ist nur das, was man am Ende bekommt.
  Beleg: `8c2b1a8`.
- [x] **ENT-005** · 28.10.2026 · Preise im Mittelfeld. Kombi: die teuerste
  Richtung voll, jede weitere −20 %, Optionen im Paket −20 %. Beleg: `preise.html`,
  `kostenrechner.html`, Lauf #31.
- [x] **ENT-006** · 28.10.2026 · Die Richtung heisst «Branding» statt «Marke».
  Im Code bleibt der Schlüssel `marke`. Beleg: `1e5593e`.
- [x] **ENT-007** · 28.10.2026 · Der Ratgeber bleibt als Artikel für die Suche.
  «Preise» im Menü führt auf die neue Preisseite, die Preisseite verlinkt den
  Ratgeber. Beleg: `bbf0962`, `1a08ce9`.
- [x] **ENT-008** · 28.10.2026 · Paketnamen: Startformat, Vollformat, Breitbild.
  Beleg: `ef89e1a`.
- [x] **ENT-009** · 28.10.2026 · Livegang der neuen Seite ohne Bereichsseiten.
  Die Bereichslinks führen bis dahin auf Ratgeber und Preisseite. Beleg:
  `b421ca0`, Lauf #31 («Sync complete»).
- [x] **ENT-010** · 28.10.2026 · Ladezeit: Spot und Reel laden erst bei Bedarf,
  am Handy ein kleineres Website-Bild. Startseite am Handy 680 → 355 kB, am
  Desktop 1'765 → 355 kB, Lighthouse 97 / 100. Beleg: `21a9104`, `7cec7e1`.
- [x] **ENT-011** · 28.10.2026 · Craniosacral Praxis: «Gehostet in der Schweiz»
  ist entfernt, solange die Praxisseite auf GitHub Pages liegt. Beleg: `8e6a48d`.
  Wieder einsetzen: ENT-017.
- [x] **ENT-012** · 28.10.2026 · Titel: Startseite «Webdesign, Branding und Video
  aus Olten», Ratgeber «Website erstellen lassen: Was kostet das?». Die
  Startseite trägt den Suchbegriff bewusst nicht. Beleg: `e102425`, Lauf #32.
- [x] **ENT-013** · 28.10.2026 · Sitemap in der Google Search Console und in den
  Bing Webmaster Tools eingereicht (Adrian).
- [x] **ENT-014** · 28.10.2026 · Google-Unternehmensprofil eingerichtet (Adrian).
- [ ] **ENT-015** · 28.10.2026 · PageSpeed Insights auf formateins.ch messen.
  Läuft in einer anderen Sitzung, Ergebnis hier nachtragen.
- [x] **ENT-016** · 28.10.2026 · Logbuch eingeführt. Jeder Entscheid und jede
  Aufgabe bekommt eine ENT-Nummer. Beleg: diese Datei, Regel in `CLAUDE.md`.
- [ ] **ENT-017** · offen · Craniosacral: «Hosting: Schweiz» und die Kennzahl
  «CH» wieder einsetzen, sobald die Praxisseite auf Hostpoint liegt. Hinweis
  als Kommentar in `arbeiten/craniosacral-praxis.html`.
- [x] **ENT-018** · 28.10.2026 · `sameAs` in den strukturierten Daten der
  Startseite: Google-Unternehmensprofil als feste Maps-Adresse
  `https://maps.google.com/?cid=11383681249379744707`. Die Kunden-ID stammt aus
  Adrians Suchlink. local.ch und search.ch folgen in ENT-027. Beleg: `fadeaa2`,
  Lauf #35 («Sync complete», IndexNow 200). Am 29.10.2026 von Adrian
  geprüft: Der Link öffnet das richtige Profil. Bleibt auf Maps, kein Suchlink.
- [ ] **ENT-019** · offen · Bereichsseiten Website, Branding und Video als
  `entwurf-*`, jede geht einzeln live.
- [ ] **ENT-020** · offen · Zweite Sitzung (v2-Zweig) ist pausiert. Sie hat in
  `entwurf-v2.html` gearbeitet, die seit ENT-009 `index.html` ist. Vor dem
  Weiterarbeiten `main` holen und in `index.html` arbeiten.
- [ ] **ENT-021** · offen · `CLAUDE.md` korrigieren: GitHub Pages baut aus
  `claude/stoic-archimedes-xpyk3n`, nicht aus `main`.
- [x] **ENT-022** · 28.10.2026 · KI-Auffindbarkeit: Bestandsaufnahme gemacht.
  Adrian nimmt strukturierte Preise, llms.txt und IndexNow (ENT-023 bis
  ENT-025), die Verknüpfung mit dem Google-Profil folgt (ENT-018).
- [x] **ENT-023** · 28.10.2026 · Preisseite mit strukturierten Daten: alle
  Einzelpreise und Pakete als Angebote mit Preisrahmen in CHF, verknüpft mit
  formateins auf der Startseite (`@id`). Beleg für ENT-023 bis ENT-025: der
  Commit `71e189d`, Lauf #33 («Sync complete»).
- [x] **ENT-024** · 28.10.2026 · `llms.txt`: die Seite als kurzer Text für
  KI-Suchen, mit Kontakt, Preisen, Ablauf und Links. Als UTF-8 ausgeliefert.
- [x] **ENT-025** · 28.10.2026 · IndexNow: Nach jedem Upload meldet der Workflow
  die geänderten Seiten an Bing und die anderen IndexNow-Suchmaschinen.
- [ ] **ENT-026** · offen · In etwa einer Woche prüfen, ob KI-Suchen die Seite
  lesen: ChatGPT oder Perplexity fragen «Was kostet eine Website bei
  formateins.ch?». Stimmen die Zahlen, lassen Hostpoint und robots.txt die
  Crawler durch. IndexNow ist schon bestätigt: Lauf #33 meldete Startseite und
  Preisseite, Antwort 202 (angenommen).
- [ ] **ENT-027** · offen · Einträge bei local.ch und search.ch anlegen (Adrian),
  mit demselben Namen, derselben Adresse und Telefonnummer wie auf der Seite.
  Danach die Adressen in `sameAs` auf der Startseite ergänzen.
- [x] **ENT-028** · 29.10.2026 · Die grossen Updates sind seit dem 28.10.2026
  abends live. Ab jetzt wird am Entwurf weitergearbeitet (`entwurf*`, Arbeitszweig).
  Nichts geht auf `main` und damit live ohne Adrians ausdrückliches Einverständnis,
  auch keine Logbuch-Nachträge. Bestätigt die Regel in `CLAUDE.md`.
- [x] **ENT-029** · 29.10.2026 · Abschnitt «Gebaut, nicht behauptet» neu: drei
  Drittel statt zwei Website-Karten. Website (gebaute Seiten laufen durch wie im
  Webdesign-Stand), Video (stummer Loop mit Referenzen), Branding (Kundenlogos).
  Entwurf in `entwurf-start.html`, Varianten als Bild, Adrian wählt.
  Stand 29.10.2026: Fassung A (Kacheln mit Rahmen, Logos im Wechsel auf der
  Markenfarbe) und B (ohne Rahmen, hoch, Logos als Wand) gebaut, `?v=a` / `?v=b`.
  Logos als `entwurf-logo-guardops.svg` und `entwurf-logo-johann.svg` aus Drive.
  Adrian am 29.10.2026: Reihenfolge wie oben (Website, Branding, Video) und alles
  freistehend, ohne Boxen oder Karten. Gebaut als Fassung C (Standard), Logos
  als Wand mit Markenfarben oder mit `?logos=wechsel` einzeln im Wechsel.
  Adrian am 29.10.2026: Logos im Wechsel (jetzt Standard, Wand mit `?logos=wand`),
  Text neben dem Titel passt, Farbpunkte weg. Vier Auftritte für die Logos zur
  Wahl: `?anim=linie` (Standard), `zeichnen`, `raster`, `fokus`.
  Adrian am 29.10.2026: «Linie». Fest eingebaut, die anderen drei sind entfernt.
  Adrian am 29.10.2026: das eigene formateins-Logo nicht verwenden, dafür das
  Demo-Logo Sportcenter Lindenfeld (von Adrian gestaltet, nur das Projekt ist
  Demo). Im Wechsel jetzt GuardOpS, Johann von Arb, Sportcenter Lindenfeld.
  Logo als `entwurf-logo-lindenfeld.svg` (Fassung invers) aus Drive.
  Adrian am 29.10.2026: Logos optisch angleichen (Breite pro Logo nach
  Augenmass) und den springenden Link beheben (Textblock hält die Höhe des
  längsten Stücks). Ein weiteres Demo-Logo folgt.
  Viertes Logo: Hakuro (Demo-Restaurant, Omakase und Kaiseki, CI vom
  29.10.2026 aus Drive), Hauptlogo auf dunkel als `entwurf-logo-hakuro.svg`.
  Reihenfolge abwechselnd echt und Demo: GuardOpS, Sportcenter Lindenfeld,
  Johann von Arb, Hakuro.
  Vorschau für Adrian: Arbeitszweig auf `claude/stoic-archimedes-xpyk3n`
  vorgespult (GitHub Pages, kein Hostpoint-Lauf), Seite
  `https://f5yct67kcv-source.github.io/formateins/entwurf-start.html`.
  Adrian am 29.10.2026, Punkt 1: Titel und feiner Text nebeneinander passen
  nicht. Kopf neu über die ganze Breite, «Seiten, Markenblätter, Reels.» auf
  einer Zeile, der feine Text darunter. Zur Wahl: `?kopf=mitte` (Standard,
  Adrians Vorschlag) und `?kopf=links`.
  Adrian am 29.10.2026: A. Kopf mittig, sobald die drei Spalten nebeneinander
  stehen (ab 860 px), am Handy linksbündig wie die Spalten. Varianten entfernt.
  Adrian am 29.10.2026, Punkt 2: Logo und Websites haben fast dieselbe
  Animation in entgegengesetzter Richtung, das wirkt unruhig; die Linie gibt es
  auch schon im Plus. Die Linie beim Logo ersetzt, drei ruhigere Auftritte zur
  Wahl: `?anim=blende`, `fokus` (Standard), `zeichnen`.
  Adrian am 29.10.2026: Fokus. Websites und Logos brauchen nicht denselben
  Takt. Websites alle 3,6 s, Logos alle 7,2 s und jeweils 1,8 s nach einer
  Website, wenn die Spalte ruhig steht; nie wechseln beide zugleich (über
  31 s nachgemessen). Blende und Zeichnen entfernt.
  Adrian am 29.10.2026: Logos schneller, sonst sieht man in 5 s nur eines.
  Jetzt alle 3,6 s, weiter 1,8 s versetzt zu den Websites. Website-Spalte
  neu: Sportcenter Lindenfeld (demo.formateins.ch/lindenfeld), GuardOpS,
  Hakuro (demo.formateins.ch/hakuro) statt formateins und Shiro. Aufnahmen
  1440 × 900 auf 1200 × 750 als `entwurf-start-lindenfeld-*.webp` und
  `entwurf-start-hakuro-*.webp`, Bauplan mit `quellen/bauplan.js`; bei
  Lindenfeld das Kopfvideo bei 4 s angehalten (Badminton), damit kein
  Überblendbild entsteht.
  Adrian am 29.10.2026: Text unter dem Titel neu «Jede Arbeit beginnt mit
  einer gemeinsamen Strategie. Hier siehst du das Ergebnis.» (vorher «Aus
  allen drei Richtungen ein Stück echte Arbeit …»). Demo nicht verschleiern,
  aber auf der Startseite nicht hervorheben.
  Adrian am 29.10.2026: Im Reel nutzt das Erklärvideo nicht die volle Fläche.
  Ursache: Es sitzt im Reel auf 84 % über einer unscharfen Kopie, weil das
  Telefon im Plus links und rechts je 9 % abschneidet. Im neuen Abschnitt ist
  das Telefon 9:16 und schneidet nichts ab. Eigene Fassung
  `entwurf-video-reel-voll-ton.mp4` / `.webm`: Teil 4,5–8 s aus der Fassung
  ohne Titel auf die volle Fläche geschnitten (450 × 800 ab 45/80 auf
  540 × 960), Titel «Beispiel Erklärvideo» neu mit `titel.html` darüber, Ton
  und die anderen drei Teile unverändert, 460 kbit/s wie bisher. Social
  Media, Werbevideo und Imagefilm füllen die Fläche schon. Das Plus behält
  das bisherige Reel.
  Adrian am 29.10.2026: «Demo-» raus aus den Zeilen unter den Spalten (ja),
  Link bei den Demos auf die Demo-Seite (ja, «Seite ansehen», bei GuardOpS
  weiter «Arbeiten ansehen»), Plus auf Lindenfeld, GuardOpS, Hakuro (ja).
  Danach in die echte Startseite, aber noch nicht pushen. Erledigt auf dem
  Arbeitszweig: Abschnitt in `index.html` ohne Varianten-Code, Fussnote zu
  den Kennwerten wieder darunter, Dateien umbenannt (`logo-*.svg`,
  `start-lindenfeld-*`, `start-hakuro-*`, `video-reel-voll-ton.*`),
  `entwurf-start.html` und die Bilder von formateins und Shiro entfernt.
  Adrian am 29.10.2026: Proportionen, Logo und Reel wirken nach rechts
  verschoben. Nachgemessen: sie stehen genau mittig, die linksbündigen Texte
  täuschen. Adrian wählt A: ab 860 px Text, Kennzahlen, Link und Fussnote
  mittig unter jeder Spalte, Bühne 4:3 statt quadratisch (Reel etwa so hoch
  wie das Website-Fenster). Am Handy linksbündig.
  Adrian am 29.10.2026: Fussnote «Kennwerte gemessen im Oktober 2026 …» raus,
  sie stört. Der Beleg für «7× leichter» (355 KB statt 2'652 KB, HTTP Archive)
  steht auf `arbeiten/guardops.html`, «Arbeiten ansehen» führt dorthin.
  Adrian am 29.10.2026: Hakuro (dampfende Suppe) und Lindenfeld (Video im
  Kopf) sind auf den Seiten bewegt, in den Fenstern nicht. Jetzt je vier
  Sekunden Video statt Standbild, Bild für Bild von demo.formateins.ch
  aufgenommen, MP4 98 KB / 418 KB, WebM 108 KB / 368 KB, lädt erst, wenn die
  Seite drankommt; im Abschnitt und im Plus. Standbild = erstes Bild.
  Adrian am 29.10.2026: Beim Hereinscrollen erschien das erste Logo erst nach
  rund 3 s, vorher leerer Platz. Jetzt steht es sofort, der erste Wechsel
  folgt nach 5,4 s, danach alle 3,6 s, weiter versetzt zu den Websites.
  Adrian am 29.10.2026: zweite Zeile «Websites, Logos, Videos.» statt «Seiten,
  Markenblätter, Reels.». Gezeigt werden Logos, kein Markenblatt (ENT-004);
  «Seiten» ist zu offen; «Reels» ist der Name von Meta und deckt den Imagefilm
  nicht ab, «Video» wie die Richtung (ENT-003). Unter der Spalte bleibt «Vier
  Formate, ein Reel» (das gezeigte Reel).
  Lighthouse lokal wie am 28.10.2026 (Auslieferung ohne Kommentare, gzip wie
  Hostpoint), 29.10.2026: live (`main`) Handy 94 / 96 / 98, Desktop 100;
  neu Handy 98 / 98 / 98, Desktop 100. LCP Handy 2,4 s, TBT 0 ms, CLS 0.
  Beim Laden 438 statt 352 KiB (Startseiten- und Logo-Bilder des Abschnitts
  und des Plus), beim Scrollen zu «Gebaut» kommen die zwei Loops dazu
  (408 + 95 KiB).
  Adrian am 29.10.2026: Titel «So könnte dein Auftritt aussehen.» statt
  «Gebaut, nicht behauptet.», der klang von oben herab. Der neue spricht dich
  an und verspricht dein Ergebnis (Schreibstil: der Titel ist der Hook);
  zweite Zeile und Satz darunter bleiben.
  Live am 29.10.2026 mit Adrians Wort («wir bringen den abschnitt auf die
  live seite»): `main` auf 9ffc6f0, Lauf «Website zu Hostpoint» Nr. 36
  (40903270956) erfolgreich, «replacing index.html», 14 Dateien neu,
  `start-formateins-*` und `start-shiro-*` vom Server entfernt, «Sync
  complete», IndexNow 200. PageSpeed live (ENT-015) liess sich von hier nicht
  messen: die PageSpeed-Schnittstelle antwortet ohne Schlüssel mit 429.
- [x] **ENT-030** · 29.10.2026 · Kundenvorlagen liegen in Google Drive, nicht im
  öffentlichen Repository: `formateins / formateins Hauptordener /` mit Akquise,
  CI, Demo Projekte, Kundenprojekte (GuardOps, Johann von Arb), Social Media
  formateins. Drive ist als Connector verbunden. Ins Repository kommen nur
  aufbereitete Dateien, die auf formateins.ch erscheinen.
- [x] **ENT-031** · 29.10.2026 · GuardOpS-CI: Das Gestaltungspaket vom 12.09.2026 nennt
  sich «unbestätigter Entwurf» mit vier offenen Punkten (Schrift, Wortmarke ohne
  Bildmarke, Name ohne Markenrecherche, Claim). Vor dem Zeigen als Referenz mit
  Adrian klären, ob das inzwischen entschieden und freigegeben ist.
  Adrian am 29.10.2026: «ja, ist freigegeben». Darf als Referenz gezeigt werden.
