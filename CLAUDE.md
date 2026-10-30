# Arbeitsweise in diesem Projekt

## Logbuch: jeder Entscheid bekommt eine ENT-Nummer

Seit dem 28.10.2026 auf Adrians Wunsch: Jeder Entscheid und jede Aufgabe kommt
in `LOGBUCH.md`, mit fortlaufender Nummer **ENT-…**, Datum, kurzem Satz und
Beleg (Commit, Lauf). `[x]` = erledigt und belegt, `[ ]` = offen. Nummern nie
neu vergeben; ein geänderter Entscheid bekommt eine neue Nummer mit Verweis.
Eintrag im selben Commit wie die Änderung, im Chat die Nummer nennen. Vor der
Arbeit `LOGBUCH.md` lesen: offene Punkte stehen dort, nicht nur im README.

Mehrere Sitzungen schreiben ins selbe Logbuch (am 29. und 30.10.2026 zweimal
doppelt vergeben: ENT-035/036 und ENT-042). Darum vor jeder neuen Nummer
`git fetch origin main` und die nächste freie Nummer **nach der höchsten auf
`origin/main`** nehmen, nicht nach der höchsten im eigenen Zweig. Ist die
Nummer beim Push trotzdem belegt: die eigene umnummerieren, mit dem Vermerk
«zuerst als ENT-… vergeben», und im Code und in Commit-Texten nachziehen. Die
fremde Nummer nie anfassen.
Die Datei geht nicht auf den Webserver (Ausnahme im Workflow).

## Roadmap beim Musterprojekt Breitbild

Seit dem 30.10.2026 auf Adrians Wunsch (ENT-044): Das Musterprojekt Breitbild
wird in `quellen/muster-breitbild/ROADMAP.md` geführt, mit Soll und Ist pro
Schritt und einem Journal. Vor der Arbeit daran die Roadmap lesen, nach jedem
Schritt den Journal-Eintrag im selben Commit wie die Arbeit. Das Soll wird
nicht nachträglich geändert, Abweichungen stehen mit Grund im Journal. Zweck:
für echte Projekte lernen und Stoff für den Blogbeitrag am Schluss (ENT-045).

Die Zeit misst der Projekt-Timer (ENT-046, `quellen/zeit/LIESMICH.md`). Zu
Beginn jedes Schritts den Schritt in `~/.zeit-schritt` schreiben, zum Beispiel
`echo "muster-breitbild 3.1" > ~/.zeit-schritt`, damit jeder Puls ihn trägt.
Die Zeiten fürs Journal kommen aus dem Timer, nicht aus der Erinnerung.

## Vor jedem Push

An `main` arbeiten mehrere Sitzungen parallel. Deshalb vor **jedem** Push:

```
git fetch origin main
git log --oneline main..origin/main    # leer = main steht noch, wo du sie verlassen hast
```

Hat sich `main` bewegt: eigene Commits mit `git rebase origin/main` daraufsetzen,
nicht mergen. Ein Merge-Commit fuer eine Handvoll Zeilen macht die Geschichte
unleserlich. Danach den Diff des fremden Commits anschauen (`git show --stat`) —
beruehrt er dieselben Dateien, die eigene Aenderung noch einmal pruefen.

Nie mit `--force` auf `main`. Auf dem eigenen Arbeitsbranch ist `--force` in
Ordnung, dort arbeitet sonst niemand.

## Entwuerfe bleiben auf der Testseite

Die Seite ist live. Entwuerfe gehen deshalb **nie** in `index.html` und die
anderen ausgelieferten Dateien, sondern in eigene Dateien mit dem Praefix
`entwurf`:

```
entwurf.html            Startseite im Entwurf
entwurf-auftritt.html   usw.
```

Der Workflow schliesst alles aus, was `entwurf` am Anfang hat, auch Bilder
(`entwurf-markenblatt.webp`). Selbst wenn
der Entwurf versehentlich auf `main` landet, steht er damit nicht auf
formateins.ch. Erst wenn Adrian den Entwurf abnimmt, wandert der Inhalt in die
echten Dateien und die Entwurfsdateien verschwinden.

### Die Vorschau auf GitHub Pages

