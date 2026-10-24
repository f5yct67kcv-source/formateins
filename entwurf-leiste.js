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
  menu.querySelectorAll('a').forEach(a => a.addEventListener('click', schliessen));
  addEventListener('keydown', e => { if (e.key === 'Escape') schliessen(); });
  // Wird das Fenster breit, ist das Menue in der Leiste, das offene braucht es nicht mehr.
  matchMedia('(min-width:761px)').addEventListener('change', e => { if (e.matches) schliessen(); });
})();
