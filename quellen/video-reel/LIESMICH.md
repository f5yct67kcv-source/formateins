# Reel «Video» und Spot «Fulehorn»

Arbeitsstand vom 27.10.2026. Das Reel zeigt in 16 s, was formateins im Bereich
Video macht: Social Media, Erklärvideo, Werbevideo, Imagefilm. Es ist für
die Detailansicht von Richtung 03 gedacht (`entwurf-v2.html`, Stand «Video»).

## Dateien im Hauptordner

| Datei | Inhalt |
|---|---|
| `entwurf-video-reel.mp4` / `.webm` | Reel stumm, 540×960 |
| `entwurf-video-reel-ton.mp4` / `.webm` | Reel mit Ton (AAC / Opus, 96 kbit/s) |
| `entwurf-video-reel.jpg` | Poster, Bild bei 2.9 s (Profil lebendig) |
| `entwurf-video-fulehorn-rohschnitt.mp4` | Spot Fulehorn, Rohschnitt 20 s, noch ohne Musik |

## Aufbau des Reels (9:16, 30 fps)

| Zeit | Teil | Quelle |
|---|---|---|
| 0–4.5 s | Social Media | `profil.html`, Fulehorn-Profil von blass zu lebendig, Sprung in die Kachel |
| 4.5–8 s | Erklärvideo | Grantown-Karte (Garden Park Guest House), 16.0–19.5 s, Kunde ist einverstanden |
| 8–12 s | Werbevideo | Fulehorn Hero, Licht geht auf (shot4v 1.5–5.5 s) |
| 12–16 s | Imagefilm | Praxis-Platzhalter: Wide 1.4 s, Detail 1.2 s, Middle 1.4 s |

Fulehorn ist eine erfundene Marke. Auf der Seite als freie Arbeit oder Beispiel
bezeichnen, nicht als Kundenprojekt. Die Praxis-Szene ist KI-generiert und ein
Platzhalter, bis der echte Dreh vorliegt. Keine echten Namen.

## Generiert bei Higgsfield (Job-IDs)

Bilder: GPT Image 2.5 Flare, 2k. Clips: Kling 4.0, 1080p, 9:16.

| Was | Job-ID |
|---|---|
| Dose A freigestellt (Referenz für alles) | `3962c1ce-1947-4c6a-9507-92159ba4390d` |
| Shot 1 Plantage, Startbild / Clip | `82c9dbb7-ff45-4953-8d1b-81bc8fe6ac70` / `52ba6072-4f30-4217-927e-4669ede3ffc0` |
| Shot 2 Rösterei, Startbild / Clip | `05ad3664-ac41-4e63-ac9f-30580544430c` / `891dceb9-0962-4f71-be9b-6b7aff1ca14e` |
| Shot 3 Deckel, Startbild / Clip | `de85ebd8-84c1-4d4f-818a-a2bac0380065` / `8cc5d11c-2f9d-4472-b086-a0575647113f` |
| Shot 4 Hero, Licht aus / an (enger) / Clip | `08b1e909-8556-4e3c-a2cd-07901c8b0a27` / `db4c5067-57bb-4abf-9424-d9a9807976ae` / `f7a8cd96-afe4-49f9-90bd-243deec0456f` |
| Shot 5 Pour-over, Startbild / Clip | `9e48fc92-34ec-4c94-8f1f-0f0424991ad3` / `652f7518-a9aa-48a2-ac5b-0502052b5b0f` |
| Praxis Wide, Startbild / Clip | `434b6d74-0cc7-4ee2-bce2-fe627e6a2944` / `0fb9c8bc-570c-4535-8754-89bfe98002e8` |
| Praxis Detail, Startbild / Clip | `2a3e4ca0-784f-485d-9881-fbcfa2d10aec` / `38107bc8-0651-4ab2-9097-e84df82c2a3e` |
| Praxis Middle, Startbild / Clip | `cae79fda-9649-47f7-957f-3ff578e86e26` / `36dc2576-f4ec-4831-bc05-e5bec889efaf` |

Kosten gesamt: 106.25 Credits.

## Skripte in diesem Ordner

Sie stammen aus dem Arbeitsordner der Sitzung und erwarten dort die Unterordner
`fulehorn/`, `social/`, `praxis/`, `reel/`. Zum Weiterarbeiten Clips über die
Job-IDs neu laden und die Ordner so anlegen.

- `rohschnitt.sh` Spot Fulehorn: Clips trimmen, Übergänge (Blende, Schnitt, über Schwarz)
- `endkarte.html` + `render-ek.js` Endkarte des Spots, Bild für Bild mit Playwright
- `profil.html` + `render-profil.js` Social-Media-Teil, 135 Bilder
- `titel.html` + `titel.js` Titel-Einblender je Teil («Beispiel» + Bereich) als PNG
- `reel.sh` Reel zusammensetzen, Schilder, Soundakzente, Lautheit -15.7 LUFS

Soundakzente: CC0-Bibliothek von Katana (Kenney, qubodup, Swish-Pack),
Nachweise in `sfx-lizenzen.txt`.

## Offen

- Musikbett für Reel und Spot (Track fehlt, nicht mit Code erzeugen)
- Imagefilm-Platzhalter (Praxis) durch den echten Dreh ersetzen

## Sichtbarer Bereich auf der Seite

Das Telefon in `entwurf-v2.html` hat das Format 1:2.164 und schneidet ein
9:16-Video links und rechts um je etwa 9 % (rund 97 px bei 1080 Breite).
Darum liegt alles Wichtige im mittleren Bereich: Profil mit 46 px Rand
(statt 16), Titel bei x = 130, Erklärvideo auf 84 % verkleinert über
einer unscharfen Fassung von sich selbst.