Pages ist eingeschaltet und baut seit dem 28.10.2026 aus dem Vorschau-Zweig
**`claude/stoic-archimedes-xpyk3n`** (ENT-021), mit der klassischen
Zweig-Veroeffentlichung (Lauf «pages build and deployment» nach jedem Push).
Die Vorschau zieht man nach, indem man den Arbeitsstand dorthin schiebt; vorher
pruefen, dass auf dem Zweig nichts liegt, was nicht von dieser Arbeit stammt
(`git log HEAD..origin/claude/stoic-archimedes-xpyk3n`).
Adresse: `https://f5yct67kcv-source.github.io/formateins/`. Das Repository ist
oeffentlich.

Wichtig: Pages veroeffentlicht den **ganzen** Zweig, ohne die Ausschluesse des
Hostpoint-Workflows. Die Ausnahme fuer `entwurf*` schuetzt also formateins.ch,
nicht github.io — auf Pages wird ein Entwurf sichtbar, sobald er auf dem
veroeffentlichten Zweig liegt. Das ist fuer die Vorschau genau erwuenscht,
sollte man aber wissen. Dasselbe gilt fuer `README.md`, `CLAUDE.md` und
`quellen/`: auf dem Webserver liegen sie nicht, auf Pages schon (im
oeffentlichen Repository stehen sie ohnehin offen).

Damit gibt es zwei Wege zu einem Vorschau-Link, und beide gehoeren Adrian:

1. **Pages auf den Arbeitszweig stellen** (Settings → Pages → Branch).
   Kein Deploy, formateins.ch bleibt unberuehrt, jederzeit zurueckzustellen.
2. **Entwurf nach `main`**. Dann baut Pages ihn von selbst, und der
   Hostpoint-Deploy laedt ihn wegen `--exclude 'entwurf*'` nicht hoch. Loest
   aber einen Lauf aus und braucht Adrians Wort.

Die Vorschau laesst sich von hier aus abrufen (geprueft am 30.10.2026,
ENT-048): `curl` und Playwright zeigen, was github.io ausliefert. Pages braucht
nach dem Push einen Moment; ob der Bau durchlief, zeigt der Lauf «pages build
and deployment».

## Push auf main heisst live

Jeder Push auf `main` startet die Action «Website zu Hostpoint» und laedt die
Seite auf den Webserver (siehe README, Auslieferung auf Hostpoint). Also nur auf
`main` pushen, wenn Adrian es ausdruecklich sagt; sonst auf den Arbeitsbranch.

Nach dem Push den Lauf pruefen, nicht einfach annehmen, dass er durchlief:
Actions → «Website zu Hostpoint», oder ueber die GitHub-Tools den letzten Lauf
auf `main` abfragen. Ein Lauf kann auch mal Minuten in der Warteschlange stehen.

## Was von hier aus geprueft werden kann

Seit dem 30.10.2026 (ENT-048) antworten `www.formateins.ch`,
`betreiber.formateins.ch` und `f5yct67kcv-source.github.io` aus der
Cloud-Sitzung (Antwort 200). Frueher blockte der Egress-Proxy diese Hosts, und
die Netzwerk-Einstellung der Umgebung kann sich wieder aendern. Nach einem
Livegang darum beides pruefen: die Logs der Action («replacing index.html»,
«Sync complete») und die ausgelieferte Seite selbst (`curl`, Playwright).
Antwortet ein Host nicht, ist das zuerst eine Frage der Netzwerk-Einstellung
und kein Beweis, dass die Seite alt ist.

Zusaetzlich laesst sich von aussen pruefen, ueber das Firecrawl-Werkzeug: `firecrawl_scrape`
holt eine Seite von formateins.ch ueber das offene Netz (so am 30.10.2026
bestaetigt: `robots.txt` antwortet mit 200), `firecrawl_search` zeigt, was ein
Suchindex kennt. Bing laesst sich per `curl` auf `www.bing.com/search` abfragen.
Was KI-Suchen sehen und wo die Hebel liegen: README, Abschnitt «KI-Suchen».

## Aenderungen zuerst zeigen

Gestaltung erst vorfuehren, dann bauen: Entwuerfe als Bild rendern (Playwright,
die Seite lokal ueber `python3 -m http.server` ausliefern) und Adrian zur Wahl
stellen. Nicht ungefragt die bestehende Gestaltung umbauen.

Ein «fix das mal» ist keine Vollmacht, die Fassung auszusuchen. Varianten
zeigen, Adrian waehlt, dann bauen und pushen — auch wenn der Fehler klar ist
und die Loesung naheliegt.

