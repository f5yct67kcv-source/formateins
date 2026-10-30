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
- [x] **ENT-032** · 29.10.2026 · «So könnte dein Auftritt aussehen» am Handy
  (Folge von ENT-029). Adrian: Text und Bild gehören nicht sichtbar zusammen,
  der Logo-Bereich ist zu hoch, das Reel läuft nicht, das Telefon darf grösser
  sein. Adrian wählt A: unter 860 px zuerst Nummer, Name und Satz, dann das
  Stück, 56 statt 18 px bis zur nächsten Spalte; Fenster 16:10, Logo 2:1,
  Reel 1:1 (Telefon 179 × 318 statt 133 × 236 px bei 390 px Breite). Desktop
  unverändert. Reel: Datei geprüft, gleich wie im Plus (H.264 High, yuv420p,
  faststart). Auf Adrians Bildschirmfoto ist der Stromsparmodus an, darin
  spielt das iPhone nichts von selbst ab. Neu erscheint dann ein Knopf zum
  Abspielen (auch bei abgeschalteter Bewegung), ein Tipp startet das Reel;
  getestet mit gesperrtem Autoplay.
  Live am 29.10.2026 mit Adrians Wort («push»): `main` auf 6787a1e, Lauf
  «Website zu Hostpoint» Nr. 38 (40910169487) erfolgreich, «replacing
  index.html», «Sync complete», IndexNow 200.
- [x] **ENT-033** · 29.10.2026 · Adrian: Die Reels laufen am iPhone nicht, weder
  im Plus noch im Abschnitt, und der Abspielknopf (ENT-032) gefällt ihm nicht.
  Beide Reels starten nur, wenn das Telefon Autoplay zulässt und «Bewegung
  reduzieren» aus ist; der Knopf erschien, also hat das iPhone das Abspielen
  verweigert. Ursache klären mit der Testseite `entwurf-reeltest.html` (nur
  in der Vorschau): zeigt «Bewegung reduzieren», ob ein stummes Video von
  selbst spielt, und ein bewegtes WebP als möglichen Ersatz ohne Knopf.
  Ergebnis auf Adrians iPhone (iOS 18.7): Stromsparmodus aus, «Bewegung
  reduzieren» aus, trotzdem verweigert Safari das stumme Video
  (NotAllowedError) und das bewegte WebP steht auch. Das passt zu den
  Schaltern unter Einstellungen → Bedienungshilfen → Bewegung:
  «Automatische Videovorschau» und «Animierte Bilder automatisch abspielen».
  Die gelten für alle Websites, die Seite kann und soll sie nicht umgehen.
  Der Knopf (ENT-032) ist wieder raus, wer kein Autoplay bekommt, sieht das
  Standbild.
  Adrian am 29.10.2026: Beide Schalter waren aus, eingeschaltet laufen die
  Reels. Ab Werk sind sie an (Apple-Handbuch, «Bewegung auf dem Bildschirm
  anpassen», nennt für beide nur «Ausschalten»), auf den meisten iPhones
  laufen die Reels also. Die Testseite `entwurf-reeltest.*` ist wieder
  gelöscht.
  Live am 29.10.2026 mit Adrians Wort («push»): `main` auf 39d4b67, Lauf
  «Website zu Hostpoint» Nr. 40 (40913770533) erfolgreich, «replacing
  index.html», «Sync complete», IndexNow 200.
