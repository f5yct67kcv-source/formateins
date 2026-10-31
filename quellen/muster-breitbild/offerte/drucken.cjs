const { chromium } = require('playwright');
const fs = require('fs');
const { id, token } = JSON.parse(fs.readFileSync(__dirname + '/stand.json'));
(async () => {
  const b = await chromium.launch();
  const ctx = await b.newContext({ viewport: { width: 1200, height: 900 } });
  await ctx.addInitScript(t => { try { sessionStorage.setItem('fe-token', t); } catch (e) {} }, token);
  const p = await ctx.newPage();
  p.on('pageerror', e => console.error('Seitenfehler', e.message));
  await p.goto('http://127.0.0.1:8810/index.html');
  await p.waitForFunction(() => typeof ofBlattHolen === 'function' && typeof briefkopf !== 'undefined', null, { timeout: 15000 });
  await p.waitForTimeout(1500);
  await p.evaluate(async id => {
    await ladeBriefkopfRoh();
    const a = await ofBlattHolen(id);
    document.getElementById('druckflaeche').innerHTML = ofBlatt(a.beleg, a.kunde, a.person);
  }, id);
  await p.emulateMedia({ media: 'print' });
  await p.pdf({ path: __dirname + '/offerte-kully.pdf', format: 'A4', margin: { top: '18mm', bottom: '18mm', left: '16mm', right: '16mm' }, printBackground: false });
  await p.setViewportSize({ width: 794, height: 1123 });
  await p.screenshot({ path: __dirname + '/offerte-kully.png', fullPage: true });
  console.log('briefkopf', await p.evaluate(() => JSON.stringify(briefkopf).slice(0, 200)));
  await b.close();
})();
