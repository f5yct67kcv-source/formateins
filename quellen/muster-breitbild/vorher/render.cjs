const { chromium } = require('playwright');
(async () => {
  const [,, datei, aus, breite, hoehe, voll] = process.argv;
  const b = await chromium.launch();
  const p = await b.newPage({ viewport: { width: +breite, height: +hoehe }, deviceScaleFactor: 1 });
  await p.goto('file://' + datei);
  await p.evaluate(() => document.fonts.ready);
  await p.waitForTimeout(300);
  await p.screenshot({ path: aus, fullPage: voll === 'voll' });
  await b.close();
})();
