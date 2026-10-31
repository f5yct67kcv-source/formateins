import crypto from 'node:crypto';
import fs from 'node:fs';
const BASIS = 'http://127.0.0.1:8810';
async function api(pfad, { token, daten } = {}) {
  const r = await fetch(`${BASIS}/api/${pfad}`, { method: daten !== undefined ? 'POST' : 'GET',
    headers: { 'Content-Type': 'application/json', ...(token ? { 'X-Auth-Token': token } : {}) },
    body: daten !== undefined ? JSON.stringify(daten) : undefined });
  let j = null; try { j = await r.json(); } catch {}
  return { ...j, code: r.status };
}
function totp(b32, f = Math.floor(Date.now() / 1000 / 30)) {
  const A = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ234567'; let bits = '';
  for (const z of b32) bits += A.indexOf(z).toString(2).padStart(5, '0');
  const bytes = []; for (let i = 0; i + 8 <= bits.length; i += 8) bytes.push(parseInt(bits.slice(i, i + 8), 2));
  const b = Buffer.alloc(8); b.writeUInt32BE(0, 0); b.writeUInt32BE(f, 4);
  const h = crypto.createHmac('sha1', Buffer.from(bytes)).update(b).digest(); const v = h[19] & 15;
  return String((((h[v] & 127) << 24) | (h[v + 1] << 16) | (h[v + 2] << 8) | h[v + 3]) % 1e6).padStart(6, '0');
}
const muss = (r, was) => { if (r.code !== 200) { console.error(was, r); process.exit(1); } return r; };
let r = muss(await api('einrichten.php', { daten: { schluessel: process.env.FE_EINRICHTUNG, name: 'Adrian von Arb', email: 'adrian@formateins.ch', passwort: crypto.randomBytes(18).toString('hex') } }), 'einrichten');
const token = r.token;
r = muss(await api('zf_einrichten.php', { token, daten: {} }), 'zf');
const geheim = r.geheimnis || r.secret || r.geheim;
muss(await api('zf_bestaetigen.php', { token, daten: { code: totp(geheim) } }), 'zf bestaetigen');
muss(await api('betreiber_briefkopf.php', { token, daten: { firma: 'formateins', absender: 'formateins\nAdrian von Arb\npzu consulting gmbh\nHochgasse 7\n4632 Trimbach',
  email: 'adrian@formateins.ch', telefon: '079 686 84 86', webseite: 'formateins.ch' } }), 'briefkopf');
r = muss(await api('betreiber_kunden_speichern.php', { token, daten: { art: 'unternehmen', name: 'Schreinerei Kully AG',
  strasse: 'Werkstrasse', hausnummer: '12', plz: '4612', ort: 'Wangen bei Olten',
  kontaktwege: [{ art: 'email', wert: 'nina@schreinerei-kully.ch' }],
  personen: [{ anrede: 'Frau', vorname: 'Nina', nachname: 'Kully', kontaktwege: [] }] } }), 'kunde');
const kunde = r.id;
const kl = await api('betreiber_kunden_list.php', { token });
const person = kl.kunden.find(k => k.id === kunde).personen[0].id;
r = muss(await api('projekt_speichern.php', { token, daten: { adresse_id: kunde, titel: 'Neuer Auftritt (Breitbild)', richtung: 'branding', status: 'bei_mir', termin: '2026-11-04' } }), 'projekt');
const projekt = r.id;
const kat = (await api('betreiber_produkt_list.php', { token })).produkte;
const P = (nr, beschreibung, rabatt = 0) => { const p = kat.find(x => x.nummer === nr);
  return { produkt_id: p.id, produkt_name: p.name, beschreibung, menge: 1, einheit: p.einheit, einzelpreis_rappen: p.einzelpreis_rappen, rabatt_bp: rabatt, mwst_satz_bp: 0 }; };
const positionen = [
  P('B-03', 'Neues Logo mit dem Hobel als Zeichen, Farben, Schriften und Regeln auf einem Markenblatt. Dazu Visitenkarte, Briefbogen, Briefkopf für Offerten und Rechnungen aus deinem Programm, Mail-Signatur. Mehrere Bereiche: 20 % weniger.', 2000),
  P('W-02', 'Fünf Seiten: Start, Arbeiten, Werkstatt und Team, Lehrstellen, Kontakt. Für Handy und Computer.'),
  P('V-02', 'Rund 45 Sekunden, ein Drehtag in der Werkstatt in Wangen. Dazu Standbilder aus dem Dreh für die Website. Mehrere Bereiche: 20 % weniger.', 2000),
  P('V-32', 'Der Film auch im Hochformat, für Instagram und TikTok. Mehrere Bereiche: 20 % weniger.', 2000),
  P('V-41', 'Drei kurze Clips aus dem Drehtag, für Lehrstellen und Social Media. Mehrere Bereiche: 20 % weniger.', 2000),
  P('B-11', 'Vorlagen für Beiträge und Stories, die ein Lernender mit dem Handy füllen kann, mit einer kurzen Einführung. Mehrere Bereiche: 20 % weniger.', 2000),
];
r = muss(await api('betreiber_beleg_speichern.php', { token, daten: { art: 'offerte', kunde_id: kunde, person_id: person, projekt_id: projekt,
  titel: 'Dein neuer Auftritt: Logo, Website und Imagefilm', datum: '2026-10-31', gueltig_bis: '2026-11-30', referenz: 'Paket Breitbild',
  positionen,
  oeffentliche_notizen: 'Wenn du die Texte der Website nicht selbst schreiben willst, übernehme ich das: alle Texte nach einem Gespräch mit dir, CHF 960 (Texte schreiben, Firmenwebsite, CHF 1\'200, 20 % weniger).\n\nAblauf: Start nach deiner Freigabe, fertig in acht Wochen, vor den Schnupperlehren im März. Der Drehtag findet in Woche 4 statt, an einem Tag, an dem Werner in der Werkstatt ist.',
  bedingungen: 'Festpreis, ohne Mehrwertsteuer. Bezahlt wird in drei Etappen: Branding CHF 2\'640 nach der Freigabe des Logos, Website CHF 3\'050 beim Livegang, Film CHF 2\'960 bei der Abgabe. Zwei Korrekturrunden pro Etappe sind inbegriffen.',
  unterschriftsseite: 1 } }), 'offerte');
const id = r.id;
const b = (await api(`betreiber_beleg_lesen.php?id=${id}`, { token })).beleg;
console.log(JSON.stringify({ id, nummer: b.nummer, total: b.total_rappen, zwischen: b.summen?.zwischensumme_rappen, mwst: b.summen?.mwst, token }));
fs.writeFileSync(new URL('./stand.json', import.meta.url), JSON.stringify({ id, token }));
