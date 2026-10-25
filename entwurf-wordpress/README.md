# WordPress-Demo «Sportcenter Lindenfeld»

Entwurf. Fiktiver Betrieb, angelehnt an die Art von Seite, die laufend
gepflegt werden muss: Saisonpreise, Turniere, Mitteilungen, Hinweise. Zeigt
Kunden, die lieber auf WordPress arbeiten, wie formateins das baut.

Liegt vorerst hier auf dem Arbeitszweig. Sobald Adrian das Repository fuer die
Demo bestimmt hat, zieht der Ordner dorthin um; auf formateins.ch kommt er
nie (Praefix `entwurf`).

| Datei | Zweck |
| --- | --- |
| `lindenfeld/` | Das Block-Theme: `theme.json`, Vorlagen, Vorlagenteile, Muster, Schriften |
| `demo-fuellen.php` | Fuellt eine leere Installation mit Seiten, Mitteilungen, Anlaessen, Menue |
| `router.php` | Router fuer `php -S`, damit Adressen wie `/anlaesse/` gehen |
| `demo-lokal.sh` | Alles in einem: WordPress holen, Theme einhaengen, fuellen, starten |
| `bilder/` | Renderings der beiden Startseiten-Varianten |

## Was das Theme mitbringt

- **Anlaesse** als eigene Inhaltsart mit Datum, Ort und Anmeldelink. Die
  Listen sortieren nach Datum, Vergangenes verschwindet von selbst.
- **Hinweis-Leiste** als Vorlagenteil: ein Satz, den das Center im Editor
  aendert, steht sofort auf allen Seiten.
- **Zwei Startseiten** als Seitenvorlagen: «Halle» (Hero mit Platzlinien,
  Karten) und «Tafel» (Anzeigetafel mit Heute, naechsten Anlaessen, Hinweis).
- **Muster** fuer Hero, Sportarten, Aktuell, Anlaesse, Preise, Besuch; im
  Editor unter der Kategorie «Sportcenter».
- Schriften Barlow und Barlow Condensed liegen im Theme (SIL Open Font
  License), kein Google-Fonts-Aufruf.
- Kein Plugin noetig. Datumsnamen auf Deutsch kommen live vom Sprachpaket
  de_CH; lokal, ohne Verbindung zu wordpress.org, uebersetzt `functions.php`.

## Lokal ansehen

```bash
entwurf-wordpress/demo-lokal.sh
```

Dann `http://127.0.0.1:8080` (Variante Halle) und `/start-tafel/` (Variante
Tafel). Redaktion unter `/wp-login.php`, `adrian` / `demo-lokal-2026`.

## Live

Braucht ein WordPress-Hosting mit Datenbank, zum Beispiel eine Subdomain bei
Hostpoint mit der dortigen WordPress-Installation. Dann: Ordner `lindenfeld`
nach `wp-content/themes/` laden, Theme aktivieren, Sprache de_CH, Inhalte
anlegen (oder `demo-fuellen.php` einmal laufen lassen und danach loeschen).
