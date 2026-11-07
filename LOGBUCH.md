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
- [x] **ENT-021** · 30.10.2026 · `CLAUDE.md` korrigieren: GitHub Pages baut aus
  `claude/stoic-archimedes-xpyk3n`, nicht aus `main`.
  Erledigt am 30.10.2026: Abschnitt «Die Vorschau auf GitHub Pages» in
  `CLAUDE.md` nennt den Vorschau-Zweig und wie man ihn nachzieht.
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
  Nachtrag 30.10.2026: Termin um den 06.11.2026. Testfragen in Bing, ChatGPT
  und Perplexity: «Was kostet eine Website bei formateins.ch?», «formateins
  Olten», «Webdesign Olten». Bing lieferte am 30.10.2026 für
  `site:formateins.ch` noch nichts (ENT-054). Liefert Bing um den 27.11.2026
  immer noch nichts: Ticket beim Bing-Support.
- [x] **ENT-027** · 02.11.2026 · Einträge bei local.ch und search.ch angelegt
  (Adrian: «local und search sind erfasst»), mit demselben Namen, derselben
  Adresse und Telefonnummer wie auf der Seite. Am 02.11.2026 von hier aus noch
  nicht auffindbar (Suche auf local.ch und die Telefonbuch-Schnittstelle von
  search.ch liefern keinen Treffer); neue Einträge brauchen dort ein paar Tage
  bis zur Freischaltung. Die Adressen in `sameAs` folgen in ENT-077.
  Nachtrag 06.11.2026: localsearch hat beide Basiseinträge freigeschaltet
  (Mail an adrian@formateins.ch, Case 01666234, 06.11.2026 08:53). Adressen:
  `https://www.local.ch/de/d/trimbach/4632/formateins-vXDmp3F7IBKxwlzGKiC3zg`
  (in der Mail die französische Fassung `/fr/`, gleicher Eintrag) und
  `https://search.ch/tel/trimbach/hochgasse-7/formateins`. Von hier aus
  geprüft, alle drei mit 200: Hochgasse 7, 4632 Trimbach, 079 686 84 86, wie
  auf der Seite. Der Name steht dort als «Formateins» mit grossem F. Die
  Angebote zum Wechsel auf SWISS LIST oder digitalONE (bezahlt) nicht
  angenommen; es bleibt beim Gratiseintrag. Damit ist ENT-077 frei.
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
- [x] **ENT-038** · 30.10.2026 · Anfragen von formateins.ch zusätzlich in den
  Betreiber-Bereich (ENT-035): `anfrage.php` und `termine.php` schicken jede
  Anfrage an `api/anfrage_eingang.php`, mit Secret `ANFRAGE_SCHLUESSEL` in
  beiden Repositories. Die Mail läuft unverändert weiter. Änderung an
  formateins.ch, braucht Adrians Wort zum Push.
  Adrian am 30.10.2026: «fixen, dass es auch funktioniert». Befund: Der
  Eingang im Betreiber-Bereich stand, `anfrage.php` rief ihn aber nie auf,
  und live antwortet er «nicht eingerichtet» (503), das Secret fehlt in
  `formateins-betreiber`. Gebaut für den Kostenrechner (Arbeitszweig):
  `anfrage.php` legt nach der Mail ab, höchstens fünf Sekunden; der Deploy
  setzt `ANFRAGE_SCHLUESSEL` ein. Lokal geprüft: Anfrage landet mit Betreff
  und Inhalt im Reiter, bei falschem Schlüssel oder ohne Betreiber geht die
  Mail trotzdem; scheitert die Mail, reicht die Ablage. Offen: Secret in
  beiden Repositories, Satz in der Datenschutzerklärung («wird nicht
  gespeichert» stimmt dann nicht mehr), Push auf `main` beider Repositories
  (Betreiber, damit das Secret eingesetzt wird), `termine.php`.
  Adrian am 30.10.2026: Secret in beiden Repositories eingetragen,
  Gesprächsbuchung mitnehmen, Datenschutz «wie es der Standard macht, ohne
  Rechtfertigung». Gebaut: Ablage in `betreiber-eingang.php` (für beide
  Formulare, vom Webserver gesperrt), `termine.php` legt jede Buchung mit
  Termin ab, auch wenn der Kalender nicht erreichbar war. Datenschutz:
  «… mir per E-Mail zugestellt und in meiner passwortgeschützten
  Kundenverwaltung gespeichert. Die Server stehen in der Schweiz.», beim
  Gespräch «… und in meiner Kundenverwaltung gespeichert». Lokal geprüft,
  Prüfungen im Betreiber-Bereich grün.
  Adrian am 30.10.2026: «push, und Absage auch automatisch». `termine.php`
  schickt die Kennung des Termins mit; eine Absage über den Link setzt das
  Gespräch im Reiter auf «abgesagt» (ist schon eine Offerte daraus geworden,
  bleibt der Stand und die Absage steht im Verlauf). Betreiber `57abee3`
  auf `main`, Gegenprobe: ohne die Änderung wird die Prüfung rot.
  Live am 30.10.2026: Website `ee3c469`, Lauf «Website zu Hostpoint» Nr. 63
  (uploading betreiber-eingang.php, replacing .htaccess, anfrage.php,
  datenschutz.html, termine.php, «Sync complete»); Betreiber Lauf Nr. 12
  (replacing api/anfrage_eingang.php, kern/anfragen.php, kern/tabellen.php).
  Eingang antwortet ohne Schlüssel 403 statt 503, `betreiber-eingang.php`
  von aussen 403, Datenschutz mit «Kundenverwaltung» live. Testanfrage über
  den Kostenrechner: Adrian sieht sie im Reiter Anfragen (Bildschirmfoto,
  Quelle Kostenrechner, Status Neu).
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
- [ ] **ENT-043** · 30.10.2026 · Musterprojekt für das Paket Breitbild: Ein
  erfundener Kunde bekommt das ganze Paket (Strategie, Logo und Drucksachen,
  Website, Imagefilm, Social Media), alles auf einer Seite («Schublade»),
  verlinkt bei der Karte Breitbild auf `/preise`. Whiteboard mit Auftrag,
  Paketinhalt, Sparten im Vergleich, acht Fächern der Schublade, Form,
  Technik und Zeitplan: https://claude.ai/artifact/2cbLpn6LntXZgMbVfhgJGu
  (privat, nur Adrian). Empfehlungen: Breitbild mit seinen drei Optionen und
  Etikett pro Stück; «Vorlagen für Social Media» (+ 400) neu auch als Option
  bei Breitbild; Sparte Schreinerei (Getränke-Startup später als Muster für
  Startformat); Bilder und Film mit KI und Hinweis auf der Seite; Form «Tisch,
  dann Fallstudie»; Demo-Website in reinem HTML. Offen: Adrians sechs
  Entscheide. Nummer: ENT-042 ist auf `claude/epic-mayer-2x1fei` schon vom
  Betreiber-Bereich belegt.
  Vier der sechs Entscheide am 30.10.2026 gefallen, siehe ENT-067.
- [x] **ENT-044** · 30.10.2026 · Das Musterprojekt Breitbild (ENT-043) wird von
  Anfang an als Roadmap dokumentiert: `quellen/muster-breitbild/ROADMAP.md`.
  Etappen nach den vier Schritten der Startseite, Soll vor dem Start und Ist
  danach, ein Journal pro Schritt mit Beleg, Adrians Zeit, Runden, KI-Kosten
  und was wir gelernt haben; dazu eine Lernliste und «Muster und echter
  Auftrag». Adrian spielt bei Freigaben den Kunden. Zweck (Adrian): nachvoll-
  ziehbar bleiben und für echte Projekte lernen. Regel in `CLAUDE.md`.
  Beleg: dieser Commit.
- [ ] **ENT-045** · 30.10.2026 · Am Ende des Musterprojekts ein Blogbeitrag für
  Kunden: wie ein ganzes Projekt abläuft, damit sie Vertrauen fassen. Offen
  als Musterprojekt gekennzeichnet, Zahlen aus dem Journal. Gliederung und
  Materialliste stehen in der Roadmap; Ort auf der Seite, Suchbegriff und
  Titel entscheidet Adrian, wenn es so weit ist.