Das gilt fuer die **Gestaltung**, nicht fuer den **Text**. Steht nur eine
Formulierung zur Wahl, kommen die Varianten als Text in den Chat — kein Umbau,
kein Rendern. Bilder erst, wenn die Form zur Frage gehoert (Umbruch, Hoehe,
Abstaende) oder Adrian sie verlangt.

## Schreibstil der Seite

Festgelegt von Adrian am 26.10.2026. Gilt fuer alle Texte auf formateins.ch
und fuer Folgeprojekte: Startseite, Bereichsseiten, Arbeiten, FAQ, Offerten,
Instagram. Neue Texte zuerst an diesen Regeln pruefen.

**Der Titel ist der Hook.** Er verspricht ein Ergebnis, das der Kunde will
(mehr Reichweite, ein Auftritt, der auffaellt, Kunden, die
anrufen), nicht eine Technik oder ein Verfahren. Er darf zupacken und den
heutigen Zustand deutlich benennen, etwa einen verstaubten oder
eingeschlafenen Social-Media-Auftritt. Beispiel fuer die Richtung: «Wir
bringen deinen Social-Media-Auftritt aufs naechste Level.»

**Der Text darunter ist persoenlich.** Ich-Form von Adrian, Anrede du. Vorne
steht die gemeinsam erarbeitete Strategie: zuerst zuhoeren und zusammen
festlegen, wen du erreichen willst und was haengen bleiben soll, dann
gestalten. Danach der Nutzen in konkreten Worten: moderne Inhalte, mehr
Reichweite, Reels, Spots, Seiten, die wirken. Keine Leistungsliste ohne
Wirkung.

**Konkret statt Floskel.** Kurze Saetze, ein Gedanke pro Satz, Schweizer
Rechtschreibung ohne ß, Betraege als CHF 2'400. Keine leeren Werbewoerter
(«einzigartig», «massgeschneidert», «ganzheitlich»), stattdessen sagen, was
passiert und was es bringt.

**Fuer wen.** Selbststaendige, kleine Unternehmen und Vereine. Nicht
«Betrieb», sondern du und dich. Nicht gendern.

**Was nicht mehr vorkommt.** «Von Hand gebaut» und «animiert statt gefilmt».
Foto und Video vor Ort sind eine Zusatzoption in jedem Bereich, auch im
Motion Design: separat offeriert, nie ausgeschlossen.

**KI offen und positiv.** Die KI ist ein Werkzeug wie die Kamera. Sie macht
das Technische schneller und den Preis attraktiver. Adrians Zeit gehoert dem
Hinschauen, Zuhoeren und Gestalten.

## Technik pro Projekt waehlen: reines HTML oder Astro

formateins.ch selbst bleibt **reines HTML** (Entscheid vom 27.10.2026): wenige
Seiten, kein Build-Schritt, der Deploy kopiert die Dateien unveraendert auf
Hostpoint.

Bei jedem **neuen Projekt** (Kundenseite, neuer Auftritt, grosser Umbau) wird die
Technik nicht einfach uebernommen, sondern zuerst abgewogen. Vor dem ersten
Bauschritt eine kurze Empfehlung in den Chat, Adrian entscheidet:

| Spricht fuer reines HTML | Spricht fuer Astro |
|---|---|
| bis etwa 5–8 Seiten, die selten wachsen | viele oder laufend neue Seiten (Blog, Referenzen, Fallstudien) |
| Kopf, Fuss und Navigation aendern sich kaum | gemeinsame Bausteine, die auf allen Seiten gleich sein muessen |
| Texte pflegt Adrian direkt im HTML | Inhalte sollen als Markdown gepflegt werden |
| Auslieferung soll ohne Build gehen (Dateien hochladen) | Bilder sollen automatisch verkleinert und als WebP/AVIF ausgegeben werden |
| Seite soll jahrelang ohne Pflege laufen | jemand kuemmert sich um Node und die Paket-Updates |

Beide liefern am Ende statisches HTML, beim Tempo nehmen sie sich nichts. Die
Frage ist nur, wie viel Wiederholung das Projekt bringt und ob sich dafuer ein
Build-Schritt mit Abhaengigkeiten lohnt. Faellt die Wahl auf Astro, braucht der
Deploy einen Bauschritt (`npm ci && npm run build`) und laedt `dist/` statt der
Quelldateien hoch.

Ein Projekt, das mit HTML begonnen hat, wechselt erst zu Astro, wenn die
Wiederholung spuerbar Fehler macht (vergessene Menuepunkte, abweichende
Fusszeilen), nicht vorsorglich.
