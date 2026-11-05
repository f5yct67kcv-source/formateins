// Preise an einer Stelle. Die Paketkarten und der Kostenrechner rechnen damit,
// damit beide nie auseinanderlaufen.
//
// Der Block zwischen PREISE-ANFANG und PREISE-ENDE ist reines JSON und gehoert
// dem Betreiber-Bereich (ENT-078): Dort werden Ansaetze und Regeln gepflegt und
// mit «Auf formateins.ch schalten» als Commit hierher geschrieben, zusammen mit
// den festen Zahlen in preise.html, llms.txt und website-kosten.html. Von Hand
// aendern geht weiterhin, dann zeigt der Betreiber die Abweichung an. Keine
// Kommentare in den Block, JSON kennt keine.
//
// Was die Schluessel bedeuten:
//   website.grund       Grundpreis nach Umfang (eine Seite, 3 bis 5, ab 6)
//   website.texteTeil   Texte teilweise vorhanden; website.texte: Texte schreibe ich
//   website.bilderTeil  Bilder teilweise vorhanden
//   website.logo        nur Logo oder gar keins: Farben und Schrift festlegen
//   website.sprache     zweite Sprache: Aufbau, Umschalter, Pflege doppelt, ohne Uebersetzung
//   website.buchung     fremden Buchungsdienst einrichten und einbinden
//   website.fotos       halber Tag vor Ort, Anfahrt bis 30 km
//   website.ueberarbeiten  Faktor, wenn eine bestehende Seite ueberarbeitet statt neu gebaut wird
//   marke               Erscheinungsbild = Logo, Farben, Schriften, Regeln auf einem
//                       Markenblatt; Drucksachen = dazu Visitenkarte, Briefbogen, Signatur.
//                       Name entschieden am 28.10.2026: «Logo und Erscheinungsbild».
//                       social: Vorlagen fuer Social Media
//   video               Lage rund 55-60 % vom Einstieg einer Kleinagentur (Entwurf
//                       28.10.2026); format: zweites Seitenverhaeltnis; schnitte: drei
//                       Kurzclips aus dem Material; stimme: professionelle Sprecherstimme
//   social              Social Media, Monatspaket (ENT-079): monat = Preis pro Monat der
//                       Stufen Anlauf, Schwung, Vollgas; grundcheck = einmalig, angerechnet
//                       bei einer Stufe innert 30 Tagen; mitProjekt = Faktor fuer die
//                       ersten mitProjektMonate Monate, wenn Website, Branding oder Video
//                       dabei ist; pilot = Faktor fuer den ersten Monat ohne Projekt
//                       (erste drei Kunden, ENT-081), 1 = kein Pilotpreis. Rabatte zaehlen
//                       nicht zusammen. Kein Rahmen, kein Kombi.
//   weitere             Kombi: die teuerste Richtung voll, jede weitere und alle Optionen
//                       mal diesen Faktor
//   eile, eileTage      fester Termin in weniger als eileTage Tagen: mal eile
//   rahmen              angezeigter Rahmen: Punktwert mal unten (abgerundet) bis mal oben
//                       (aufgerundet), auf runden Franken
// PREISE-ANFANG
const PREISE = {
  "website": {
    "grund": { "eine": 1650, "firma": 3050, "gross": 5100 },
    "texteTeil": { "eine": 350, "firma": 600, "gross": 1000 },
    "texte": { "eine": 700, "firma": 1200, "gross": 2000 },
    "bilderTeil": { "eine": 250, "firma": 400, "gross": 600 },
    "logo": { "eine": 300, "firma": 300, "gross": 300 },
    "sprache": { "eine": 450, "firma": 800, "gross": 1300 },
    "buchung": { "eine": 350, "firma": 350, "gross": 350 },
    "fotos": 650,
    "ueberarbeiten": 0.8
  },
  "marke": {
    "auffrischung": 900,
    "erscheinungsbild": 1900,
    "drucksachen": 2900,
    "social": 400
  },
  "video": {
    "imagefilm": { "kurz": 1800, "mittel": 2700, "lang": 3800 },
    "animiert": { "kurz": 1300, "mittel": 2400, "lang": 3500 },
    "produkt": { "kurz": 1300, "mittel": 2000, "lang": 2900 },
    "format": { "kurz": 300, "mittel": 400, "lang": 500 },
    "schnitte": 600,
    "stimme": 450
  },
  "social": {
    "monat": { "anlauf": 450, "schwung": 850, "vollgas": 1550 },
    "grundcheck": 290,
    "mitProjekt": 0.8,
    "mitProjektMonate": 3,
    "pilot": 0.5
  },
  "weitere": 0.8,
  "eile": 1.15,
  "eileTage": 42,
  "rahmen": {
    "unten": 0.9,
    "oben": 1.15,
    "runden": 100
  }
};
// PREISE-ENDE