- [x] **ENT-046** · 30.10.2026 · Projekt-Timer (Adrians Wunsch): hält die
  effektive Zeit fest, wenn Adrian mit Claude an einem Projekt arbeitet,
  erkennt Pausen, läuft über den Server, lässt sich visuell abfragen, gestaltet
  wie formateins. Konzept mit den nachgerechneten Zeiten vom 30.10.2026:
  https://claude.ai/artifact/G3qVTp12HJE87MVTTzRtwa (privat). Vorschlag:
  neuer Teil «Zeit» im Betreiber-Bereich (gleiche Technik, kein Build).
  Hooks in `.claude/settings.json` der formateins-Repositories schicken bei
  Nachricht, «fertig», Start und Ende der Sitzung einen Puls an
  `api/zeit_puls.php`: Zeit, Ereignis, Sitzung, Repository, Roadmap-Schritt,
  nie den Text der Nachricht; gesichert mit `FORMATEINS_ZEIT_SCHLUESSEL`.
  Fehlende Pulse aus dem Verlauf der Sitzung nachtragen, Arbeit ohne Claude
  Code von Hand. Regel: Lücke unter 10 Min. zählt, darüber 10 Min. als Lesen,
  der Rest Pause, per Tipp umbuchbar; Claude-Zeit getrennt ausgewiesen.
  Geprüft am 30.10.2026: betreiber.formateins.ch und www.formateins.ch sind
  aus der Cloud erreichbar (Antwort 200). Offen: Adrians fünf Entscheide,
  Schlüssel in Umgebung und Repository, `formateins-betreiber` in die Sitzung.
  Adrian am 30.10.2026: Betreiber-Bereich, Schwelle 10 Min., die Zeit, in
  der Claude arbeitet, zählt und steht getrennt da, am Handy eine kleine
  Anzeige (ENT-047), die 33 Min. nach dem Whiteboard waren Lesen.
  `formateins-betreiber` ist jetzt in der Sitzung. Der Test-Hook (an drei
  Orten: im Repository, im Startordner der Sitzung, in den Benutzer-
  Einstellungen) wurde von der Sicherheitsprüfung der Sitzung gesperrt, weil
  er Claudes eigene Einstellungen ändert. Er braucht Adrians ausdrückliches Ja.
  Test-Hooks am 30.10.2026 mit Adrians Ja («ja, Test-Hooks einrichten»), an
  drei Orten: im Repository formateins, im Startordner `/home/user/.claude/`
  und in den Benutzer-Einstellungen `/root/.claude/`. Sie schreiben Ort,
  Ereignis, Sitzung und Uhrzeit in eine Testdatei im Arbeitsordner. Nichts
  verlässt den Container, nichts ist committet. Befund am 30.10.2026: Neue
  Hooks greifen nach wenigen Sekunden, auch in der laufenden Sitzung (zuerst
  zu früh nachgeschaut und falsch notiert). Gelesen werden die Benutzer-
  Einstellungen und der Startordner `/home/user`, **nicht** das Repository,
  weil die Cloud-Sitzung mit mehreren Repositories in `/home/user` startet.
  Jeder Puls kennt die Sitzung lokal und in der Cloud (`cse_…`, gleich wie
  `session_…`). Beide Orte liegen nur im Container, darum muss der echte Hook
  bei jedem Start neu entstehen: über das Setup-Skript der Cloud-Umgebung
  (Adrian trägt es ein, es kann keine Secrets lesen, der Hook liest den
  Schlüssel erst zur Laufzeit aus der Umgebung). Am Mac einmal in
  `~/.claude/settings.json`. Test vollständig: «fertig» (09:32 UTC),
  Sitzungsstart nach einem Neustart (09:53) und «Nachricht» (09:53) kamen an
  beiden Orten an, im Repository nie. Test-Hooks am 30.10.2026 wieder
  gelöscht, das Protokoll liegt nur im Arbeitsordner der Sitzung.
  Schlüssel, Empfehlung vom 30.10.2026: In der Cloud keine Umgebungs-
  variable mehr, sondern ein «Network secret» der Umgebung. Der Proxy setzt
  den Schlüssel erst ausserhalb des Containers in jede Anfrage an
  betreiber.formateins.ch (Kopfzeile `X-Zeit-Schluessel`, ohne Präfix); er
  steht weder in der Umgebung noch in einer Datei, Claude sieht ihn nie. Der
  Server nimmt ihn auch als `Authorization: Bearer`, für das kurze Formular
  ohne eigene Kopfzeile. Auf dem Server kommt er als Secret
  `ZEIT_SCHLUESSEL` von `formateins-betreiber` über den Deploy in die
  Konfiguration, wie `ANFRAGE_SCHLUESSEL`. Am Mac später lokal.
  Adrian am 30.10.2026: Secret `ZEIT_SCHLUESSEL` in `formateins-betreiber`
  angelegt. Adrian am 30.10.2026: Netzwerk-Secret in der Umgebung «Default»
  angelegt (in der Desktop-App lässt sich «Default» bearbeiten, Netzwerk-
  zugriff steht dort auf «Vollständig»). In der Sitzung ist er wie gewollt
  nicht zu sehen; ob er ankommt, zeigt erst die Probe gegen den Server.
  Eingang gebaut in `formateins-betreiber`, Arbeitszweig
  `claude/sleepy-curie-u9tmyk`, Commit «Projekt-Timer: Eingang für Pulse mit
  Schlüssel, Tabelle zeit_puls, Deploy und Prüfungen (ENT-046)»:
  `api/zeit_puls.php` (GET mit Schlüssel = Probe, POST = Puls; derselbe Puls
  zweimal zählt einmal), `kern/zeit.php`, Tabelle `zeit_puls`, Deploy schreibt
  `ZEIT_SCHLUESSEL` auf den Server. Prüfungen mit lokaler Datenbank: 128 grün,
  davon 11 neue für den Timer; beide absichtlich eingebauten Fehler (ohne
  Schlüsselprüfung, ohne Schutz gegen Doppelte) wurden rot. Ohne Secret
  antwortet der Eingang «nicht eingerichtet» (503), nicht «kein Zugang».
  Adrian am 30.10.2026: «push beide». Der Push auf `main` aus der Sitzung wurde
  von deren Sicherheitsprüfung gesperrt (Livegang nur durch einen Menschen),
  Adrian hat den Betreiber-Zweig selbst gemergt (Pull Request #1). Lauf
  «Betreiber zu Hostpoint» Nr. 8 (41054462094) erfolgreich: «uploading»
  `api/zeit_puls.php` und `kern/zeit.php`, «replacing» `kern/tabellen.php`,
  «Sync complete». Probe am 30.10.2026 aus dieser und aus einer neuen Sitzung:
  beide 403 «Kein Zugang». Das GitHub-Secret ist also auf dem Server (sonst
  503), der Schlüssel aus der Cloud passt aber nicht oder kommt nicht an.
  Darum auf dem Arbeitszweig: «kein Schlüssel» und «Schlüssel stimmt nicht»
  getrennt melden, und ein im Formular stehen gebliebenes Präfix «Bearer»
  wegnehmen. Prüfungen 131 grün, beide eingebauten Fehler rot.
  Ursache gefunden (Bild von Adrian, 30.10.2026): Im Netzwerk-Secret stand
  beim Präfix noch das vorgegebene «Bearer». Adrian hat das Secret ersetzt,
  Präfix leer. Danach am 30.10.2026 live: Probe «stimmt» (HTTP 200); ein
  echter Puls (Adrians Nachricht von 12:44 UTC, als Nachtrag) gespeichert,
  derselbe Puls ein zweites Mal nicht doppelt gezählt (`neu: false`); die
  Tabelle `zeit_puls` ist damit auf dem Server angelegt.
  Adrian am 30.10.2026: «ja, 2 und 3, PRs anlegen». Hook: `quellen/zeit/
  setup-skript.sh` (für die Umgebung unter «Setup-Skript», am Mac einmal im
  Terminal) legt `~/.claude/zeit-puls.sh` an und trägt ihn für Nachricht,
  «fertig», Start und Ende ein, ohne bestehende Einstellungen zu ändern.
  Getestet in einem abgetrennten Testordner: zweimal ausgeführt steht er
  einmal drin, ohne Server kehrt er nach 40 ms ohne Ausgabe zurück, gegen
  einen lokalen Server kamen alle vier Ereignisse mit Sitzung, Gerät,
  Repository und Schritt an; eine falsche «session_id» im Nachrichtentext
  täuscht ihn nicht. Schritt aus `~/.zeit-schritt` (Regel in `CLAUDE.md`).
  Anleitung: `quellen/zeit/LIESMICH.md`. Die Probe nennt neu den letzten Puls
  (Betreiber-Zweig, 132 Prüfungen grün, eingebauter Fehler rot).
  Nachtrag der ersten Sitzung am 30.10.2026: 30 Pulse aus dem Verlauf (15
  Nachrichten, 15 «fertig»), 29 neu, einer war schon da, kein Fehler. Stand
  14:01: Schritt 0.1 42 Min. (Claude 9, Adrian 33), 0.2 9 Min. (4 und 5),
  0.6 2:12 h (Claude 40 Min., Adrian 1:32 h); zusammen 3:05 h, dazu 1:53 h
  Pause.
  Adrian am 30.10.2026: beide Pull Requests gemergt und das Setup-Skript in
  der Umgebung «Default» eingetragen. Lauf «Betreiber zu Hostpoint» Nr. 10
  (41063920704) und «Website zu Hostpoint» Nr. 59 (41063952208) erfolgreich.
  Neue Sitzung «Hallo» um 14:32: Setup-Skript gelaufen («Projekt-Timer: Hook
  eingerichtet.»), danach 3 Pulse vom Hook auf dem Server (Probe: bisher 33,
  letzter «fertig» 14:32:44, Quelle `claude-code`, Gerät `cloud`). **Der Hook
  läuft.** Sitzungen, die vor dem Setup-Skript gestartet sind, messen nicht
  selbst und werden nachgetragen.
  Ansichten am 30.10.2026 als Bild zur Wahl, im Aussehen des Betreiber-Bereichs
  (neuer Navigationspunkt «Zeit» nach «Projekte», Reiter Heute, Woche,
  Projekte, Auswertung), mit den echten Zeiten des Tages: A «Heute»
  (Jetzt-Leiste, Tagesband, vier Kacheln, Arbeitsblöcke von Pause zu Pause mit
  «war Arbeit»), B «Woche» (Tage mit Band, «nicht gemessen» vor dem 30.10.,
  daneben Zeit pro Roadmap-Schritt mit Soll), Handy C «Jetzt» (Status, Summe,
  Band) und D (Band senkrecht mit Schritten). Offen: Adrians Wahl, dann Bau.
  Adrian wählt am 30.10.2026 anders: «Zeit» als Reiter unter Projekte, am
  Handy nicht nötig. Gebaut mit ENT-066.
  Abgeschlossen am 30.10.2026 mit ENT-066: Eingang, Hook und Ansicht sind
  live. Am Mac einrichten, sobald Adrian dort mit Claude arbeitet
  (`quellen/zeit/LIESMICH.md`).
- [x] **ENT-047** · 30.10.2026 · Ausnahme von ENT-035 und ENT-039 («keine
  Handy-Fassung»): Der Projekt-Timer (ENT-046) bekommt am Handy eine kleine
  Anzeige mit «Jetzt» und dem Tagesband. Der übrige Betreiber-Bereich bleibt
  für den Computer. Adrian: «handy klein». Beim Bau auch die Regel in
  `CLAUDE.md` von `formateins-betreiber` nachführen.
  Nachgeführt am 30.10.2026 mit ENT-048, auf dem Arbeitszweig.
  Aufgehoben am 30.10.2026 mit ENT-066 (Adrian: «am handy ist der
  zeitplaner nicht wichtig»).
- [x] **ENT-048** · 30.10.2026 · `CLAUDE.md` in formateins und
  formateins-betreiber angepasst (Adrian: «CLAUDE.md anpassen»):
  www.formateins.ch, betreiber.formateins.ch und github.io antworten aus der
  Cloud-Sitzung, geprüft am 30.10.2026 mit je Antwort 200. Nach einem
  Livegang werden jetzt der Lauf und die ausgelieferte Seite geprüft. Im
  Betreiber-Repository steht zusätzlich die Handy-Ausnahme ENT-047. Dort auf
  dem Arbeitszweig `claude/sleepy-curie-u9tmyk`, nicht live. Beleg: die
  Commits in beiden Repositories.
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
- [x] **ENT-050** · 30.10.2026 · Datenschutzerklärung von formateins.ch um die
  Zählung des QR-Codes im Akquise-Brief ergänzen (ENT-049): gespeichert
  werden Zeit und Gerät, keine IP, kein Cookie. Muss vor dem ersten Brief
  online sein. Text kommt als Vorschlag zu Adrian, dann Bau und Push mit
  seinem Wort.
  Gebaut auf Adrians Wort («bau ein»): neuer Abschnitt «Wenn du Post von mir
  bekommst» in `datenschutz.html`, je ein Satz in beiden «Kurz gesagt» und
  in der Aufbewahrung. Ton nach der Startseite (gute Arbeit sichtbar machen,
  zuerst zuhören, gemeinsam entscheiden), nachdem die erste Fassung für
  Adrian nach Rechtfertigung klang. Inhalt nach ENT-052: 60 Tage, danach
  nur Name und Ort. Live am 30.10.2026 mit Adrians Wort («push auf main,
  beide repos»): `main` auf 788e992, Lauf «Website zu Hostpoint» Nr. 53
  (41051762942) erfolgreich, «replacing datenschutz.html», «Sync complete».
- [x] **ENT-051** · 30.10.2026 · Bing meldet auf der Startseite «Title tag
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
  bleiben dekorativ. Descriptions gekürzt auf höchstens 154 Zeichen, Adrian
  wählt je Fassung A («A, A, A, A»): Startseite 174 → 149, Website-Kosten
  243 → 145 (Spannen statt «ab»), GuardOpS 213 → 150, Craniosacral Praxis
  213 → 154. Live am 30.10.2026 mit Adrians Wort («push auf main»): `main`
  auf ad850e9, Lauf Nr. 49 (41047363148) erfolgreich, «replacing» der neun
  Seiten, «Sync complete», IndexNow 200 für die sieben indexierten Seiten.
  In Bing löst Adrian «Request indexing» aus.
- [x] **ENT-052** · 30.10.2026 · Akquise: Ein Brief ohne jede Reaktion (kein
  Scan, kein Reaktionsdatum, nicht als Adresse übernommen) wird 60 Tage nach
  dem Versand archiviert. Adrian wollte zuerst 30 Tage; 60 auf Empfehlung,
  wegen Weihnachtspause, Tor 3 Wochen nach Welle 2 und Briefen, die auf dem
  Stapel liegen. Gelöscht werden Kontakt, Ansprechperson, Notizen und
  QR-Code (alter Brief zählt nicht mehr). Der Betrieb selbst bleibt als
  «archiviert» mit Name, PLZ, Ort, Bewertung und Kosten: Auswertung stimmt,
  kein zweiter Brief (Adrians Wahl statt Sperrliste). Meldet er sich doch,
  holt das Reaktionsdatum ihn zurück. Commit a6ae838 auf dem Arbeitszweig
  von formateins-betreiber, Gegenprobe gemacht. Live am 30.10.2026 mit
  Adrians Wort: Betreiber-`main` auf a6ae838, Lauf «Betreiber zu Hostpoint»
  Nr. 7 (41051645601) erfolgreich, Prüfungen mit Datenbank grün (inkl. der
  acht Archiv-Prüfungen), «replacing» akquise.js, kern/akquise.php,
  kern/tabellen.php und 8 weitere, «Sync complete».
  Fehler nach dem Livegang: Die Oberfläche ergänzte beim Start nur fehlende
  Tabellen, nicht fehlende Spalten. Standen die Akquise-Tabellen schon,
  fehlte archiviert_am, und Übersicht und Akquise brachen ab. Fix im Commit
  «Neue Spalten beim Anmelden ergänzen» (4875281, Prüfung mit entfernter
  Spalte, Gegenprobe): tabellen_vollstaendig() zählt auch Spalten, der
  QR-Code zählt auch, wenn das Archiv scheitert. Live über PR #2 (Adrian),
  Lauf «Betreiber zu Hostpoint» Nr. 9 (41054569295) erfolgreich, «replacing»
  api/akquise_qr.php und kern/tabellen.php, «Sync complete».
  Offen: Im Repository formateins-akquise dieselben Betriebe nachziehen
  (Ordner mit Brief und Entwurf, Startseiten-Bild, Zeilen in betriebe.csv,
  screening.md, lighthouse.csv) und den Git-Verlauf einmal im Monat
  bereinigen. Das braucht einen Force-Push auf main und jedes Mal Adrians
  Wort. Erstmals fällig 60 Tage nach dem ersten Brief.
- [x] **ENT-053** · 30.10.2026 · Betreiber: Die Unterreiter (Fahrplan,
  Betriebe usw.) stehen in jedem Bereich mittig unter den Kacheln der
  Navigation, nicht mehr am rechten Rand. Seitenkopf mit demselben Raster
  wie die Kopfzeile. Auf Adrians Skizze hin gebaut, gemessen bei 1600 und
  1280 px (Abweichung 0 px). Commit 298dfa0 auf dem Arbeitszweig
  von formateins-betreiber. Live mit demselben Lauf Nr. 7 (betreiber.css).
  Zuerst als ENT-051 erfasst (10:22). Dieselbe Nummer vergab eine andere
  Sitzung um 11:03 für Bing und ist damit schon live; weil diese Änderung
  noch nicht live war, weicht sie auf ENT-053 aus. Der Commit im Betreiber
  nennt noch ENT-051.
- [ ] **ENT-054** · 30.10.2026 · KI-Suchen finden formateins noch nicht
  (Adrian: ChatGPT kennt «formateins aus Olten» nicht). Prüfung von aussen:
  `robots.txt` erlaubt alle Crawler und ist erreichbar (200), Sitemap,
  `llms.txt`, strukturierte Daten (Adresse Trimbach, Einzugsgebiet Olten,
  FAQ, Preise) und IndexNow sind da. Ein Websuche-Index (Firecrawl) liefert
  alle sieben Seiten für «formateins.ch» und die Startseite für «formateins
  Olten». Bing liefert für `site:formateins.ch` keine eigenen Treffer, nur
  fremde Seiten: Bing hat die Seite noch nicht im Index, und ChatGPT sucht
  vor allem über Bing. Hauptgrund ist also Zeit (zwei bis drei Tage seit der
  Einrichtung) plus Bing. Gemacht auf dem Arbeitszweig: Sitemap mit
  aktuellen Änderungsdaten, auf `gespraech.html` den Ersatztext «gerade
  alles belegt» mit `data-nosnippet` aus den Suchtreffern genommen (ein
  Suchindex zeigte ihn als Beschreibung). Offen für Adrian: Bing Webmaster
  Tools (Sitemap, URL-Übermittlung), Einträge bei local.ch und search.ch
  (ENT-027), Gewerbe Olten, Instagram-Profil als `sameAs`. Nachprüfen mit
  ENT-026.
  Recherche 30.10.2026 (`quellen/recherche-ki-suchen-2026-10.md`): Jede KI-Suche
  hat ihren eigenen Index. Google AI Overviews, AI Mode und Gemini nutzen
  Google, Copilot nutzt Bing, ChatGPT den eigenen OAI-SearchBot plus
  Drittanbieter (vermutlich vor allem Bing), Perplexity den eigenen Index,
  Claude Brave Search, Siri den Applebot. Die Technik der Seite ist
  vollständig, der Hebel liegt ausserhalb: Bing Webmaster Tools, Bing Places,
  Apple Business, local.ch/search.ch, Gewerbe Olten (Probejahr gratis, danach
  CHF 365), Brave «Submit URL», echte Erwähnungen. Zwei Funde im Quelltext:
  die Adresse steht nur in den strukturierten Daten, nicht im sichtbaren
  Text (Vorschlag sichtbar machen, Varianten zuerst); `messung.js` hat keine
  GA4-Mess-ID, Besuche aus ChatGPT sind also nicht messbar.
  Adrian am 30.10.2026: arbeitet beim Kunden oder per Video. Darum keine
  volle Adresse sichtbar auf den Seiten (bleibt im Impressum und in den
  strukturierten Daten); im Google-Profil Adresse ausblenden und
  Einzugsgebiet angeben (Adrian). Offen: ob «Trimbach bei Olten» sichtbar
  im Text stehen soll (Textfrage, Varianten zuerst).
  Nummer: zuerst als ENT-042 vergeben, die war auf `main` schon vom
  Betreiber-Bereich belegt (andere Sitzung); dann als ENT-052, die war seit
  10:49 auf dem Arbeitszweig claude/epic-mayer-2x1fei für das Archiv der
  Akquise vergeben (11:43 gegen 10:49, die frühere behält sie). Deshalb
  ENT-054. Die Commits 3bb2771 und 37e872b nennen noch ENT-052.
  Website-Teil live am 30.10.2026 mit Adrians Wort («push»): `main` auf
  3bb2771, Lauf «Website zu Hostpoint» Nr. 51 (41050159537) erfolgreich,
  «replacing» gespraech.html und sitemap.xml (alle Seiten mit Stand
  30.10.2026), «Sync complete», IndexNow 200. Offen bleiben Adrians Schritte
  ausserhalb der Seite und die Nachprüfung (ENT-026, um den 06.11.2026).
- [ ] **ENT-055** · offen, um den 20.11.2026 · Zugriffsprotokolle bei Hostpoint
  prüfen (Adrian lädt sie im Control Panel unter dem Webhosting herunter).
  Suchen nach `OAI-SearchBot`, `bingbot`, `Claude-SearchBot`, `PerplexityBot`,
  `Applebot`, `Googlebot`: Kommen sie, mit welchem Status (200 oder 403)? Nur
  so ist belegt, dass Hostpoint die KI-Crawler durchlässt; `robots.txt` allein
  beweist es nicht (OpenAI verlangt das ausdrücklich). Aus ENT-054.
- [ ] **ENT-056** · offen · `messung.js` hat keine GA4-Mess-ID
  (`analytics: ''`). Ohne sie lässt sich nicht messen, ob Besucher aus
  ChatGPT, Perplexity oder Copilot kommen. Adrian gibt die ID (G-…), falls ein
  GA4-Konto besteht; das Zustimmungsbanner ist schon gebaut.
- [x] **ENT-057** · 02.11.2026 · Instagram-Profil «formateins.ch» als `sameAs` in
  die strukturierten Daten der Startseite: `https://www.instagram.com/formateins.ch/`
  (Link über die Suche bestätigt, Adrian: «Mach auch gleich das Instagram-Profil
  als sameAs rein»). Auf `main` im Anschluss an ENT-076. Offen bleiben
  local.ch und search.ch (ENT-027).
- [ ] **ENT-058** · offen · Soll «Trimbach bei Olten» sichtbar im Text stehen
  (heute nur «Region Olten», die volle Adresse bleibt im Impressum, ENT-054)?
  Textfrage, Varianten zuerst im Chat.
- [x] **ENT-059** · 30.10.2026 · Erkenntnisse zu KI-Suchen festgehalten:
  README neuer Abschnitt «KI-Suchen» (Index je Anbieter, was wirkt, Adrians
  Schritte, Termine zum Nachprüfen), Recherche mit Quellen in
  `quellen/recherche-ki-suchen-2026-10.md` (nicht auf dem Webserver),
  `CLAUDE.md` mit der Regel gegen doppelte ENT-Nummern und dem Weg, von aussen
  zu prüfen. README-Korrekturen: `llms.txt` gibt es (stand noch «bewusst
  weggelassen»), im Fuss steht keine Adresse.
  ENT-055 bis ENT-059 zuerst als ENT-053 bis ENT-057 vergeben (nur auf dem
  Arbeitszweig, Commit 9bf2ce9); die anderen Nummern hatte eine andere
  Sitzung inzwischen auf `main` belegt.
- [x] **ENT-060** · 30.10.2026 · Analyse «Agentic Browsing» (Lighthouse, wie
  KI-Agenten die Seite lesen und bedienen) von Adrian abgelegt in
  `quellen/agentic-browsing-2026-10.md`, mit Gegenprobe am Code: jedes
  Bedienelement auf den sieben Seiten hat einen Namen, alle Felder ein
  `<label>` (P3 erfüllt); der Sprung auf dem Kostenrechner liess sich genau
  nachstellen (ENT-061); «WebMCP ab Chrome 150» steht nicht auf der
  Übersichtsseite der Quelle. README: Abschnitt «KI-Agenten» mit den Regeln
  für jede Änderung (`llms.txt` und `sitemap.xml` im selben Commit, nichts
  per Skript einblenden, was Platz braucht, jedes Bedienelement benennen).
- [x] **ENT-061** · 30.10.2026 · Kostenrechner: Layoutsprung beim Laden weg.
  PageSpeed mass mobil CLS 0,071, lokal genau so nachgestellt (Slow 4G, CPU
  vierfach gedrosselt). Ursache: alle Fragen im HTML versteckt, erst das
  Skript zeigte die erste; bis dahin war die Bühne leer und die Fusszeile
  sprang 235 px. Jetzt hat die erste Frage `dran` schon im HTML. Danach CLS
  0,000, Bild nach dem Laden pixelgleich (390 und 1366 px), Fragen schalten
  wie vorher. Keine sichtbare Änderung, darum ohne Varianten gebaut, auf dem
  Arbeitszweig. Live am 30.10.2026 mit Adrians Wort («push»): `main` auf
  a69782c (mit ENT-059 und ENT-060), Lauf «Website zu Hostpoint» Nr. 55
  (41053933641) erfolgreich, «replacing kostenrechner.html», «Sync
  complete», IndexNow 200 für /kostenrechner. Offen für Adrian: PageSpeed
  mobil neu messen, erwartet CLS 0.
- [ ] **ENT-062** · offen, Backlog · WebMCP für die Formulare in
  `gespraech.html` und `kostenrechner.html` (`toolname`,
  `tooldescription`, `toolparamdescription`), sobald der Standard stabil ist
  und Lighthouse ihn bewertet. Beispiel in `quellen/agentic-browsing-2026-10.md`.
- [x] **ENT-063** · 30.10.2026 · PageSpeed-Bericht der Startseite (Adrian,
  30.10.2026, 12:45): Handy 98/100/100/100, Computer 100 überall, CLS 0.
  Speed Index Handy 3,7 s, Gewicht Computer 1'476 KB. Die fünf Vorschläge
  am Code geprüft:
  1. Bilder zu gross: die Startseiten der Arbeiten (1200 px) erscheinen
     höchstens 381 px breit, eine kleinere Fassung mit `srcset` lohnt sich.
     Achtung: dieselben Bilder stehen auch in der vergrösserten Werkbank,
     dort braucht es die grosse Fassung weiter. Die Vorschaubilder der Videos
     (`video-reel.jpg` 82 KB) als WebP in gleicher Grösse.
  2. Reel-Video am Computer: In einem normalen Fenster (1350 × 940) lädt die
     Seite kein einziges Video, gemessen. Es lädt erst, wenn das Reel ins
     Bild kommt. Vermutlich hat Lighthouse es mit dem Bildschirmfoto der
     ganzen Seite ausgelöst (nicht belegt). Echte Besucher laden es nur,
     wenn sie hinscrollen.
  3. `leiste.css` und `schriften.css` ins HTML schreiben: spart zwei kleine
     Anfragen, aber beide gelten für alle Seiten, jede Änderung müsste dann in
     neun Dateien.
  4. «Zeile 1611»: in der ausgelieferten Fassung (ohne Kommentare) das Lesen
     von `scrollY` beim Start der Mitlauf-Leiste (`letztesY = scrollY`). Es
     erzwingt den ersten Layoutaufbau mitten im Skript, rund 37 ms bei
     vierfach gedrosselter CPU, der grösste Posten. Lösung: den Wert erst
     beim ersten Scrollen lesen, eine Zeile, nichts sichtbar.
  5. Zwischenspeicher 1 Jahr: nur mit neuen Dateinamen bei jeder Änderung,
     sonst sehen Besucher alte Bilder. Später.
  Adrian wählt: Punkt 4 bauen (ENT-064), Punkt 1 als Variante A (ENT-065);
  2, 3 und 5 nicht.
- [x] **ENT-064** · 30.10.2026 · Aus ENT-063 wählt Adrian: Punkt 4 bauen, für
  Punkt 1 zuerst Bilder zeigen (ENT-065). Punkt 4 gebaut: Die Mitlauf-Leiste
  der Startseite liest `scrollY` erst beim ersten Scrollen, nicht mehr beim
  Start des Skripts. Gemessen in der ausgelieferten Fassung (ohne
  Kommentare), CPU vierfach gedrosselt: der erzwungene Layoutaufbau an
  dieser Stelle (37 + 15 ms) ist weg, alle erzwungenen Aufbauten zusammen
  74 → 39 ms. Leiste gleich wie vorher: unsichtbar beim Runterscrollen, da
  beim Hochscrollen, weg ganz oben.
  Live am 30.10.2026 mit Adrians Wort («A, dann push»): `main` auf 91ed432,
  Lauf «Website zu Hostpoint» Nr. 57 (41057444056) erfolgreich,
  «uploading» video-reel.webp und video-spot.webp, «replacing index.html»,
  «Sync complete», IndexNow 200 für die Startseite.
- [x] **ENT-065** · 30.10.2026 · Punkt 1 aus ENT-063 (Bilder kleiner), Bilder
  alt neben neu an Adrian, Pixel für Pixel wie auf dem Gerät. Gemessene
  Anzeigebreite der Arbeiten-Bilder: 346 px am Handy, 381 px am Computer,
  in der vergrösserten Werkbank 726 px. Auf dem iPhone (dreifache Dichte)
  braucht es also schon im Arbeiten-Bereich rund 1040 px; die 260 KB aus
  dem Bericht rechnen mit der Dichte von PageSpeed (1,75). Real möglich:
  A) Vorschaubilder Reel und Spot als WebP in gleicher Grösse, kein
  sichtbarer Unterschied, −39 KB (Reel 82 → 50 KB). B) zusätzlich die
  Arbeiten-Bilder auf 800 px, weitere −35 KB, aber am Handy leicht und in
  der Werkbank am Retina-Bildschirm deutlich weicher (kleine Schrift).
  Empfehlung A. Adrian wählt A. Gebaut: `video-reel.webp` (50 KB) und
  `video-spot.webp` (6 KB), Qualität 75, gleiche Pixelzahl, als `poster` an
  allen drei Stellen der Startseite. Die JPG bleiben (`entwurf.html` braucht
  `video-spot.jpg`). Lokal geprüft: keine fehlende Datei, Vorschaubild steht,
  Startseite 617 → 579 KB beim ersten Laden.
  Live mit ENT-064 am 30.10.2026 mit Adrians Wort («A, dann push»): `main` auf 91ed432,
  Lauf «Website zu Hostpoint» Nr. 57 (41057444056) erfolgreich,
  «uploading» video-reel.webp und video-spot.webp, «replacing index.html»,
  «Sync complete», IndexNow 200 für die Startseite.