- [x] **ENT-034** · 29.10.2026 · «So läuft es ab», Schritt 01: Titel «Wir legen
  los» statt «Wir reden» (Aussage wie die Schritte 02 bis 04), Text «Dreissig
  Minuten per Video. Du erzählst, was du machst und wen du erreichen willst.
  Ich zeige dir Beispiele und sage ehrlich, was es braucht und was nicht.»
  statt «am Telefon oder bei dir». Adrian: per Video lassen sich Beispiele
  zeigen. «Video» statt «Zoom», weil `gespraech.html` Telefon oder Video per
  kMeet anbietet; das Telefon bleibt dort wählbar. «Beispiele» statt
  «Demoprojekte» (keine Demos auf der Startseite, ENT-029).
  Adrian am 29.10.2026: auf `gespraech.html` Video vorauswählen (ja). Video
  ist jetzt gewählt, Telefon ein Tipp daneben; das Symbol in der Übersicht
  links wechselt mit (Kamera bei Video, Hörer bei Telefon).
  Schritt 02, Adrian am 29.10.2026: Titel bleibt «Du bekommst ein Angebot»
  («Angebot» wie sonst auf der Seite), Text neu «Innert drei Tagen hast du
  einen Festpreis für das, was wirklich nötig ist. Dazu steht schriftlich,
  wen wir erreichen wollen und was hängen bleiben soll.» statt «… auch wenn
  es mich Geld kostet»: das Ehrliche steht jetzt in Schritt 01, dafür kommt
  die Strategie dazu.
  Schritt 03, Adrian am 29.10.2026: Titel «Wir gestalten» statt «Wir bauen»
  (gilt für Website, Logo und Video), Text «Zuerst die Inhalte, dann die
  Form, immer entlang der Strategie. Du siehst zwischendurch, wie es wird,
  und sagst, was du anders willst. Kurze Wege statt langer Sitzungen.»
  statt «… und sagst, was nicht stimmt».
  Schritt 04, Adrian am 29.10.2026: Titel bleibt «Es geht live», Text
  «Website, Logo oder Video sind fertig und im Einsatz. Du bekommst alles,
  was dir gehört: Dateien, Zugänge, das Logo in allen Formaten. Brauchst du
  später etwas, bin ich da.» statt «Seite, Markenblatt oder Film …». Adrian
  fragt, ob der Bezahl-Satz rein muss: nein, was Änderungen kosten, steht in
  den Fragen («verrechne den Aufwand. Kein Abo.»), und der Festpreis in
  Schritt 02.
  Live am 29.10.2026 mit Adrians Wort («push»): `main` auf 5e6aa3e, Lauf
  «Website zu Hostpoint» Nr. 42 (40949926716) erfolgreich, «replacing
  gespraech.html» und «replacing index.html», «Sync complete», IndexNow 200
  für die Startseite und /gespraech.
- [x] **ENT-035** · 29.10.2026 · Betreiber-Bereich für formateins auf
  `betreiber.formateins.ch`, gleicher Aufbau wie der Betreiber-Bereich von
  GuardOpS: eine HTML-Seite, PHP-Endpunkte unter `api/`, MySQL, kein
  Build-Schritt. Eigenständiges Projekt, keine Daten und keine Einträge in
  den GuardOpS-Repositories. Adrians Antworten vom 29.10.2026:
  Code in einem eigenen **privaten** Repository (formateins ist öffentlich,
  Pages würde den PHP-Code zeigen). An der Stelle der Mandanten stehen
  **Projekte** (Auftrag mit Kunde, Status, Termin, Offerten, Rechnungen).
  Erste Etappe: Übersicht, Adressen, Offerten/Rechnungen/Verträge, Finanzen,
  Anfragen, dazu Anmeldung mit Konten und Zwei-Faktor. Gestaltung wie
  GuardOpS, aber mit Logo, Schrift und Farben von formateins, zuerst als Bild
  zur Abnahme. Keine MWST, Satz und Nummer aber im Briefkopf vorbereitet.
  Anfragen aus Kostenrechner und Gesprächsbuchung landen zusätzlich zur Mail
  im Bereich (Änderung an formateins.ch, braucht Adrians Wort zum Push).
  Konten: Adrian, weitere per Einladung, alle mit denselben Rechten.
- [x] **ENT-036** · 29.10.2026 · Einrichtung für ENT-035 (Adrian): privates
  Repository anlegen und der Sitzung freigeben; bei Hostpoint Subdomain
  `betreiber.formateins.ch` mit eigenem Verzeichnis und SSL, eine
  MySQL-Datenbank mit eigenem Benutzer, ein FTP-Benutzer nur für dieses
  Verzeichnis; die Zugangsdaten als Secrets ins neue Repository.
  Hostpoint am 29.10.2026 erledigt (Adrian). Die Datenbank heisst nicht
  `betreiber`, der Name war im Webhosting schon besetzt. Repository
  `formateins-betreiber` (privat) und die sieben Secrets am 29.10.2026 von
  Adrian angelegt. Ob die Secrets stimmen, zeigt erst der erste Deploy-Lauf.
