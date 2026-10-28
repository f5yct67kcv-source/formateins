// Preise an einer Stelle. Die Paketkarten rechnen damit, spaeter auch der
// Kostenrechner, damit beide nie auseinanderlaufen. Beim Livegang die Ansaetze
// aus kostenrechner.html (const preis) hierher ziehen und dort einbinden.
//
// Website: dieselben Ansaetze wie im Rechner heute.
// Marke und Video: Entwurf vom 28.10.2026, Lage rund 55-60 % vom Einstieg
// einer Kleinagentur (Faustregel aus dem Hochzeitsfilm: 2'500 gegen 4'500).
const PREISE = {
  website: {
    //          eine  firma  gross
    grund:     { eine:1650, firma:3050, gross:5100 },
    texteTeil: { eine:350,  firma:600,  gross:1000 },  // Texte teilweise vorhanden
    texte:     { eine:700,  firma:1200, gross:2000 },  // Texte schreibe ich
    bilderTeil:{ eine:250,  firma:400,  gross:600  },  // Bilder teilweise vorhanden
    logo:      { eine:300,  firma:300,  gross:300  },  // Farben und Schrift festlegen
    // Zweite Sprache: Aufbau, Umschalter und Pflege doppelt, ohne Uebersetzung.
    // Buchung: fremden Dienst einrichten und einbinden, kaum abhaengig von der Groesse.
    sprache:   { eine:450,  firma:800,  gross:1300 },
    buchung:   { eine:350,  firma:350,  gross:350  },
    fotos:650,                                         // halber Tag vor Ort, Anfahrt bis 30 km
    ueberarbeiten:0.8                                  // bestehende Seite ueberarbeiten statt neu bauen
  },
  marke: {
    // Drucksachen = Markenblatt plus Visitenkarte, Briefbogen, Vorlagen, Signatur.
    auffrischung:900, markenblatt:1900, drucksachen:2900,
    social:400                                        // Vorlagen fuer Social Media
  },
  video: {
    //            kurz  mittel lang
    imagefilm: { kurz:1800, mittel:2700, lang:3800 },
    animiert:  { kurz:1300, mittel:2400, lang:3500 },
    produkt:   { kurz:1300, mittel:2000, lang:2900 },
    format:    { kurz:300,  mittel:400,  lang:500  }, // zweites Seitenverhaeltnis
    schnitte:600,                                     // drei Kurzclips aus dem Material
    stimme:450                                        // professionelle Sprecherstimme
  },
  // Kombi: die teuerste Richtung voll, jede weitere 20 % guenstiger.
  weitere:0.8,
  eile:1.15, eileTage:42             // fester Termin in weniger als sechs Wochen
};

// Wohin "berechnen" und "Im Rechner weiter" fuehren. LIVEGANG: 'kostenrechner'.
const RECHNER = 'entwurf-kostenrechner.html';

// Rahmen wie im Rechner: -10 % bis +15 %, auf hundert gerundet.
function rahmen(punkt){
  return [Math.floor(punkt * 0.9 / 100) * 100, Math.ceil(punkt * 1.15 / 100) * 100];
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

// Einzelpreise: data-punkt zeigt auf einen Ansatz in PREISE, z. B. "marke.markenblatt".
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