- [x] **ENT-066** · 30.10.2026 · Ansicht des Projekt-Timers (ENT-046).
  Adrian: «Zeit» kein eigener Punkt in der Navigation, sondern ein Reiter
  unter Projekte («Projekte, Verträge, Zeit»); am Handy nicht wichtig, darum
  keine Handy-Fassung, ENT-047 ist aufgehoben. Entwurf A und B vereint:
  Umschalter «Heute» und «Woche» im Reiter. Ohne Soll-Spalte, bis die Soll-
  Werte mit Schritt 0.5 feststehen; ohne Preis-Kachel bis Schritt 5.1.
  Gebaut in `formateins-betreiber`, Arbeitszweig `claude/sleepy-curie-u9tmyk`:
  `kern/zeit.php` rechnet nach der Regel (Nachricht bis «fertig» Claude, danach
  du, höchstens 10 Min., Rest Pause; mehrere Sitzungen zugleich zählen jede
  Sekunde einmal, du vor Claude; eine Nachricht ohne «fertig» zählt höchstens
  60 Min.), `api/zeit.php` liefert Tag und Woche mit Zeit pro Projekt und
  Schritt seit dem ersten Puls, `api/zeit_hand.php` für «Von Hand starten»,
  «Eintrag von Hand» und «war Arbeit» (Paar hand_start und hand_stopp, geht
  allem vor, nur solche Einträge lassen sich löschen). Ein Tag vor dem ersten
  Puls heisst «nicht gemessen», ein gemessener Tag ohne Puls «kein Puls», ein
  kommender «noch nicht». Der Schritt in `~/.zeit-schritt` trägt neu den
  Namen («muster-breitbild 0.6 Projekt-Timer»), Regel in `CLAUDE.md` und
  `quellen/zeit/LIESMICH.md` nachgeführt. Prüfungen mit lokaler Datenbank:
  161 grün, davon 29 neue für die Auswertung; alle zwölf absichtlich
  eingebauten Fehler wurden rot (Lücke ganz als du, Claude vor du, kein
  Deckel, falsche Zuordnung bei Gleichstand, Puls in derselben Sekunde,
  Löschen ohne Schutz, ohne Anmeldung, «nicht gemessen» fehlt, Name
  überschrieben, Start zählt nicht, «bis» vor «von», Stopp in der Zukunft).
  Im Browser mit den Pulsen dieser Sitzung geklickt: «war Arbeit», Löschen,
  Von Hand starten und stoppen, ganzer Tag, Vortag; keine Fehler in der
  Konsole. Offen: Merge durch Adrian, danach Lauf und Seite prüfen.
  Live am 30.10.2026 auf Adrians Wort («merge bitte selbst in github!»):
  Claude hat beide Pull Requests gemergt (Rebase), Betreiber Nr. 4 auf
  `main` b285520, formateins Nr. 2 auf fc5a508. Lauf «Betreiber zu
  Hostpoint» Nr. 11 (41085609971) erfolgreich: «uploading» `api/zeit.php`
  und `api/zeit_hand.php`, «replacing» `betreiber.css`, `betreiber.js` und
  `kern/zeit.php`, «Sync complete». Lauf «Website zu Hostpoint» Nr. 60
  (41085617968) erfolgreich. Auf dem Server antworten beide neuen Endpunkte
  ohne Anmeldung mit 401, `betreiber.js` enthält den Reiter.
  Nachtrag dieser Sitzung: 46 Pulse, 16 neu, 30 schon da, kein Fehler. Der
  Befehl `/compact` zählt als Nachricht, «Compacted» als «fertig». Die
  Lesezeit nach dem Whiteboard (09:21 bis 09:45) ist als Eintrag von Hand
  nachgetragen, nach Adrians Entscheid in ENT-046. Damit zeigt der Timer für
  Schritt 0.1 dieselben 42 Min. wie das Journal.