- [x] **ENT-037** · 29.10.2026 · Erste Etappe des Betreiber-Bereichs (ENT-035)
  gebaut, im Repository `formateins-betreiber` auf dem Arbeitszweig
  `claude/epic-mayer-2x1fei` (`36b2d1d` bis `ee9c7fe`): Anmeldung mit
  Pflicht-Zweitfaktor, Konten mit Einladung, Übersicht, Projekte, Adressen,
  Offerten/Rechnungen/Verträge mit Kundenlink (annehmen, Änderung wünschen)
  und QR-Zahlteil, Finanzen mit Belegdateien, Anfragen. Gestaltung wie der
  abgenommene Entwurf. Prüfungen grün (60 Schritte gegen Testdatenbank),
  QR-Code aus dem gedruckten PDF mit zxing gelesen. Das erste Konto braucht
  ein achtes Secret `BETREIBER_EINRICHTUNG` (Zufallswert), sonst lässt die
  Seite niemanden ein. Offen: Secret anlegen, Push auf `main` mit Adrians
  Wort, Lauf «Betreiber zu Hostpoint» prüfen.
  Live am 29.10.2026 mit Adrians Wort («secret ist drin, push»): `main` von
  `formateins-betreiber` auf `ee9c7fe`, Lauf «Betreiber zu Hostpoint» Nr. 1
  (40956191573) erfolgreich: Prüfungen grün, Secrets vorhanden, 66 Dateien
  hochgeladen, «Sync complete». Das erste Konto legt Adrian selbst an.
  Danach «Die Datenbank ist nicht erreichbar». Die Seite nennt seitdem, welcher
  Wert nicht passt (`5620cae`), und der Deploy schneidet Leerzeichen am Rand
  der Secrets ab (`9745581`, Lauf Nr. 2). Ursache waren `BETREIBER_DB_HOST`
  (richtig: `itufeden.mysql.db.internal`) und `BETREIBER_DB_NAME` (voller
  Name mit Kürzel); Adrian hat beide korrigiert, Läufe Nr. 3 und 4 erfolgreich.
  Am 29.10.2026 hat Adrian sein Konto angelegt und ist angemeldet.
- [ ] **ENT-038** · offen · Anfragen von formateins.ch zusätzlich in den
  Betreiber-Bereich (ENT-035): `anfrage.php` und `termine.php` schicken jede
  Anfrage an `api/anfrage_eingang.php`, mit Secret `ANFRAGE_SCHLUESSEL` in
  beiden Repositories. Die Mail läuft unverändert weiter. Änderung an
  formateins.ch, braucht Adrians Wort zum Push.
- [x] **ENT-039** · 29.10.2026 · Betreiber-Bereich: Gestaltungsentwurf der
  Übersicht abgenommen (Adrian: «passt so»), Aufbau wie GuardOpS mit Farben,
  Logo und Schriften von formateins. **Keine Handy-Fassung** (Adrian:
  «handy nein»), gebaut nur für den Computer. Arbeitsregeln des Repositories
  `formateins-betreiber` in dessen `CLAUDE.md`: Push auf `main` geht live auf
  betreiber.formateins.ch und braucht Adrians Wort, vor jedem Push
  `bash pruefungen/alle.sh`, ENT-Nummern für den Betreiber-Bereich stehen hier
  im Logbuch von formateins. In den GuardOpS-Repositories wird dafür nichts
  abgelegt.
