// Das Menue am Handy: oeffnen ueber jeden .menuknopf (Kopfzeile und
// Mitlaufleiste), schliessen ueber das Kreuz, Escape oder einen Link darin.
// Der Fokus geht beim Oeffnen aufs Kreuz und beim Schliessen zurueck auf den
// Knopf, der geoeffnet hat.
(() => {
  const menu = document.getElementById('menuoffen');
  if (!menu) return;
  const zu = menu.querySelector('.zu');
  let herkunft = null;
  function oeffnen(knopf) {
    herkunft = knopf;
    menu.hidden = false;
    document.body.classList.add('menu-auf');
    document.querySelectorAll('.menuknopf').forEach(k => k.setAttribute('aria-expanded', 'true'));
    zu.focus();
  }
  function schliessen() {
    if (menu.hidden) return;
    menu.hidden = true;
    document.body.classList.remove('menu-auf');
    document.querySelectorAll('.menuknopf').forEach(k => k.setAttribute('aria-expanded', 'false'));
    if (herkunft && herkunft.isConnected && !herkunft.closest('[inert]')) herkunft.focus();
  }
  document.querySelectorAll('.menuknopf').forEach(k => k.addEventListener('click', () => oeffnen(k)));
  zu.addEventListener('click', schliessen);
  // Ein Ziel auf derselben Seite: Menue zu und ohne Fahrt hinspringen. Das
  // weiche Scrollen der Seite liefe sonst ueber die ganze Laenge, waehrend
  // das Menue zuklappt und die Leiste kommt und geht; das wirkt unruhig.
  // Was am Ziel noch auf seinen Auftritt wartet (.auf), steht sofort da.
  menu.querySelectorAll('a').forEach(a => a.addEventListener('click', (e) => {
    const ziel = a.hash && a.origin === location.origin && a.pathname === location.pathname && document.querySelector(a.hash);
    schliessen();
    if (!ziel) return;
    e.preventDefault();
    const auf = [...ziel.querySelectorAll('.auf')]; if (ziel.classList.contains('auf')) auf.push(ziel);
    auf.forEach(el => { el.style.transition = 'none'; el.classList.add('da'); void el.offsetWidth; el.style.transition = ''; });
    // instant, nicht auto: auto hiesse scroll-behavior der Seite, und die ist smooth.
    ziel.scrollIntoView({ behavior: 'instant', block: 'start' });
    history.pushState(null, '', a.hash);
  }));
  addEventListener('keydown', e => { if (e.key === 'Escape') schliessen(); });
  // Wird das Fenster breit, ist das Menue in der Leiste, das offene braucht es nicht mehr.
  matchMedia('(min-width:761px)').addEventListener('change', e => { if (e.matches) schliessen(); });
})();