- [ ] **ENT-067** · 30.10.2026 · Entscheide zum Musterprojekt Breitbild
  (ENT-043, Whiteboard https://claude.ai/artifact/2cbLpn6LntXZgMbVfhgJGu).
  Adrian: «1A, 2 ja, 3 Schreinerei, 4 offen, 5 offen, 6 HTML».
  1 Umfang A: Breitbild voll ausgebaut, alles aus dem Paket und die
  Optionen, jedes Stück mit Etikett «im Paket» oder «+ 600».
  2 Ja: «Vorlagen für Social Media» (+ 400) kommt als vierte Option auf die
  Karte Breitbild. Ändert `preise.html` und `preise.js`: zuerst als Bild
  zeigen, live erst mit Adrians Wort (Roadmap 4.5).
  3 Sparte Schreinerei: Handwerk in zweiter Generation, Region Olten.
  6 Demo-Website in reinem HTML.
  Offen: 4 Film (A KI mit Hinweis oder B echter Drehtag) und 5 Form der
  Schublade (C Tisch und Fallstudie, A Fallstudie, B Planschrank). Als
  Nächstes Schritt 1.1: Name, Geschichte und Strategieblatt der Schreinerei
  als Text in den Chat; das braucht 4 und 5 noch nicht.
- [x] **ENT-068** · 30.10.2026 · Betreiber-Bereich: **Archiv für Anfragen**
  (Adrian: «einen Ordner, wo die Anfragen archiviert werden und nicht mehr im
  Eingang stehen»). Gewählt aus zwei Bildern Variante A: Reiter **Offen ·
  Erledigt · Archiv**, «Alle» fällt weg. Jede Zeile hat am Ende «⋯» mit
  «Öffnen» und «Archivieren», im Archiv «Zurückholen» (Adrian: «drei Punkte
  rechts … mit Dropdown archivieren»). Der Status bleibt beim Archivieren,
  unter ihm steht «archiviert» mit Datum; archivierte Anfragen zählen in der
  Übersicht und im Zähler am Reiter nicht mit. Spalte `anfragen.archiviert_am`,
  Endpunkt `api/anfrage_archiv.php`, Eintrag im Verlauf. Prüfungen grün,
  Gegenprobe: ohne Ausschluss in der Übersicht wird die Prüfung rot.
  Im Browser durchgespielt: Menü öffnen, Escape, Archivieren, Reiter Archiv,
  Zurückholen, Öffnen. Betreiber `7e497c9` auf `main`.
- [x] **ENT-069** · 30.10.2026 · Betreiber-Bereich, Offerten: **Leistungskatalog
  und «Neues Projekt»**. Anlass: Das Feld «Projekt» in der Offerte war leer
  (es zeigt Aufträge aus Projekte, es gab noch keinen). Adrian, je die
  Empfehlung: Der Katalog im Reiter Leistungen startet mit den Listenpreisen
  der Website (`preise.js`), 37 Leistungen mit Nummern W-, B-, V-, Pauschale,
  MWST 0 %, WordPress-Updates pro Jahr; eingesetzt nur, solange der Katalog
  ganz leer ist, danach Pflege im Reiter (Preise ziehen nicht automatisch
  nach). Rabatte (überarbeiten −20 %, mehrere Bereiche −20 %, Eile +15 %)
  gehören ins Feld «Rabatt %». Aus zwei Bildern Variante A: Knopf «Neues
  Projekt» neben «Neue Adresse erstellen», Dialog mit Titel und Richtung,
  legt das Projekt für den Empfänger an und wählt es gleich. Beides sind
  Abweichungen von GuardOpS mit Adrians Wort, in `CLAUDE.md` des Betreibers
  nachgeführt. Prüfungen grün, im Browser durchgespielt. Betreiber `7e1bb01`
  und `ee9c5f7` auf `main`.
- [x] **ENT-070** · 30.10.2026 · Musterprojekt Breitbild, Schritt 1.1: Die
  Musterfirma heisst **Schreinerei Kully AG, Wangen bei Olten** (Adrian:
  «ich tendiere eher zu einem authentischen Geschlecht aus der Region», dann
  «A, passt»). Kully ist ein echtes Oltner Geschlecht (Bürger seit 1545,
  Familiennamenbuch: Olten und Wangen bei Olten), Firma und Leute sind
  erfunden: 1988 gegründet von Werner Kully, AG und Logo 1994, Website 2011,
  Facebook still seit 2019, 2024 übernimmt Tochter Nina, neun Leute, davon
  zwei Lernende. Geprüft im Handelsregister, bei Google und in der Region;
  verworfen u. a. Gisiger (Familienbetrieb in Obergösgen) und Lattmann (nicht
  aus der Region). Steckbrief `quellen/muster-breitbild/FIRMA.md`, Ordner
  `Demo Projekte / Schreinerei Kully` in Drive. Soll für die Etappen 1 und 2
  in der Roadmap gesetzt, 3 bis 5 nach Entscheid 4 (Film).
- [x] **ENT-071** · 30.10.2026 · Musterprojekt Breitbild, Schritt 1.2: Der
  **Vorher-Auftritt** der Schreinerei Kully ist freigegeben (Adrian: «A,
  passt»). Altes Logo von 1994: Variante A, Oval mit Hobel, braun, im
  Kopierer-Druck; verworfen B (Pinselschrift mit Tanne) und C (Stempel mit
  Sägeblatt), sie bleiben für den Blog. Dazu die Website von 2011 und ein
  neutral gezeichnetes Profil mit dem letzten Beitrag vom Dezember 2019. Vier
  Fotos mit KI (Higgsfield, 1 Credit). Quellen in
  `quellen/muster-breitbild/vorher/`, die Bilder rechnet Playwright daraus.
  Entwurf des Erstgesprächs (1.3) in `quellen/muster-breitbild/ERSTGESPRAECH.md`,
  Freigabe offen.
- [x] **ENT-072** · 30.10.2026 · Musterprojekt Breitbild, Schritt 1.3: Das
  **Erstgespräch** mit der Schreinerei Kully ist freigegeben (Adrian:
  «passt»). Das Protokoll ist der Auftrag für Strategie, Offerte, Logo,
  Website und Social Media; in den Blog kommen nur drei, vier Sätze (Adrian:
  «dass wir uns auch als Herausforderung an das herangehen müssen, was sich
  der Kunde wünscht. schlau»). Entwurf des Strategieblatts (2.1) in
  `quellen/muster-breitbild/STRATEGIE.md`, Kernsatz zur Wahl (A «Bei Kully
  siehst du, wer baut.», B, C), Freigabe mit der Offerte (2.3).
- [ ] **ENT-073** · 31.10.2026 · Musterprojekt Breitbild, Schritt 2.2:
  **Offerte an die Schreinerei Kully** als Entwurf, erstellt im echten
  Offerten-Werkzeug des Betreiber-Bereichs, aber lokal mit eigener Datenbank
  (nichts auf betreiber.formateins.ch). Positionen aus dem Leistungskatalog:
  B-03, W-02, V-02, V-32, V-41, B-11, die teuerste Richtung voll, alles andere
  20 % weniger wie auf `/preise`: **Festpreis CHF 8'650** ohne Mehrwertsteuer,
  drei Etappen (Branding 2'640, Website 3'050, Film 2'960). Texte schreiben
  (W-12, CHF 960) nur als Notiz, weil das Budget bei rund CHF 9'000 liegt.
  Kernsatz und Claim: Adrian überlegt noch («Überlege noch. Weiter»); dazu
  festgehalten, dass der Claim neben das Logo kommt, nicht hinein. Offen bis
  zur Freigabe (2.3). `quellen/muster-breitbild/OFFERTE.md`, Skripte in
  `quellen/muster-breitbild/offerte/`.
- [ ] **ENT-074** · 31.10.2026 · Betreiber-Bereich, Offerten: Der Ausdruck
  zeigt den **Rabatt einer Position** nicht. Einzelpreis CHF 2'900 und Summe
  CHF 2'320 stehen ohne Erklärung nebeneinander (gefunden mit der Offerte an
  Kully, ENT-073). Vorschlag: eine Zeile «20 % Rabatt» unter der Beschreibung
  oder eine Spalte. Abweichung vom GuardOpS-Aufbau, braucht Adrians Wort;
  zuerst als Bild zeigen.
- [ ] **ENT-075** · 31.10.2026 · Drucksachen: **Briefkopf statt Vorlagen
  für Offerte und Rechnung** (Adrian: «Ich denke, Offerten macht kein Sinn.
  Weil diese Betriebe schon Tools haben. Briefkopf Vorlagen passen besser»).
  Ein Betrieb macht Offerten und Rechnungen in seinem Programm; geliefert wird
  der Briefkopf dafür. Im Musterprojekt nachgeführt: Steckbrief, Erstgespräch
  (Nina arbeitet mit einem Programm für Schreinereien, kein neues Programm),
  Strategieblatt, Offerte OF-0001 (Position B-03 neu beschrieben, Preis
  gleich), Roadmap 3.3, Lernliste. Offen: Auf formateins.ch steht noch
  «Vorlage für Offerte und Rechnung» an sechs Stellen (`preise.html` viermal
  mit den Daten für Suchmaschinen, `kostenrechner.html`, `llms.txt`).
  Textvorschlag im Chat, live erst mit Adrians Wort.

- [x] **ENT-076** · 02.11.2026 · Suchmaschinen, Sitelinks: Adrian fragt, wie
  Google die Unterseiten direkt unter dem Treffer zeigt (Beispiel Brack). Die
  Brack-Liste sind bezahlte Sitelinks einer Anzeige; organische Sitelinks
  vergibt Google selbst, vor allem nach Markensuchen, kein Antrag möglich.
  **Prüfung des Schemas:** Firma (`ProfessionalService` mit `#formateins`),
  Startseite, FAQ, Preise, Artikel und die zwei Arbeiten sind vorhanden und
  gültig. Gefehlt haben ein eigenes `WebSite`-Objekt mit Kennung,
  `BreadcrumbList` auf allen Unterseiten, ein `WebPage` auf Kostenrechner
  und Gespräch, und `isPartOf` auf Preise und Artikel. **Als Entwurf auf dem
  Arbeitszweig ergänzt** (`index.html`: `WebSite` mit `#website`;
  `preise`, `kostenrechner`, `website-kosten`, `gespraech`,
  `arbeiten/guardops`, `arbeiten/craniosacral-praxis`: `BreadcrumbList`
  Startseite › Seite, bei den Arbeiten Startseite › Arbeiten › Arbeit; alle
  Seiten hängen mit `isPartOf` an `#website`). Nur Daten für Suchmaschinen,
  nichts Sichtbares. Alle Blöcke parsen, Seiten laden ohne Skriptfehler
  (Playwright, lokal). Freigabe Adrian am 02.11.2026 («Ja, auf main
  pushen»), Commit 4f39bcb auf `main`. Offen bleibt nur die Kontrolle in der
  Search Console unter «Navigationspfade» in ein paar Tagen. Verwandt: ENT-057 (Instagram als
  `sameAs`).
- [x] **ENT-077** · 02.11.2026 · Sobald die Einträge bei local.ch und search.ch
  freigeschaltet sind (ENT-027): beide Adressen als `sameAs` in die Firma auf
  der Startseite, neben Google-Profil und Instagram (ENT-018, ENT-057). Adrian
  schickt die Links oder sie werden von hier aus gesucht. Geht auf `main` erst
  mit Adrians Wort.
  Nachtrag 06.11.2026: Beide Einträge sind freigeschaltet, die Adressen
  stehen bei ENT-027. Bereit zum Einbau.
  Nachtrag 06.11.2026: Adrian «ENT-077 einbauen und auf main pushen».
  `index.html`: beide Adressen in `sameAs` der Firma (`#formateins`), nach
  Google-Profil und Instagram. `entwurf.html` hat noch kein `sameAs`, dort
  bleibt der Hinweis für den Livegang.
  Livegang: main a35e3d8, Lauf «Website zu Hostpoint» Nr. 85 erfolgreich.
  Geprüft auf www.formateins.ch: `sameAs` mit Google-Profil, Instagram,
  local.ch und search.ch ausgeliefert.

- [ ] **ENT-078** · 03.11.2026 · Betreiber-Bereich: **eigener Bereich «Preise»**
  mit der Preislogik des Kostenrechners, transparent und mit Eingriffen von
  Hand (Adrian: Ansätze, Regeln und einzelne Fälle ändern; nur im Betreiber,
  mit Option auf Live-Schaltung; eigener Bereich). Aus zwei Bildern Variante A:
  Reiter Rechner (Fall, Rechenweg Zeile für Zeile, «Von Hand», Position dazu,
  «Als Offerte übernehmen»), Ansätze (mit «Leistungskatalog abgleichen»),
  Regeln, Verlauf; oben ein Balken, ob der Betreiber von formateins.ch
  abweicht. Live-Schaltung über einen Commit auf `main` (Adrian: «Commit-Weg
  passt»): der Knopf zeigt zuerst alt → neu und jede feste Zahl, die sich
  ändert, und schreibt dann `preise.js` samt den festen Zahlen in
  `preise.html`, `llms.txt` und `website-kosten.html`; danach läuft «Website
  zu Hostpoint» wie bei jedem Push. **Hier in formateins:** `preise.js` trägt
  die Preise neu als JSON zwischen `PREISE-ANFANG` und `PREISE-ENDE`, dazu
  `rahmen` (−10 %/+15 %, auf 100) statt fest im Code. Werte und Rahmen
  unverändert (Vergleich alt/neu, 12'000 Beträge), Seite sieht gleich aus.
  **Geprüft:** Rechenweg im Betreiber gegen den echten Code von
  `kostenrechner.html`, 310'989 Fälle ohne Abweichung; alle 80 festen Zahlen
  gefunden, mit geänderten Preisen stimmen sie mit dem, was die Seite im
  Browser rechnet (18 von 18); Schalten gegen ein nachgebautes GitHub, auch
  wenn sich `main` dazwischen bewegt. **Live** mit Adrians Wort am
  03.11.2026 («Ja, beides auf main pushen»): formateins `58b8c0e` (Lauf
  «Website zu Hostpoint» #76 grün), Betreiber `bf5d96d` (Lauf «Betreiber zu
  Hostpoint» #15 grün); Paketpreise auf formateins.ch unverändert, ohne
  Skriptfehler (Playwright), `api/preise.php` ohne Anmeldung 401.
  Secret `FORMATEINS_GITHUB_TOKEN` von Adrian eingetragen, Lauf «Betreiber
  zu Hostpoint» #15 neu gestartet (Versuch 2 grün, «eingetragen in
  kern/preise.php»). Die erste Schaltung aus dem Betreiber ist der Beleg, dass
  der Schlüssel die Rechte hat. **Erledigt war:** (2) Secret `FORMATEINS_GITHUB_TOKEN` im Repository
  formateins-betreiber (fein abgestuft, nur formateins, Contents lesen und
  schreiben, Actions lesen); ohne liest der Betreiber nur und schaltet nicht;
  (3) eine Anfrage aus dem Rechner mit ihren Antworten im Rechenweg öffnen
  (Frage 4, «passt vorerst»), braucht die Antworten in der Anfrage.

- [ ] **ENT-079** · 04.11.2026 · **Neue Rubrik «Social Media»** mit Monatspaket:
  eigene Seite `/social-media` (Entwurf `entwurf-social-media.html`), Punkt im
  Menü aller Seiten, Kostenrechner um `?fuer=social` ergänzt. Der Knopf
  aus der Akquise führt auf `/social-media` ohne Zusatz: Adrian am
  04.11.2026, die Seite ist neutral für alle Besucher, kein eigener Gruss
  für Leute aus dem Brief. Botschaft: dazubuchen oder einzeln, keine Zeit,
  Kanäle gepflegt, hochwertiger Inhalt, die Jungen schauen gezielt in den
  sozialen Medien nach. Offen bei Adrian: Preis pro Monat, Name, endgültiger
  Inhalt, Stufen im Rechner, Start einmalig oder inbegriffen, Kombi-Rabatt,
  Kanäle, Platz im Menü. Die oft zitierten «fast 40 %» von Google (Junge
  suchen das Mittagessen auf TikTok oder Instagram) bewusst nicht: interne
  US-Umfrage, nur Restaurants, «something like» (TechCrunch, 12.07.2022).
  Adrian am 04.11.2026: Instagram im Titel ist zu allgemein; «die Jungen»
  heisst nicht nur Teenager, sondern auch um 30 (Beispiel: seine Frau, 31,
  und ihre Kolleginnen suchen viel über Instagram und Facebook). Kern der
  Seite: die Jungen als Problem ansprechen und dass die Kanäle gepflegt sein
  müssen. Belege dafür: IGEM-Digimonitor 2026 (15–75 Jahre, Schweiz):
  Instagram 64 %, Facebook 48 %, Durchschnittsalter Instagram 39, Facebook 45
  (igem.ch/mediennutzung-werbemarkt/online, Stand 02.11.2026); Bernet
  Relations, 23.10.2025, Meta-Werbeplattform: 20- bis 29-Jährige sind die
  grösste Altersgruppe auf Instagram. Für «suchen gezielt dort» weiter keine
  belegte Zahl. Korrektur Adrian, gleicher Tag: Der Kern ist **nicht** das
  Problem der Jungen, sondern allgemein, wie wichtig gepflegte Kanäle sind.
  Die Jungen bleiben ein Argument unter mehreren.
  Titel (Adrian, 04.11.2026): «Keine Zeit für Social Media? / Ich sorge
  wieder für den nötigen Schwung.» Der Satz zum Verhalten («Bevor jemand
  anruft, schaut er sich an, was du zeigst») steht als Adrians Beobachtung in
  Ich-Form, ohne Zahl.
  **Entwurf gebaut** (Adrian: «Bau den Entwurf mit Platzhaltern, Rest
  entscheide ich danach»): `entwurf-social-media.html` und
  `entwurf-kostenrechner.html` (Weiche und Zielfrage mit Social Media, drei
  Fragen, Monatspreis getrennt vom Rahmen und ohne Kombi-Rabatt, Zeitrahmen
  nur bei Projekten). Gelb = Platzhalter: Name, Preis, Start, Stufen,
  Rabatt, Kanäle. Beide mit noindex. Lokal mit Playwright geprüft, ohne
  Skriptfehler. Gefunden: Mit fünf Menüpunkten bricht die Leiste zwischen
  761 und rund 800 Pixel um («Social Media» und der Knopf zweizeilig).
  Vorschlag für den Livegang: `white-space:nowrap` und das Handy-Menü
  schon unter 840 statt 760 Pixel (`leiste.css`, `leiste.js`). Beim
  Livegang auch `anfrage.php` auf die neuen Schlüssel `social_*` prüfen.
  **Drei Stufen** (Adrian, 04.11.2026: «identische Cards … drei
  verschiedene Abstufungen … Starter, Mitte, Maximum», Namen noch offen,
  höhere Stufe proportional mehr Inhalt): Paket als drei Karten wie auf
  `preise.html`. Vorschlag 2 / 4 / 8 Beiträge im Monat, je «Alles aus 01,
  dazu». Neu und gelb als «Vorschlag» markiert: Stories (Stufe 2 und 3),
  Tipp im Monatsbericht, Antworten auf Kommentare und Nachrichten, 30 statt
  15 Minuten Abstimmung (Stufe 3). Rechner: Frage «Wie viel soll jeden Monat
  kommen?» mit den drei Stufen, Karten springen mit `?fuer=social&stufe=1|2|3`
  hinein. Geprüft lokal mit Playwright, ohne Skriptfehler.
  Namen (Adrian, 04.11.2026): **Anlauf, Schwung, Vollgas**. Stufe Anlauf
  nach Adrian: Grundcheck (Analyse der Social-Media-Auftritte), 2 Beiträge
  von Adrian erstellt (1 Clip, der das Geschäft zeigt, 1 Beitrag aus dem
  Alltag), Texte, Hashtags, Planung, Veröffentlichung, Monatsbericht nur,
  wenn Adrian die Kanäle verwaltet, Inhalte per WhatsApp. Profil aufräumen,
  Vorlagen, Logo-Clip und die 15 Minuten Abstimmung sind aus Stufe 1
  heraus; ob sie anderswo hingehören, ist offen.
  Adrian, gleicher Tag: Grundcheck heisst nicht «ich sage dir», sondern
  gemeinsam eine Strategie erarbeiten, mit den Vorstellungen des Kunden.
  Karten dürfen länger werden, Vollgas braucht mehr Punkte mit Nutzen.
  Umgesetzt: Anlauf 5, Schwung 6 (Profil aufräumen und Vorlagen von Anlauf
  hierher, 15 Minuten Abstimmung), Vollgas 7 Punkte (Logo-Clip, Stories,
  Antworten auf Kommentare und Nachrichten, kurzfristige Beiträge,
  Quartalsrückblick mit Themenplan, 30 Minuten). Ablauf neu: Grundcheck,
  Strategie gemeinsam, jeden Monat.
  Adrian: Punkte passen als Entwurf. Kanäle: Instagram und Facebook, TikTok
  oder YouTube auf Wunsch (Frage auf der Seite angepasst). Menü: «Variante
  B, nach Bereichen», im Entwurf bleibt Social Media nach Bereiche
  (Rückfrage, weil B im Bild nach Arbeiten stand). Preise: Konkurrenz
  erhoben in `quellen/recherche-social-media-preise-2026-11.md`, Vorschlag
  im Chat, Entscheid bei Adrian.
  Adrian: Kommentare und Nachrichten beantworten bietet er nicht an (frisst
  zu viel Zeit, ständig am Handy); aus Vollgas gestrichen, auf der Seite als
  Frage «Beantwortest du auch Kommentare und Nachrichten?» mit «Nein, das
  bleibt bei dir». Zeit: ein kurzer Motion-Clip mit Logo, 8 bis 15 Sekunden,
  braucht mit Korrekturschlaufe höchstens 30 Minuten (Adrian), mit Rezepten
  und Vorlagen pro Kunde. Neue Zeitrechnung und Preisvorschlag im Chat.
- [ ] **ENT-080** · 04.11.2026 · Preise Social Media nach drei Monaten oder
  drei Kunden prüfen: gemessene Stunden pro Stufe aus dem Projekt-Timer
  (ENT-046), Wahl der Kunden, Rückmeldungen. Danach Preise für neue Kunden
  anpassen. Gehört zu ENT-079.
  Preise festgelegt (Adrian, 04.11.2026): **Anlauf CHF 450, Schwung CHF
  850, Vollgas CHF 1'550 pro Monat**, keine Einrichtungsgebühr. Vollgas mit
  siebtem Punkt «Jedes Quartal ein längerer Clip, 20 bis 30 Sekunden, auch
  als Werbung nutzbar». In Seite und Rechner (Entwurf) eingesetzt. Offen:
  Grundcheck einzeln (Adrian fragt CHF 99?), Rabatt beim Dazubuchen.
  Recherche zum Grundcheck in `quellen/recherche-social-media-preise-2026-11.md`.
  Grundcheck einzeln (Adrian: «290.- angerechnet einverstanden»): einmalig
  CHF 290, angerechnet bei einer Stufe innert 30 Tagen. Inhalt nach
  Vorschlag: Profil, erster Eindruck, Rhythmus, stärkste Beiträge, passt
  zu Logo und Website, zwei, drei Mitbewerber, drei Sofortmassnahmen,
  30 Minuten Strategie gemeinsam, Ergebnis auf einem Blatt. Auf der Seite
  unter den Karten und als Frage. Rabatt: Modell im Chat, Entscheid offen.
  Rabatte (Adrian: «beide so einbauen»): (1) fest: mit Website, Branding
  oder Video kosten die ersten drei Monate Social Media 20 % weniger
  (Anlauf 360, Schwung 680, Vollgas 1'240); (2) Pilotpreis: erste drei
  Kunden, erster Monat zum halben Preis, dafür Arbeit als Beispiel. Rabatte
  zählen nicht zusammen, es gilt der höhere. Seite und Rechner (Entwurf):
  mit Projekt «die ersten 3 Monate CHF 680, danach CHF 850», ohne Projekt
  der Pilotpreis. Geprüft lokal mit Playwright, ohne Skriptfehler.
- [ ] **ENT-081** · 04.11.2026 · Pilotpreis Social Media (ENT-079) von der
  Seite und aus dem Rechner nehmen, sobald drei Kunden ihn genutzt haben.
  Stellen: `social-media.html` (Hinweis `.pilot` über den Karten),
  Kostenrechner (Text im Monatskasten und in der Anfrage). Geht live nur mit
  Adrians Wort.
  Zu ENT-079, 04.11.2026: Abschnitt «Warum» (64 % / 48 %) bringt laut Adrian
  keinen Mehrwert; statt dessen eine **visuelle Roadmap** im Zickzack mit
  drei Stationen und Motion im Handy: Grundcheck als Scanner, Strategie als
  Plan, der entsteht, Ergebnis mit Wisch vorher/nachher und Beiträgen, die
  ins Raster fallen. Die Zahlen bleiben als dezenter Vermerk mit Quelle,
  die KI-Zeile unter dem Ablauf fällt weg. Beispielprofil: Adrian schlägt
  eine Bäckerei vor (Video in einer anderen Sitzung), Rückfrage offen. Belegte Zahl für
  die Seite: JAMES-Studie 2024 (ZHAW, Swisscom), 83 % der Jugendlichen mit
  sozialen Netzwerken sind mindestens mehrmals pro Woche auf Instagram,
  Facebook 4 % (Abb. 42). Danach Entwurf als Bild, live erst mit Adrians Wort.
  Zu ENT-079, 04.11.2026: Roadmap im Entwurf gebaut. Beispiel ist die
  erfundene Bäckerei **Aarbach** aus Folge 5 (formateins-reels, Zweig
  claude/optimistic-bell-73jt25, Namensprüfung dort vom 4.11.2026). Bilder
  von dort übernommen, keine neuen Higgsfield-Bilder nötig (0 Credits): Profil
  vorher (Raster-b, Canva-Posts) und nachher (Spot-Bilder, Fassade, Torte,
  Sauerteig, Cappuccino, Tartelettes), als entwurf-sm-*.webp verkleinert.
  Profile in HTML nachgebaut, **ohne Zahlen** für Beiträge und Follower
  (Adrian: Zahlen weglassen, keine erfundene Wirkung). 01 Scanner mit vier
  Markierungen, 02 Plan mit Logo alt/neu (Vermerk: neues Logo eigener
  Auftrag), Themen, Monatsplan, 03 Wisch vorher/nachher zum Ziehen, danach
  fallen neun Beiträge ins Raster. Linie zeichnet sich beim Scrollen, auf dem
  Handy senkrecht; reduzierte Bewegung zeigt den Endzustand. IGEM-Zahlen als
  Fussnote ¹ im Hero, KI offen im Satz unter der Roadmap.
  Zu ENT-079, 04.11.2026 (Adrian): Desktop umgedreht, 01 mit Handy links und
  Text rechts, Text mittig neben dem Bild, damit kein langer gerader Strich
  am Anfang steht. Linie im Stil des Pfeils «Selbst ausprobieren» der
  Vorschlagsseiten (durchgezogen, 2,6 px, runde Enden, offene Spitze vor
  jedem Punkt), ohne gepunktete Spur. Linie liegt über den Schatten.
  Zu ENT-079, 04.11.2026 (Adrian: exakter arbeiten): Logos als SVG, Schrift
  bleibt im Ring. Linie endet und beginnt mit 10 px Abstand zum Ring (Fehler
  war das Hochgleiten der Stationen beim Messen, Gleiten entfernt). Scan
  deutlicher: Strahl mit Spur, ungescannte Fläche grau, Rahmen mit Ecken wie
  beim Reel der Startseite, Zähler «Grundcheck · 3 von 3 Punkten». Drei
  Befunde statt vier. Zur Wahl: aussen als Beschriftung mit Pfeil wie auf der
  Startseite (Vorschlag, ab 1100 px) oder als Etikett im Handy (?befund=innen).
  Zu ENT-079, 04.11.2026 (Adrian): Variante aussen, ohne Rahmen und Ecken
  ums Handy. Links eine «Auswertung» mit Massnahmen statt Befunden, Fassung A:
  «Profiltext schärfen.», «Bilder statt Textplakate.», «Ein Look für den
  ganzen Feed.» Logo wird nicht erwähnt (es geht um Social Media), erste
  Fundstelle nur der Profiltext. Scan startet erst, wenn das Handy zu 70 %
  sichtbar ist, plus 0,9 s. Zähler «Auswertung · 3 Punkte».
  Zu ENT-079, 04.11.2026 (Adrian): Zähler unter dem Handy entfernt. Scan
  läuft neu, wenn das Handy wieder ganz unterhalb des Bildschirms war
  (hinaufgescrollt). Aktive Punkte 01–03 pulsieren wie der aktive Punkt im
  Kostenrechner (punktpuls).
  Zu ENT-079, 04.11.2026 (Adrian): Linie folgt dem Scrollen in beide
  Richtungen, zieht sich beim Hinaufscrollen zurück, Spitzen verschwinden
  mit. Ein Punkt pulsiert nur, solange die Linie ihn erreicht hat.
  Zu ENT-079, 04.11.2026 (Adrian): Station 02 ohne Erscheinungsbild (eigener
  Bereich). Plan entsteht wie ein Briefing (Variante 1): «Wen erreichen?»
  (Familien im Quartier, Pendler am Morgen, Firmen für Apéros), «Was zeigen?»
  als Ring (Ware 40 %, Backstube 30 %, Team 20 %, Anlässe 10 %), «Was bleibt
  hängen?» getippt («Handwerk seit 1952, jeden Morgen frisch.»), dann fliegen
  4 Beiträge und 4 Stories aus ihrem Thema in den Monatsplan, Rahmen in der
  Themenfarbe. Werte erfunden fürs Beispiel. Text daneben angepasst.
  Zu ENT-079, 04.11.2026 (Adrian): Linie 02→03 lief vor, weil der getippte
  Satz umbrach und die Seite danach 24 px tiefer stand. Satz reserviert jetzt
  seinen Platz, Linie rechnet sich bei jeder Höhenänderung neu
  (ResizeObserver), jedes Stück wächst gleichmässig mit dem Scrollen, auch der
  waagrechte Schwung. Profil nachher mit Story-Highlights als Icons (Gipfeli,
  Torten, Brot, Backstube, Laden) in Dunkel und Messing, Profilbild mit
  feinem Messingring.
  Zu ENT-079, 04.11.2026 (Adrian): Satz unter der Roadmap «Die Bäckerei
  Aarbach und ihre Bilder habe ich mit KI erstellt …» entfernt. Dass die
  Bäckerei erfunden ist, steht weiter im Satz über der Roadmap.
  Zu ENT-079, 04.11.2026 (Adrian): Notiz unter den Karten (Einrichtung,
  Grundcheck, WhatsApp, Drehtag, Mehrwertsteuer) aufgelöst und in die Fragen
  verteilt: neu «Gibt es eine Einrichtungsgebühr?» und «Kommt noch
  Mehrwertsteuer dazu?», WhatsApp und Drehtag in den bestehenden Antworten,
  Grundcheck für CHF 290 stand schon in den Fragen.
  Zu ENT-079, 04.11.2026 (Adrian): Scan startet früher (Handy zu 40 %
  sichtbar, 0,3 s). Pfeile der Auswertung gleichmässig in den Dritteln der
  Handyhöhe. 02 läuft schneller (Satz ab 1,9 s, Flüge 0,55 s) und neu, wenn
  man über die Station hinaufgescrollt hat, wie der Scan. Profilbild nachher:
  goldenes Gipfeli auf dunklem Grund statt Schriftzug AARBACH.
  Zu ENT-079, 04.11.2026 (Adrian): Profilbild wie das alte Logo aufgebaut,
  goldenes Gipfeli über dem Schriftzug AARBACH. Linie 02→03 stand immer schon
  da: Chrome beginnt das Strichmuster bei jedem Teilstück eines Pfads neu, das
  zweite Stück war darum immer ganz gezeichnet. Jetzt ein Pfad pro Stück.
  Schwung: senkrecht nur neben dem Text, darunter weiter Bogen über die Mitte.
  Zu ENT-079, 04.11.2026 (Adrian): Profilbild nachher aufgebaut wie das alte
  Logo, aber in Dunkel und Messing: gezeichnete Brezel (ein Strang, Arme
  gekreuzt, Enden auf dem Bauch) über «Aarbach» in Playfair kursiv, darunter
  «BÄCKEREI · KONDITOREI» in gesperrten Versalien.
  Danach (Adrian): untere Zeile weg, «Aarbach» grösser, Brezel und Schriftzug
  etwas tiefer gesetzt.
  Zu ENT-079, 04.11.2026 (Adrian): Reel im Hero auf video-reel-voll-ton
  umgestellt. video-reel-ton ist für das Telefon im Stand der Startseite
  (schneidet links und rechts je 9 % ab) und zeigt das Erklärvideo verkleinert
  mit Rand; das Handy hier zeigt das ganze 9:16.
  Zu ENT-079, 05.11.2026 (Adrian): 03 wischt wie 01 und 02 neu, wenn man
  hinauf- und wieder hinunterscrollt (Handy ganz unterhalb des Bildschirms:
  zurück auf «vorher»). Der Griff bleibt am Ende sichtbar stehen, der Kreis
  rückt am Rand nach innen, damit er ganz im Bild bleibt.

- [x] **ENT-082** · 04.11.2026 · Videos (Scroll, Vorschau) nur auf Adrians
  Wort rendern, sie verbrennen Tokens. Prüfen per Standbild oder im Code.
  Festgehalten in CLAUDE.md, Abschnitt «Aenderungen zuerst zeigen».

- [x] **ENT-083** · 04.11.2026 · Startseite, Stand «Video»: Im Reel füllt das
  Erklärvideo jetzt das Telefon (Adrian wählt A: Telefon bleibt 1:2.164, Reel
  neu gerechnet). `video-reel-ton` und `video-reel-ohne-titel-ton` (mp4,
  webm): Teil 4,5–8 s aus der Fassung ohne Titel auf volle Höhe geschnitten
  (450 × 800 ab 45/80 auf 540 × 960) und um 50 px nach rechts gesetzt, damit
  «Natur / Burgen / Küste» im sichtbaren Ausschnitt (x 48–492) stehen; rechts
  schneidet das Telefon dafür Teile der Bildchen ab. In der Fassung mit Titel
  «Beispiel Erklärvideo» neu mit `titel.html` (Zweig
  claude/pensive-albattani-870hom) an derselben Stelle wie die anderen Titel.
  Ton und die anderen drei Teile unverändert übernommen (neu kodiert, H.264
  440 kbit/s, VP9 500 kbit/s). Auf Adrians Wort («passt, auf main pushen») live am 04.11.2026, Commit 75221ff, Lauf «Website zu Hostpoint» Nr. 79 erfolgreich.

- [ ] **ENT-084** · 05.11.2026 · Social Media im Betreiber-Bereich, Bereich
  «Preise» (Adrian: «mit denselben Kriterien und demselben Layout»). Neu in
  `preise.js` der Block `social` (Monatspreise Anlauf 450, Schwung 850,
  Vollgas 1'550, Grundcheck 290, mit Projekt × 0.8 für 3 Monate, Pilotpreis
  × 0.5 für den ersten Monat, 1 = aus); der Entwurf des Kostenrechners liest
  ihn statt fester Zahlen. Betreiber (formateins-betreiber, Zweig
  claude/eager-thompson-m9sxgm): vierte Richtung «Social Media» im Rechner
  mit eigenem Teil «Jeden Monat» (kein Rahmen, kein Kombirabatt, keine
  Eile), Frage zum Pilotpreis, Ansätze-Gruppe Social Media, drei neue
  Regeln, «Als Offerte übernehmen» mit Einheit Monat und Rabatt auf den
  ersten Monaten, Leistungen S-01 bis S-03 und S-11 (fehlende lassen sich im
  Abgleich anlegen), feste Zahlen auf `social-media.html` beim Schalten
  (Karten, Rabatt, Grundcheck, Pilotpreis als Wort). Fehlt
  `social-media.html` auf main, überspringt das Schalten sie. Ein
  gespeicherter Stand ohne die neuen Schlüssel wird ergänzt. Prüfungen grün
  (`pruefungen/alle.sh` mit Testdatenbank). Live erst mit dem Livegang von
  ENT-079 und Adrians Wort: zuerst formateins (preise.js mit `social`,
  `social-media.html`), danach der Betreiber.
  Zu ENT-079/084, 05.11.2026 (Adrian: Menü nach «Bereiche» ja, Link im
  Video-Stand ja, Preisseite Karte und Vermerk, eigenes Vorschaubild; «bau es
  auf der Vorschau»): Livegang auf dem Arbeitszweig gebaut, noch nicht auf
  main. `social-media.html` aus dem Entwurf (ohne noindex, Angebot mit
  Monatspreisen und FAQ-Daten für Suchmaschinen, eigenes Vorschaubild
  `teilen-social-media.jpg`, aus der Seite gerendert, keine Credits), Bilder
  als `sm-*.webp`, `kostenrechner.html` mit dem Zweig Social Media,
  Entwürfe entfernt. Menüpunkt «Social Media» nach «Bereiche» auf allen
  Seiten mit Menü, Leiste: Handy-Menü schon unter 840 Pixel, Einträge ohne
  Umbruch. Startseite: «Content für Social Media» führt auf `/social-media`,
  Fussliste mit Link. `preise.html`: vierte Karte Social Media (zwei mal
  zwei) und Zeile unter den Paketen; dabei behoben, dass die Paketkarten
  zwischen 900 und 980 Pixel seitwärts scrollten (schon vorher so, jetzt
  einspaltig bis 980). `anfrage.php`: Social-Media-Fragen und Richtung in
  Mail und Bestätigung, Rahmen mit Monatspreis bis 160 Zeichen, «Dein
  Monatspreis» ohne Projekt. `sitemap.xml`, `llms.txt` (Preise Social
  Media, Stand 05.11.2026), `quellen/faq-daten.py` kennt die Seite.
  Betreiber: Stellen auch auf `preise.html` (Karte, Zeile) und in
  `llms.txt`, Angebot für Suchmaschinen; Grundcheck in Frage und FAQ-Daten
  beide (Option «alle»). Geprüft: Menü 700 bis 1440 Pixel ohne Umbruch und
  ohne seitliches Scrollen auf sechs Seiten, keine 404 und keine
  Skriptfehler, `pruefungen/alle.sh` grün mit 108 Stellen.
  Zu ENT-079, 05.11.2026 (Adrian: die Zeile unter den Paketen wirkt wie ein
  Nachtrag, Varianten A/B/C, gewählt A): `preise.html` unter den Paketen der
  Block «Hol dir den Social-Media-Boost.» mit Abzeichen «Dazu buchbar», ab
  CHF 450 pro Monat und Knopf «Social Media ansehen». Betreiber-Stelle «ab»
  auf den Block umgestellt.
  Zu ENT-079, 05.11.2026 (Adrian): `preise.html` hatte keinen Fuss,
  `social-media.html` einen kleineren. Beide jetzt mit dem Fuss der
  Startseite (Leistungen mit Preise, Social Media, Kostenrechner, Was kostet
  eine Website?; Kontakt mit Symbolen), die aktuelle Seite orange.
  Beschreibung im Fuss der Startseite mit Social Media.

- [x] **ENT-085** · 05.11.2026 · Rabatte nur bei gleichzeitiger Buchung
  (Adrian): Kombirabatt der Pakete und Rabatt mit Projekt bei Social Media
  gelten nicht, wenn später etwas dazugebucht wird; dann gilt der
  Einzelpreis. Steht im neuen FAQ der Preisseite (fünf Fragen: Rahmen,
  Mehrwertsteuer, Bezahlung in Etappen, Kosten nach dem Livegang, Rabatt
  später; Antworten aus bestehenden Texten, FAQ-Daten mit
  `quellen/faq-daten.py`) und in `llms.txt`. Auf der Vorschau, live mit
  ENT-079.
  Zu ENT-079/084/085, 05.11.2026: Adrian «auf main pushen». Arbeitszweig als
  ein Commit auf main gelegt (der Zweig enthielt ENT-083 schon, die
  Geschichte bleibt auf claude/eager-thompson-m9sxgm). Lauf und Seite siehe
  Nachtrag.
  Nachtrag 05.11.2026: main 90fed79, Lauf «Website zu Hostpoint» Nr. 81
  erfolgreich. Geprüft auf www.formateins.ch: /social-media 200 ohne noindex,
  Preisseite mit Karte, Boost und FAQ, preise.js mit Block social,
  Vorschaubild und sm-Bilder 200, /entwurf-social-media 404. Betreiber noch
  nicht auf main (Freigabe in der Sitzung blockiert, Adrian entscheidet).
  Zu ENT-079, 05.11.2026 (Adrian, Variante B): Einträge in den Kästen der
  drei Reiter auf der Startseite (Formate, Was du bekommst) mit rundem Pfeil
  rechts, beim Darüberfahren orange gefüllt; zeigt, dass eine Seite dahinter
  liegt. Bei Webdesign nicht, dort steht schon «Was sie kostet →».
- [x] **ENT-086** · 06.11.2026 · Search Console, Videoindexierung: «Das Video
  befindet sich nicht auf einer Wiedergabeseite» für `video-spot.mp4` auf der
  Startseite (erstmals erkannt 29.10.2026). Die Videos sind Kacheln, nie der
  Hauptinhalt; eine eigene Wiedergabeseite hat Adrian nicht gewählt. Lösung:
  `htaccess-hostpoint` setzt für alle `.mp4` und `.webm` den Kopf
  `X-Robots-Tag: noindex`. Die Seiten bleiben im Index, nur die Videodateien
  nicht. Auf Arbeitszweig `claude/sharp-faraday-t6rehp`, noch nicht live.
  Offen: Livegang auf Adrians Wort, danach Kopf auf www.formateins.ch prüfen
  und in der Search Console «Fehlerbehebung überprüfen» starten.
  Nachtrag 06.11.2026: Adrian «auf main pushen». main 70ffff0, Lauf «Website
  zu Hostpoint» Nr. 83 erfolgreich. Geprüft auf www.formateins.ch:
  `video-spot.mp4` und `.webm` mit `x-robots-tag: noindex` (auch bei
  Teilabruf 206), Startseite und `video-spot.webp` ohne. Bleibt bei Adrian:
  «Fehlerbehebung überprüfen» in der Search Console.
- [x] **ENT-087** · 06.11.2026 · guardops.ch hat ein eigenes privates
  Repository `formateins-guardops` und wird nicht mehr aus der Software von
  GuardOpS ausgeliefert. Verlauf übernommen, Seite als reines HTML mit einem
  PHP-Endpunkt für die Terminbuchung, Deploy «guardops.ch zu Hostpoint» bei
  jedem Push auf `main`. Entscheide zur Webseite kommen ab jetzt hier ins
  Logbuch, Entscheide zur Software bleiben bei GuardOpS (Adrian, 06.11.2026).
  Beleg: formateins-guardops `82d1ef4`, Lauf Nr. 4 erfolgreich; in der
  Software der Upload nach guardops.ch entfernt, Lauf Nr. 759 erfolgreich.
  Geprüft auf guardops.ch: alle neun Seiten 200 am Handy und am Desktop,
  Schriften und Bilder geladen, keine Skriptfehler.
  Dazu am selben Tag: die Abgleichsdatei des Deploys über die Webseite
  gesperrt (`c8d15ab`, Lauf Nr. 6, 403 geprüft); die Kalenderadresse der
  Terminbuchung korrigiert, sie zeigte nicht auf den Kalenderserver von
  Hostpoint (Lauf Nr. 10, Buchung und Absage von Adrian getestet); alte
  Zugangsdaten und der einmalige Übertragungs-Token gelöscht.
  Offen: `datenschutz-demo.html` beschreibt eine abgeschaltete
  Demo-Umgebung, klären ob sie bleibt.

- [x] **ENT-088** · 05.11.2026 · Akquise, Türöffner (zuerst als ENT-084, dann
  als ENT-086, dann als ENT-087 vergeben): Gesamtcheck auf der Vorschlagsseite (geschenkt, ohne
  E-Mail-Adresse) und «Startseite zuerst» als erster bezahlter Schritt
  (Vorschlag CHF 1'200, voll an die Website angerechnet, sehen vor dem
  Zahlen). Ausgearbeitet in formateins-akquise `akquise/tueroeffner.md`.
  Entschieden mit ENT-094.

- [x] **ENT-089** · 05.11.2026 · Akquise, Ton im Gesamtcheck (Adrian; zuerst
  als ENT-085, dann als ENT-087, dann als ENT-088 vergeben): Auf der Vorschlagsseite wird ehrlich
  bewertet, mit Rot, wo es rot ist («im Business, nicht am
  Kindergeburtstag»). Bedingung: fair, also nur Gemessenes mit Datum und
  Werkzeug, feste Grenzen für alle Betriebe, Stärken sichtbar, sachliche
  Sätze. Ausnahme zu «Helfen statt mahnen» (04.11.2026), das für Brief und
  übrige Texte weiter gilt. Darstellung «Eine ehrliche Bewertung» (Ring oben
  rechts, Balken rot bis grün). Beleg: formateins-akquise
  `akquise/tueroeffner.md`, `.agents/product-marketing.md` v1.1,
  `vorschlag/src/vorschlag/Gesamtcheck.astro`.

- [x] **ENT-090** · 05.11.2026 · Akquise, «Was ich geändert habe» (Adrian;
  zuerst als ENT-086, dann als ENT-088, dann als ENT-089 vergeben): am Computer unter dem
  Schieber heute/Vorschlag der Vorschlag als Handy mit geschwungenen
  Handpfeilen; am Handy der Schieber mit Nummern auf dem Vorschlag, Griff bei
  18 %, Liste darunter. Nahaufnahmen fallen weg. Gerüst
  `stil.aenderungen = "handy"`, zuerst bei AMMANN. Ohne style-Attribute (CSP
  der Seite), die Auslieferung prüft darauf. Live:
  vorschlag.formateins.ch/amm-sd4vai9d/ (Läufe «Vorschlag zu Hostpoint» #112, #113).

- [x] **ENT-091** · 05.11.2026 · Akquise, Starthilfe Social Media (Adrian;
  zuerst als ENT-089, dann als ENT-090 vergeben): Der Knopf unter «Keine Zeit für Social
  Media?» führt neu auf `formateins.ch/social-media` statt auf WhatsApp,
  Beschriftung «Mehr zu Social Media». Gilt für Z&H, AMMANN, PUR. Noch nicht
  ausgeliefert.

- [x] **ENT-092** · 06.11.2026 · Akquise, Gesamtcheck (Adrian, ändert die
  Zeile «Ihr Ruf» aus ENT-089; zuerst als ENT-090, dann als ENT-091 vergeben): Ein Fremder
  bewertet nicht den Ruf einer Firma. Die Zeile heisst «Google-Bewertungen»,
  nennt nur, was Google zeigt, und ob man es auf der Startseite sieht; sie
  steht bei den Google-Punkten. Note unverändert. Noch nicht ausgeliefert.

- [x] **ENT-093** · 06.11.2026 · (zuerst als ENT-092 vergeben) Akquise, Gesamtcheck mit zweiter Note
  (Adrian: «übernehmen, vor den Preis setzen»): Neben «heute» steht die Note
  «mit dem Vorschlag», gemessen am Entwurf mit denselben Werkzeugen und
  derselben Regel (AMMANN: heute 3,5, mit Vorschlag 9,5; der Suchplatz zählt
  wie heute, weil er erst online messbar ist). Auf jedem Balken ein zweiter,
  hohler Punkt. Die Bewertung steht neu direkt vor dem Preis. Entwürfe haben
  eine Beschreibung für Suchmaschinen. Vor dem Ausliefern eine Kopie der
  alten Seite gesichert: formateins-akquise
  `akquise/betriebe/09-ammann-oberentfelden/archiv/vorschlag-vor-update-2026-11-05/`
  (Bilder, Neubau über Commit 16485c8). Ausgeliefert mit ENT-091 und ENT-092.

- [x] **ENT-094** · 06.11.2026 · (zuerst als ENT-093 vergeben) Akquise, Entscheide zum Türöffner (Adrian,
  «1–7 wie empfohlen», schliesst ENT-088): «Startseite zuerst» CHF 1'200,
  nach dem Livegang; wer die fertige Seite nicht will, zahlt nichts;
  Anrechnung während 12 Monaten; nur technischer Fall A oder B, bei C oder
  unklar ohne den Block. AMMANN ist Fall C (Nameserver und Hosting bei der
  Agentur), Block darum weg. Grenzen der Bewertung übernommen. Die Bewertung
  wird beim Frisch-Check neu gemessen (Prüfliste im Skill `akquise-brief`).
  Zusammenführen auf `main` später. Beleg: formateins-akquise
  `akquise/tueroeffner.md`, `.agents/product-marketing.md` v1.2.
- [x] **ENT-095** · 06.11.2026 · (zuerst als ENT-094 vergeben) Akquise, Vorschlagsseite Schritt für Schritt
  (Adrian): Augenbraue oben neu «<Kurzname> · Vorschlag vom <Datum>» statt
  «Ihre neue Startseite» («neue» nimmt den Entscheid vorweg, der Titel sagt
  schon «mein Vorschlag»). Neues Feld `vorschlag.datum` in `daten.json`, beim
  Versand aufs Briefdatum setzen; ohne Feld bleibt der alte Text. Zuerst bei
  AMMANN. Ausgeliefert mit ENT-099. Beleg: formateins-akquise
  `vorschlag/src/vorschlag/Vorschlag.astro`.
- [x] **ENT-096** · 06.11.2026 · (zuerst als ENT-095 vergeben) Akquise, Vorschlagsseite Schritt für Schritt
  (Adrian, Fassung A): Einleitung unter dem Titel als kurzes Willkommen,
  «Schön, dass Sie reinschauen. Auf dieser Seite sehen Sie, was ich an Ihrer
  Startseite ändern würde und was es bringt.» Der Brief hat schon vorgestellt,
  die Seite muss nicht mehr erklären. Zuerst bei AMMANN. Ausgeliefert mit ENT-099.
  Beleg: formateins-akquise `akquise/betriebe/09-ammann-oberentfelden/daten.json`.
- [x] **ENT-097** · 06.11.2026 · (zuerst als ENT-096 vergeben) Akquise, Vorschlagsseite Schritt für Schritt
  (Adrian, Fassung A): Knopf unter den Geräten «Den Vorschlag ansehen» statt
  «Den Entwurf ansehen», damit oben überall dasselbe Wort steht. Gilt für alle
  Seiten mit Knopf (AMMANN, Z&H, Zulliger, PUR). Ausgeliefert mit ENT-099. Beleg:
  formateins-akquise `vorschlag/src/vorschlag/Vorschlag.astro`.
- [x] **ENT-098** · 06.11.2026 · (zuerst als ENT-097 vergeben) Akquise, Vorschlagsseite Schritt für Schritt
  (Adrian, Fassung A): Vergleich am Computer mit Augenbraue «Am Computer»
  (Paar mit «Am Handy»), Text nur noch «Ziehen Sie den Griff nach links oder
  rechts.», Bildunterschrift bei AMMANN «Ihre Startseite am 2. November 2026.»
  ohne Pixelangabe. Augenbraue und Text gelten für alle Seiten mit Schieber
  oben. Das Video erscheint bei AMMANN nicht (ohne Video ausgeblendet); die
  Briefvorlage verspricht es noch, beim Schritt Brief neu fassen. Offen:
  ausliefern. Beleg: formateins-akquise `vorschlag/src/vorschlag/Vergleich.astro`.
- [x] **ENT-099** · 06.11.2026 · (zuerst als ENT-098 vergeben) Akquise, Vorschlagsseite Schritt für Schritt
  (Adrian, Fassung B, «dann live»): Abschnitt «Am Handy» mit Titel «Ihre
  Startseite, heute und im Vorschlag.» und Text «Die Nummern zeigen, was ich
  geändert habe. Ziehen Sie den Griff, um Ihre heutige Seite zu sehen.» Datum
  in der Augenbraue kurz (05.11.2026), damit es am Handy auf eine Zeile passt.
  Ausgeliefert zusammen mit ENT-095 bis 097 (Lauf «Vorschlag zu Hostpoint»).
  Beleg: formateins-akquise `vorschlag/src/vorschlag/Vergleich.astro`.
- [x] **ENT-100** · 06.11.2026 · (zuerst als ENT-099 vergeben) Akquise, Vorschlagsseite, Handpfeile bei «Was
  ich geändert habe» (Adrian: alle gleich geschwungen, Spitzen unsauber): jede
  Form anders (Bogen von oben, S, Bogen von unten; pro Punkt `handy_form`),
  letzte 40 px fast gerade, Spitze mit zwei ungleichen Haken entlang der Linie,
  mit Ring endet der Pfeil am Rand des Rings (Pfeil 1 zeigte vorher aufs Menü).
  Variante A gebaut, B (Schlaufe) gezeigt; Adrian wählt A. Ausgeliefert mit
  Lauf «Vorschlag zu Hostpoint» Nr. 117, live geprüft.
  Beleg: formateins-akquise `vorschlag/src/vorschlag/HandyAenderungen.astro`.
- [x] **ENT-101** · 06.11.2026 · Akquise, Vorschlagsseite Schritt für Schritt
  (Adrian): unter dem Vergleich «Fragen zum Vorschlag? Rufen Sie an oder
  schreiben Sie mir auf WhatsApp.» (vorher «schreiben Sie auf WhatsApp»).
  Gilt für alle Seiten. Ausgeliefert mit ENT-102. Beleg: formateins-akquise
  `vorschlag/src/vorschlag/Vorschlag.astro`.
- [x] **ENT-102** · 06.11.2026 · Akquise, Vorschlagsseite Schritt für Schritt
  (Adrian: wirkte wie ein hineingestampfter Werbeblock; Fassung C, Satz 1):
  Social Media als Teil des Auftritts. Augenbraue «Ihr Auftritt», Titel «Ihre
  Website zeigt, was Sie können. Social Media zeigt, dass Sie es jeden Tag
  tun.», Text «Wer regelmässig zeigt, was er baut, bleibt im Kopf. Dafür
  braucht ein Kanal Pflege, nicht nur einen guten Start. Damit der Start
  leicht fällt: Ihr Logo als kurzer Film, geschenkt.», unten «Keine Zeit
  dafür? Ich betreue Ihren Kanal und sorge dafür, dass jeden Monat etwas Neues
  kommt.» Keine Zahlen zu Film und Followern. Zuerst bei AMMANN, ausgeliefert
  (Lauf «Vorschlag zu Hostpoint»). Beleg: formateins-akquise
  `akquise/betriebe/09-ammann-oberentfelden/daten.json`.
- [x] **ENT-103** · 06.11.2026 · Akquise, Vorschlagsseite Schritt für Schritt
  (Adrian, Mischung aus A und B): Satz unter Social Media «Keine Zeit zwischen
  zwei Aufträgen? Ich betreue Ihre Kanäle, damit Sie auch in den sozialen
  Medien gesehen werden.» (ändert den Satz unten aus ENT-102). Zuerst bei
  AMMANN. Ausgeliefert mit ENT-104. Beleg: formateins-akquise
  `akquise/betriebe/09-ammann-oberentfelden/daten.json`.
- [x] **ENT-104** · 06.11.2026 · Akquise, Vorschlagsseite Schritt für Schritt
  (Adrian, Fassung A): «Wer das macht» persönlich statt Leistungsliste (die
  steht im Brief): «Meine Stärke ist die Gestaltung. Ich weiss, wie ein
  Auftritt online heute wirken muss, und habe das Bild im Kopf, bevor er
  gebaut ist. Der Vorschlag oben ist meine Idee. Gebaut wird Ihre: Zuerst
  höre ich zu, dann legen wir gemeinsam fest, wohin es geht.» Auftritt statt
  nur Website; der Kunde und seine Vorstellung im Zentrum, nicht «visionär»
  als Selbstbezeichnung. Satz zur Nähe (`vorschlag.naehe`) dort entfallen.
  Gilt für alle Seiten. Auf der ganzen Seite weiter vermitteln, dass gemeinsam
  erarbeitet wird (Preis, Fragen, Schluss). Ausgeliefert (Lauf «Vorschlag zu
  Hostpoint»). Beleg: formateins-akquise `vorschlag/src/vorschlag/Vorschlag.astro`.
- [ ] **ENT-105** · 06.11.2026 · Schreibstil (Adrian: «typisch KI
  geschreibe»): In Texten an Kunden kein Doppelpunkt und kein Gedankenstrich
  als Satzzeichen, Spannen mit «bis». Erlaubt bleiben Uhrzeit, 9:16 und
  Bindestriche in Wörtern. Festgehalten in `CLAUDE.md` (Schreibstil) und in
  formateins-akquise `CLAUDE.md`, `.claude/skills/HAUSREGELN.md`,
  `.agents/product-marketing.md` v1.3. Sofort korrigiert «Gebaut wird Ihre.»
  in «Wer das macht». Dazu neun Stellen bei AMMANN (Vorschlagsseite und
  Entwurf) ohne «:» und «–», ausgeliefert mit Lauf «Vorschlag zu Hostpoint»
  Nr. 120, live geprüft. Offen: eigene Texte von Weidmann, Z&H, Zulliger und
  PUR (zusammen 9 Stellen), Öffnungszeiten «Mo–Fr 07:00–12:00» im Entwurf,
  `CLAUDE.md` hier auf `main` (Adrians Wort).
- [x] **ENT-106** · 06.11.2026 · Akquise, Vorschlagsseite Schritt für Schritt
  (Adrian): Knopf «Mehr zu Social Media» unter dem Satz statt daneben, orange
  statt weiss umrandet (er führt zum eigentlichen Angebot, der Betreuung). Gilt
  für alle Seiten mit Starthilfe. Ausgeliefert mit Lauf «Vorschlag zu
  Hostpoint» Nr. 121, live geprüft. Beleg: formateins-akquise
  `vorschlag/src/vorschlag/Vorschlag.astro`, `vorschlag.css`.
- [x] **ENT-107** · 06.11.2026 · Akquise, Gesamtcheck (Adrian: Pfeil
  unsauber, fünf Zeilen Kleingedrucktes wirken untransparent): Pfeil zwischen
  den Noten neu, Spitze entlang der Linie. Statt Fusstext «Wie ich gemessen
  habe» zum Aufklappen, zugeklappt, vier kurze Punkte in normaler Schrift
  (Feld `wie`; ohne Feld ein Satz `fuss_kurz`). Ausgeliefert mit Lauf
  «Vorschlag zu Hostpoint» Nr. 122, live geprüft. Beleg: formateins-akquise
  `vorschlag/src/vorschlag/Gesamtcheck.astro`.
- [x] **ENT-108** · 06.11.2026 · Akquise, Vorschlagsseite (Adrian: «etwas
  viel Padding»): Abstand zwischen Bewertung und «Was es kostet» kleiner, am
  Computer 156 statt 204 px. Ausgeliefert mit ENT-109.
- [x] **ENT-109** · 06.11.2026 · Akquise, «Startseite zuerst» auch bei
  technischem Fall C (Adrian, ändert Punkt 5 aus ENT-094): Block erscheint mit
  dem Hinweis «Für die Umstellung braucht es den Zugang zu Ihrer Domain. Das
  klären wir im Gespräch.» (Agentur nicht erwähnt). Bei AMMANN wieder drin,
  erster Punkt neu «Wir machen den Vorschlag gemeinsam zu Ihrer Startseite.»,
  Anrechnung «während 12 Monaten» auch in den Fragen. Nachgeführt in
  `akquise/tueroeffner.md`, Skill `akquise-brief` (Prüfliste),
  `.agents/product-marketing.md` v1.4, README AMMANN. Ausgeliefert mit Lauf
  «Vorschlag zu Hostpoint» Nr. 123, live geprüft. Beleg: formateins-akquise
  `akquise/betriebe/09-ammann-oberentfelden/daten.json`.
- [x] **ENT-110** · 06.11.2026 · Akquise, «Was es kostet» (Adrian: weisser
  Kasten gefällt nicht, links und rechts ungleich): Stufen ohne Kästen, nur
  Linie oben (erster Schritt orange), beide Spalten gleich breit, beide Preise
  gleich gross, gleicher Aufbau mit Kurzzeile und zwei gleich langen Punkten.
  Domain, Festpreis und Mehrwertsteuer darunter für beide. Ausgeliefert mit
  Lauf «Vorschlag zu Hostpoint» Nr. 124, live geprüft. Beleg:
  formateins-akquise `vorschlag/src/vorschlag/Vorschlag.astro`, `vorschlag.css`.
- [x] **ENT-111** · 06.11.2026 · Akquise, «Startseite zuerst» auf der Seite
  ohne Zahlungsbedingung (Adrian: «Gefällt Ihnen die Seite nicht, zahlen Sie
  nichts» klingt nach Geld-zurück-Garantie, die Seite soll die Tür öffnen).
  Erster Schritt neu «Die erste Seite, die Ihre Kunden sehen.», «Wir machen
  den Vorschlag gemeinsam zu Ihrer Startseite.», «Ihre übrigen Seiten bleiben,
  wie sie sind.» Intern: bezahlt wird, wenn die Seite online geht, steht in der
  Offerte (`akquise/tueroeffner.md`, `.agents/product-marketing.md`).
  Ausgeliefert mit Lauf «Vorschlag zu Hostpoint» Nr. 125, live geprüft.
- [x] **ENT-112** · 06.11.2026 · Akquise, «Was es kostet» (Adrian): Angaben
  unter den Stufen als Reihe mit Symbolen statt Strichliste (klar getrennt
  von den Punkten der Stufen). «Auf Wunsch fotografiere ich» als Tipp-Kasten
  im Stil der Box «Zweiter Weg» von formateins.ch: «Tipp · Fotos vor Ort»,
  «Wann gab es die letzten Fotos vom Team?», Knopf «Darüber reden» auf
  formateins.ch/gespraech. Grund: viele Betriebe schieben neue Fotos vor sich
  her (Teamfotos von 2016 und 2017 gesehen). Gilt für alle Seiten mit Preis.
  Ausgeliefert mit ENT-113.
- [x] **ENT-113** · 06.11.2026 · Akquise, Mehrwertsteuer auf der
  Vorschlagsseite nicht mehr erwähnen (Adrian): bringt Firmen mit
  Vorsteuerabzug nichts und verrät den Umsatz. Ersetzt durch «Kein Abo.
  Danach zahlen Sie nur Hosting und Domain.» `.agents/product-marketing.md`
  nachgeführt. Ausgeliefert mit Lauf «Vorschlag zu Hostpoint» Nr. 126, live
  geprüft, auf allen fünf Seiten kein «Mehrwertsteuer» mehr. Offen: ob
  formateins.ch (Preise, Social Media, Kostenrechner) es weiter nennt,
  entscheidet Adrian; im Impressum bleibt es.
- [x] **ENT-114** · 06.11.2026 · Akquise, «Was es kostet» (Adrian: der Kunde
  ist nicht abhängig von mir): Angabe neu «Die Seite gehört Ihnen. Kein Abo
  und keine Abhängigkeit von mir.» (wie «Die Seite gehört dir.» auf
  formateins.ch), auch in der Fassung ohne «Startseite zuerst». Intern: gehört
  dem Kunden, sobald bezahlt ist. Ausgeliefert mit Lauf «Vorschlag zu
  Hostpoint» Nr. 127, live geprüft. Beleg: formateins-akquise
  `vorschlag/src/vorschlag/Vorschlag.astro`.
- [x] **ENT-115** · 06.11.2026 · Akquise, Fragen auf der Vorschlagsseite
  (Adrian, Fassung A): Titel «Kurz beantwortet.» statt «Bevor Sie anrufen.»
  (keine Erwartung, dass er anruft). Frage 1 «Kann ich klein anfangen?» an den
  Preis angeglichen: «Ja. Mit «Startseite zuerst» machen wir den Vorschlag für
  CHF 1'200 zu Ihrer Startseite. …». Gilt für alle Seiten. Ausgeliefert mit
  Lauf «Vorschlag zu Hostpoint» Nr. 128, live geprüft.

- [x] **ENT-116** · 06.11.2026 · Akquise, Frage 2 «Wie viel Arbeit habe ich
  damit?» (Adrian, Fassung B1): «So viel, wie Sie möchten. Im Gespräch legen
  wir fest, was es braucht und wie stark Sie mitreden wollen.» Mit «Startseite
  zuerst» zusätzlich «Bei der Startseite ist das meist wenig, eine ganze
  Website braucht mehr von Ihnen.» Kein Verweis mehr auf den Entwurf, WhatsApp
  nicht erwähnt (erklärt Adrian im Gespräch). Akquise 3dcd5bb, ausgeliefert
  mit Lauf Nr. 129, live geprüft.

- [x] **ENT-117** · 06.11.2026 · Akquise, Frage 3 «Kostet das Gespräch
  etwas?» (Adrian, Fassung B): «Nein. Das Gespräch ist kostenlos und
  unverbindlich. Danach haben Sie den Festpreis und entscheiden in Ruhe.» Gilt
  für alle Seiten. Akquise f198777, ausgeliefert mit Lauf Nr. 130, live geprüft.

- [x] **ENT-118** · 06.11.2026 · Akquise, Frage 4 «Wie lange dauert es?»
  (Adrian, Fassung B, «meist» statt «höchstens»): «Die Startseite steht meist
  nach zwei Wochen, die ganze Website nach sechs Wochen. Wie schnell es geht,
  hängt vor allem davon ab, wann Texte und Bilder bereit sind.» Ohne «Startseite
  zuerst» nur «Die ganze Website steht meist nach sechs Wochen.» und der zweite
  Satz. Nachgezogen in `tueroeffner.md` und im Brief-Werkzeug `aus-daten.js`.
  Akquise 7d11840, ausgeliefert mit Lauf Nr. 131, live geprüft.
- [ ] formateins.ch nennt unter den Fragen noch «rund zwei Monate» (index.html,
  entwurf.html). Anpassen nur auf Adrians Wort, Push auf main ist live (ENT-118).

- [x] **ENT-119** · 06.11.2026 · Akquise, Frage 5 neu gestellt (Adrian,
  Fassung A): «Welche Kosten kommen später noch dazu?» statt «Was kostet es nach
  dem Livegang?» (der Kunde kennt den Ablauf nicht). Antwort «Nur die jährlichen
  Kosten für Domain und Hosting. Gern übernehme ich beides für Sie und verrechne
  es einmal im Jahr. Selbstverständlich dürfen Sie es auch selbst in die Hand
  nehmen.» Domain und Hosting als Service in `.agents/product-marketing.md`.
  Akquise f240824, ausgeliefert mit Lauf Nr. 132, live geprüft.
- [ ] Betrag für den Service Domain und Hosting pro Jahr festlegen (Adrian),
  für Offerte und Gespräch (ENT-119).

- [x] **ENT-120** · 06.11.2026 · Akquise, Frage 6 «Gehört die Website dann
  uns?» (Adrian, Fassung A, Besitz betonen statt Hosting): «Ja, vollumfänglich.
  Die Website, alle Texte, Bilder und Dateien gehören Ihnen. Sie können
  jederzeit wechseln, auch zu jemand anderem.» Der alte Satz «Domain und Hosting
  laufen auf Ihren Namen» widersprach ENT-119. Akquise 160167e, Lauf Nr. 133.
- [x] **ENT-121** · 06.11.2026 · Akquise, Abschnitt «Wenn Sie mögen» mit weniger
  Abstand (Adrian): oben und unten clamp(64px,8vw,112px) statt 160 px (Handy
  64 statt 88). Gilt für alle Seiten. Akquise fdc06c4, Lauf Nr. 134, live
  gemessen.

- [x] **ENT-122** · 06.11.2026 · Impressum und Datenschutz (Adrian): Im Fuss der
  Vorschlagsseiten «Impressum · Datenschutz», verlinkt auf formateins.ch (Akquise
  afafca6, Lauf «Vorschlag zu Hostpoint» Nr. 135). Datenschutz auf formateins.ch,
  Kurzfassung (beide Fassungen): «sehe ich, wann und mit welchem Gerät du den
  QR-Code scannst» statt nur «wann», wie im Abschnitt zum Brief und wie der
  QR-Code wirklich zählt. Direkt auf main 55c0d31, Lauf «Website zu Hostpoint»
  Nr. 88, live geprüft. Einschätzung, keine Rechtsberatung.
- [ ] Datenschutz auf formateins.ch hat noch Doppelpunkte («Kurz gesagt:», «Mehr
  nicht: keine IP-Adresse …»), ENT-105. Nur auf Adrians Wort.

- [x] **ENT-123** · 06.11.2026 · Fuss der Vorschlagsseiten (Adrian): Impressum und
  Datenschutz als eigener Teil, orange, am Handy zuunterst. Am Computer ab
  1300 px alles auf einer Zeile, darunter untereinander. «Eine Marke der» fällt
  weg, damit die Zeile passt («pzu consulting gmbh · Hochgasse 7, 4632
  Trimbach»). Gilt für alle Seiten. Akquise 6a2de77, Lauf Nr. 136, live gemessen
  bei 390, 1024, 1280, 1440 und 1920 px. Ändert ENT-122.
- [x] **ENT-124** · 06.11.2026 · AMMANN, Abschnitt «Ihr Auftritt» (Adrian):
  letzter Satz neu «Damit Ihr Kanal wieder in Schwung kommt, schenke ich Ihnen
  ein kurzes Video mit Ihrem Logo.» AMMANN hatte den Kanal schon, darum kein
  «Start». Der Clip ist ein kurzes Video mit Logo, nicht «das Logo als Film».
  Social Media bleibt hier Ansporn, kein Teil des Verkaufs. Nur daten.json von
  AMMANN. Akquise 22ec27d.
- [x] **ENT-125** · 06.11.2026 · Schluss der Vorschlagsseiten (Adrian): Titel
  «Wenn Sie mein Vorschlag anspricht, freue ich mich, von Ihnen zu hören.» statt
  «Reden wir 30 Minuten über Ihre Startseite.» (zu fordernd, 30 Minuten kein
  Richtwert). Text «In einem unverbindlichen Gespräch finden wir gemeinsam
  heraus, was Ihr Auftritt braucht. Danach wissen Sie, was es kostet, und
  entscheiden in Ruhe.» Kein Besuch beim Kunden mehr (für ein paar Fragen lohnt
  sich das nicht), «kein Verkaufsgespräch» und «Der Vorschlag gehört Ihnen»
  fallen weg. `vorschlag.besuch` bleibt in den Daten, wird nicht mehr gezeigt.
  Gilt für alle Seiten. Akquise 910f3c5.
- [x] **ENT-126** · 07.11.2026 · Gesamtcheck ohne Einzelnoten (Adrian): Beim
  ersten Eindruck statt «½ von 5 Punkten → 5 von 5» neu «erst weiter unten →
  sofort sichtbar». Der Ring «9,5 mit Vorschlag» und der Pfeil fallen weg,
  stattdessen in Grün «Mit dem Vorschlag werden vier rote Punkte grün» (zählt
  die Zeilen von Rot auf Grün). Die Note 3,5 für heute bleibt (ENT-089). Nur
  AMMANN hat einen Gesamtcheck. Akquise 53f5aa4.
