# Offerte an die Schreinerei Kully (Schritt 2.2)

Die Offerte entsteht im echten Offerten-Werkzeug des Betreiber-Bereichs, aber
**lokal** mit einer eigenen Datenbank. Auf betreiber.formateins.ch landet
nichts, die Nummer OF-0001 gilt nur hier.

1. Im Repository `formateins-betreiber`: MariaDB starten, Datenbank
   `fe_muster` anlegen (Benutzer `fe`, wie in `pruefungen/alle.sh`).
2. Server: `FE_DB_NAME=fe_muster … FE_EINRICHTUNG=<beliebig> FE_KEINE_MAILS=1 php -S 127.0.0.1:8810 -t .`
3. `FE_EINRICHTUNG=<dasselbe> node anlegen.mjs`: Konto, Briefkopf, Adresse,
   Projekt und Offerte mit Positionen aus dem Leistungskatalog (ENT-069).
4. `node drucken.cjs`: der Ausdruck, wie ihn «Drucken» in der Offerte
   liefert, als PDF und Bild.

Der Briefkopf nimmt die Angaben aus dem Impressum von formateins.ch.
