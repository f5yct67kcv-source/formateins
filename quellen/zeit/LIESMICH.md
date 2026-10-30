# Projekt-Timer (ENT-046)

Hält fest, wann Adrian mit Claude an einem Projekt arbeitet. Die Pulse gehen an
den Betreiber-Bereich (`betreiber.formateins.ch/api/zeit_puls.php`, Repository
`formateins-betreiber`), dort entstehen später die Ansichten.

## Was ein Puls ist

Ein Zeitpunkt mit Ereignis: `nachricht` (Adrian schickt etwas ab), `fertig`
(Claude ist fertig), `start` und `ende` einer Sitzung. Dazu Sitzung, Gerät,
Repository und Roadmap-Schritt. Nie der Text einer Nachricht.

## Einrichten

**Cloud:** Den ganzen Inhalt von `setup-skript.sh` in der Umgebung unter
«Setup-Skript» eintragen. Der Schlüssel kommt als Netzwerk-Secret
«Projekt-Timer» der Umgebung (Zulässige Websites `betreiber.formateins.ch`,
Header `X-Zeit-Schluessel`, Präfix leer). Er steht nie in einer Datei.

**Mac:** einmal `bash quellen/zeit/setup-skript.sh` im Terminal. Den Schlüssel
als einzige Zeile in `~/.config/formateins/zeit-schluessel` ablegen.

## Roadmap-Schritt

Der Hook liest den Schritt aus `~/.zeit-schritt`, zum Beispiel
`muster-breitbild 3.1`. Claude setzt die Datei, sobald ein Schritt der Roadmap
beginnt. Fehlt sie, kommt der Puls ohne Schritt an und wird später zugeordnet.

## Prüfen

Ein Abruf von `https://betreiber.formateins.ch/api/zeit_puls.php` aus einer
Cloud-Sitzung (der Proxy setzt den Schlüssel ein) antwortet mit
`"schluessel":"stimmt"` und nennt den letzten Puls. «kein Schlüssel» heisst: Das
Netzwerk-Secret fehlt oder greift nicht. «stimmt nicht» heisst: Die Werte in der
Cloud und im GitHub-Secret `ZEIT_SCHLUESSEL` sind nicht gleich.

## Nachtragen

Fehlen Pulse, liegen sie im Verlauf der Sitzung: im Container unter
`/root/.claude/projects/-home-user/<Sitzung>.jsonl` (Nachrichten von Adrian als
`user`, «fertig» als `system`/`stop_hook_summary`), dauerhaft über den Verlauf
der Cloud-Sitzung. Als `quelle: "nachtrag"` mit der Zeit des Ereignisses
schicken. Doppelte zählen nicht. So am 30.10.2026 für die erste Sitzung des
Musterprojekts gemacht (30 Pulse, einer war schon da).

## Regel für Arbeit und Pause

Von Adrians Nachricht bis «fertig»: Claude arbeitet, wird getrennt ausgewiesen.
Von «fertig» bis zur nächsten Nachricht: Adrian ist dran, solange es weniger als
10 Minuten sind. Bei längeren Lücken zählen 10 Minuten als Lesen, der Rest ist
Pause, ausser Adrian sagt, dass er gearbeitet hat (Entscheide vom 30.10.2026).