- [x] **ENT-040** · 29.10.2026 · Fragen auf der Startseite neu (Adrian):
  formateins baut nicht nur ohne CMS. Lindenfeld läuft auf WordPress 7.1.4
  mit eigener Oberfläche «Inhalte bearbeiten» (Login über `wp-login.php`);
  Kunden, die selbst ändern wollen, wird das nicht ausgeredet. Ein solcher
  Zugang geht auch bei reinen HTML-Seiten (Inhalte in einer Datei auf dem
  Server, PHP mit Login, wie `anfrage.php` und `termine.php` auf Hostpoint);
  gebaut ist er dafür noch nicht. Adrian: Zugang ist im Festpreis drin und
  wird angeboten, etwa für Sportcenter und Vereine.
  Neue Reihenfolge: Kosten, Dauer, selbst bearbeiten, WordPress, Google,
  Fotos und Videos, KI, Region. «Kann ich meine Website selbst bearbeiten?»
  neu: Zugang für Zeiten, Preise und Anlässe, im Festpreis inbegriffen; ohne
  Satz zu den Kosten von Änderungen (Adrian: klärt er im Projekt und im
  Vertrag). «Warum kein WordPress oder Baukasten?» wird «Brauche ich
  WordPress?»: meistens nicht, auf ausdrücklichen Wunsch ja, ohne
  «Sicherheitslücken». Region: Gespräche per Video, für Fotos und Filme vor
  Ort (passt zu ENT-034). FAQPage-Daten mit `quellen/faq-daten.py` neu
  erzeugt, `llms.txt` angeglichen.
  Adrian am 29.10.2026, zwei Widersprüche gleich mit: «Passt nicht, wenn
  du …» auf der Startseite «deine Seite lieber selbst zusammenstellst» statt
  «täglich selbst Inhalte einpflegen willst». Ratgeber `website-kosten.html`,
  «Was kostet es, wenn ich die Seite selbst bearbeiten will?»: «Nichts
  zusätzlich. …» statt «Das biete ich nicht an … Baukasten besser bedient».
  WordPress kostet gleich viel wie der eigene Zugang (im Festpreis).
  FAQ-Daten des Ratgebers neu erzeugt, `llms.txt` angeglichen.
  Die übrigen «kein CMS»-Stellen in Kostenrechner und Ratgeber: erledigt
  mit ENT-041.
  Nummer: zuerst als ENT-035 vergeben, die war auf `main` schon vom
  Betreiber-Bereich belegt (andere Sitzung); deshalb neu ENT-040.
  Live am 30.10.2026 mit Adrians Wort («push»): `main` auf 6652d29, Lauf
  «Website zu Hostpoint» Nr. 45 (41021824121) erfolgreich, «replacing»
  anfrage.php, index.html, kostenrechner.html, llms.txt, website-kosten.html,
  «Sync complete», IndexNow 200 für Startseite, Kostenrechner und Ratgeber.
- [x] **ENT-041** · 29.10.2026 · WordPress nach dem Livegang: Adrian wählt eine
  Jahrespauschale für Updates (Variante A), nicht nach Aufwand und nicht
  Sache des Kunden. Aufwand geschätzt 5–10 Stunden im Jahr bei wenigen
  Plugins (Plugin-Updates monatlich, 2–3 grosse Versionen, PHP-Wechsel,
  Backup). Markt Schweiz: CHF 25–89 im Monat (INSOR, wp-support-schweiz.ch,
  Beyondweb). Normale Seite und eigener Zugang bleiben ohne Updates.
  Adrian am 29.10.2026: CHF 360 im Jahr. Eingebaut im Ratgeber
  (Kurzfassung, «Was im Preis drin ist», «Was es nach dem Livegang kostet»,
  «Was kostet eine Änderung später?»), im Kostenrechner («Was kostet es nach
  dem Livegang?») und in `llms.txt`; FAQ-Daten beider Seiten neu erzeugt.
  Kostenrechner, Adrian am 29.10.2026 nach Bild: Variante A, eigene Frage
  «Willst du Inhalte selbst ändern?» nach «Braucht es etwas Besonderes?»
  (Nein / eigener Zugang / WordPress mit CHF 360 im Jahr / weiss noch
  nicht), ändert den Preis nicht. Verworfen: B, als vierte Wahl bei den
  Funktionen (hätte die Frage mehrfach wählbar gemacht und die Preislogik
  berührt). `anfrage.php` kennt den neuen Schlüssel `zugang`, damit die
  Antwort in der Mail und der Bestätigung steht. Website-Weg getestet:
  9 Fragen, Rahmen unverändert, keine Fehler.
  Startseite, Frage «Was kostet eine Website bei dir?»: «in wenigen Fragen»
  statt «in sieben Fragen» (Adrian, 30.10.2026; der Website-Weg hat 9, die
  anderen Wege andere Zahlen).
  Nummer: zuerst als ENT-036 vergeben, die war auf `main` schon vom
  Betreiber-Bereich belegt (andere Sitzung); deshalb neu ENT-041.
  Live am 30.10.2026 mit Adrians Wort («push»): `main` auf 6652d29, Lauf
  «Website zu Hostpoint» Nr. 45 (41021824121) erfolgreich, «replacing»
  anfrage.php, index.html, kostenrechner.html, llms.txt, website-kosten.html,
  «Sync complete», IndexNow 200 für Startseite, Kostenrechner und Ratgeber.
  Adrian am 30.10.2026: Testanfrage über den Kostenrechner, die Bestätigung
  zeigt «Selbst ändern: Eigener Zugang». Mail und Schlüssel `zugang` laufen.
