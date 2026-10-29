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