// Wohin "berechnen" und "Im Rechner weiter" fuehren.
const RECHNER = 'kostenrechner';

// Rahmen wie im Rechner: heute -10 % bis +15 %, auf hundert gerundet.
function rahmen(punkt){
  const { unten, oben, runden } = PREISE.rahmen;
  return [Math.floor(punkt * unten / runden) * runden, Math.ceil(punkt * oben / runden) * runden];
}

// Kern je Richtung und Summe der Optionen rein, einzeln und aus einer Hand raus.
// Bei mehr als einer Richtung sind Optionen immer 20 % guenstiger, egal zu
// welcher Richtung sie gehoeren (Entscheid 28.10.2026). Sonst bliebe die
// Ersparnis stehen, wenn jemand bei der teuersten Richtung etwas ankreuzt.
// Karten und Rechner rechnen beide hiermit, darum stimmen ihre Preise ueberein.
function kombi(kerne, optionen = 0){
  const werte = kerne.filter(Boolean).sort((a, b) => b - a);
  const rabatt = werte.length > 1 ? PREISE.weitere : 1;
  const einzeln = werte.reduce((s, w) => s + w, 0) + optionen;
  const hand = werte.reduce((s, w, i) => s + (i === 0 ? w : w * rabatt), 0)
             + optionen * rabatt;
  return { einzeln, hand };
}

function zahl(n){ return n.toLocaleString('de-CH').replace(/[  ]/g, "'"); }
function chfRahmen([von, bis]){ return 'CHF ' + zahl(von) + ' – ' + zahl(bis); }

// Eine Karte beschreibt ihren Kern in data-Attributen, die Optionen zum
// Dazunehmen sind Kontrollkaestchen mit data-richtung und data-wert.
function karteRechnen(karte){
  const d = karte.dataset;
  const an = wert => karte.querySelector('input[data-wert="' + wert + '"]')?.checked;

  let optionen = 0;

  const marke = d.marke ? PREISE.marke[d.marke] : 0;
  if (marke && an('social')) optionen += PREISE.marke.social;

  const website = d.website ? PREISE.website.grund[d.website] : 0;
  for (const wert of ['texte', 'sprache', 'buchung'])
    if (website && an(wert)) optionen += PREISE.website[wert][d.website];

  let video = 0;
  if (d.video) {
    const [art, laenge] = d.video.split(' ');
    video = PREISE.video[art][laenge];
    if (an('format')) optionen += PREISE.video.format[laenge];
    if (an('schnitte')) optionen += PREISE.video.schnitte;
    if (an('stimme')) optionen += PREISE.video.stimme;
  }

  const { einzeln, hand } = kombi([marke, website, video], optionen);
  const spar = Math.round((einzeln - hand) / 100) * 100;

  karte.querySelector('.einzeln').textContent = chfRahmen(rahmen(einzeln));
  const preis = karte.querySelector('.hand');
  const neu = chfRahmen(rahmen(hand));
  if (preis.textContent && preis.textContent !== neu) {
    // Kurz aufleuchten, damit man sieht, dass sich etwas bewegt hat.
    preis.classList.remove('neu'); void preis.offsetWidth; preis.classList.add('neu');
  }
  preis.textContent = neu;
  karte.querySelector('.spar b').textContent = 'CHF ' + zahl(spar);

  // Der Link in den Rechner nimmt Paket und Optionen mit.
  const p = new URLSearchParams({ paket: d.paket });
  karte.querySelectorAll('.dazu input:checked').forEach(i => p.append('dazu', i.dataset.wert));
  karte.querySelector('.hin').href = RECHNER + '?' + p;
}

// Einzelpreise: data-punkt zeigt auf einen Ansatz in PREISE, z. B. "marke.erscheinungsbild".
document.querySelectorAll('[data-punkt]').forEach(el => {
  const punkt = el.dataset.punkt.split('.').reduce((o, k) => o[k], PREISE);
  el.textContent = chfRahmen(rahmen(punkt));
});

document.querySelectorAll('[data-rechner]').forEach(a => a.href = RECHNER + '?' + a.dataset.rechner);

document.querySelectorAll('.karte[data-paket]').forEach(karte => {
  karte.querySelectorAll('.dazu input').forEach(i => i.addEventListener('change', () => {
    // Kurzclips gibt es nur mit beiden Formaten, so wie im Rechner.
    const format = karte.querySelector('input[data-wert="format"]');
    const clips = karte.querySelector('input[data-wert="schnitte"]');
    if (i === clips && clips.checked) format.checked = true;
    if (i === format && !format.checked && clips) clips.checked = false;
    karteRechnen(karte);
  }));
  karteRechnen(karte);
});