- [x] **ENT-042** · 30.10.2026 · Betreiber-Bereich: **Adressen und Offerten
  1:1 wie GuardOpS**, mit allem Inhalt und allen Optionen (Adrian: «Adressen
  und Offerten Bereich mit allem Inhalt und Optionen möchte ich identisch!»).
  Code-Aufbau aus GuardOpS übernommen, keine Daten. Entscheide dazu (Adrian,
  je die Empfehlung): Aufbau wie GuardOpS, also Offerten mit den Reitern
  Offerten, Leistungen und Briefkopf, Rechnungen unter Finanzen, Verträge
  unter Projekte. Das Projekt bleibt als Zusatzfeld an der Offerte. Die
  MWST-Spalte bleibt, Vorgabe 0 %. Nummern wie GuardOpS: OF-0001, RE-0001,
  VE-0001, Adressen K0001, Leistungen P0001. Schon vergebene Nummern bleiben.
  Ersetzt in diesen Punkten den Aufbau aus ENT-037.
  Stand 30.10.2026: gebaut auf dem Arbeitszweig von `formateins-betreiber`
  (Commits `6b48ab2`, `509df4f`, `80c0741`), alle Prüfungen grün, auch gegen
  die zusammengestellte Auslieferung. Mit dabei: Adressbuch mit
  Ansprechpersonen, Kommunikationswegen und CSV-Import; Offerten mit
  Fassungen, Verlauf, Änderungswünschen, Annahme mit Unterschrift und Code,
  unterschriebenem PDF; Leistungen; Briefkopf mit QR-Zahlteil; Rechnungen mit
  «bezahlt»; Verträge mit Laufzeit; eigene Unterschrift im Kontomenü. Bisherige
  Adressen, Belege und der Briefkopf werden beim ersten Anmelden nach dem
  Deploy übernommen, die alten Tabellen bleiben stehen. Texte an Kunden in der
  du-Form.
  Live am 30.10.2026 mit Adrians Wort («ich erlaube es, push auf main»):
  `formateins-betreiber` `main` auf 80c0741, Lauf «Betreiber zu Hostpoint»
  Nr. 5 (41027106459) erfolgreich, Prüfungen grün, «uploading» go.js, go.css,
  ereignisse.js, beleg-seite.js, api/betreiber_*.php, kern/bruecke.php,
  «removing» der alten Beleg- und Adress-Endpunkte, «Sync complete». Die
  Übernahme der bisherigen Daten läuft beim ersten Anmelden.
- [x] **ENT-049** · 30.10.2026 · Betreiber-Bereich: neuer Bereich **Akquise**
  (Adrian: «ein neuer Bereich dafür schaffen»), Inhalt aus dem privaten
  Repository `formateins-akquise` und dem Artefakt «Akquise-Fahrplan».
  Entscheide (Adrian, je die Empfehlung, wo nicht anders vermerkt): Es gilt
  `fahrplan.md` mit 14 Schritten in fester Reihenfolge, je mit «fertig, wenn»,
  nicht die Tempo-Fassung des Artefakts mit festen Daten. Ein Bereich nach
  Anfragen, vier Reiter: Fahrplan (Roadmap mit Fortschritt und nächsten
  Branchen), Betriebe (vom Kandidaten bis zum Auftrag, mit Stunden pro
  Brief), Auswertung (Schwellen für Entscheidungspunkt 2 und Rechner mit
  echten Zahlen), Methode (Text). Künftige Zielbereiche sind weitere
  Branchen. Namen von Betrieben stehen nur in der Datenbank auf Hostpoint,
  nie im Code. Fahrplan und Screening kommen per Import hinein (fahrplan.md
  einmal hochladen, Betriebe als CSV). Ein Betrieb, der sich meldet, wird
  per Knopf zur Adresse. QR-Code führt über betreiber.formateins.ch, wird
  dort gezählt und weitergeleitet. Gespeichert werden nur Zeit und Gerät
  (Handy oder Computer), keine IP, kein Cookie. Jeder Scan meldet sich im
  Bereich und per Mail an die formateins-Adresse (Adrian: «mit Zeit und
  Datumstempel, sowie notification auf der seite und auf format
  mailadresse»). Vor dem ersten Versand muss die Datenschutzerklärung von
  formateins.ch die Zählung nennen. Gestaltung: Adrian wählt Fahrplan
  Variante A, Betriebe und Auswertung wie im Entwurf.
  Stand 30.10.2026: gebaut auf dem Arbeitszweig von `formateins-betreiber`
  (Commit `ac44534`), alle Prüfungen grün, Gegenprobe ohne 30-Minuten-Sperre
  rot. CSV der 20 Betriebe aus dem Screening auf dem Arbeitszweig von
  `formateins-akquise` (`akquise/phase-1/betriebe.csv`, Commit `8b5c6cd`).
  Live am 30.10.2026 mit Adrians Wort («push auf main, beide repos»):
  `formateins-betreiber` `main` auf ac44534, Lauf «Betreiber zu Hostpoint»
  Nr. 6 (41036958965) erfolgreich, Prüfungen grün, «uploading» akquise.js,
  api/akquise*.php, kern/akquise.php, «replacing» .htaccess (Regel für
  /q/), index.html, betreiber.js, kern/tabellen.php, «Sync complete». Die
  Tabellen legt die Einrichtung beim ersten Anmelden an. Import von
  fahrplan.md und der CSV macht Adrian im Bereich.
  Zuerst als ENT-046 erfasst. Die Nummer hatte eine andere Sitzung kurz
  vorher für den Projekt-Timer vergeben (Eintrag 09:00 gegen 09:02), darum
  hier ENT-049. Commits, Code und das Repository formateins-akquise nennen
  noch ENT-046; im Code wird es mit dem nächsten Push nachgeführt.
- [ ] **ENT-050** · 30.10.2026 · Datenschutzerklärung von formateins.ch um die
  Zählung des QR-Codes im Akquise-Brief ergänzen (ENT-049): gespeichert
  werden Zeit und Gerät, keine IP, kein Cookie. Muss vor dem ersten Brief
  online sein. Text kommt als Vorschlag zu Adrian, dann Bau und Push mit
  seinem Wort.
- [ ] **ENT-051** · 30.10.2026 · Bing meldet auf der Startseite «Title tag
  missing» und «Meta Description tag missing», obwohl beide im HTML stehen:
  die Seiten liessen `<head>` und `<body>` weg (HTML5 erlaubt das, Bings
  Parser nicht). Alle neun ausgelieferten Seiten haben jetzt `<head>`,
  `</head><body>` und `</body></html>` ausgeschrieben. Kein Minifizierer
  nimmt sie wieder heraus (`quellen/kommentare-entfernen.mjs` schneidet nur
  Kommentare). Geprüft im Browser-Parser: DOM vor und nach gleich, nur der
  Kommentar zur Leiste auf der Startseite steht jetzt im body statt im head.
  JSON-LD bleibt am Ende des body (dort gültig, FAQ-DATEN neben den Fragen).
  Die 7 Bilder «ohne alt» sind die mit `alt=""`: sechs Baupläne über den
  Arbeiten und das Bild im Webdesign-Knopf (der Knopf trägt das aria-label);
  bleiben dekorativ. Offen: kürzere Descriptions (Adrian wählt), Push auf
  `main` mit Adrians Wort, danach Lauf prüfen und in Bing «Request indexing».
