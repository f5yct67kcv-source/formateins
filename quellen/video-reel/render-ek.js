const {chromium}=require('playwright');
(async()=>{const dir=process.argv[2];const b=await chromium.launch({args:['--allow-file-access-from-files']});
const p=await b.newPage({viewport:{width:1080,height:1920}});
await p.goto('file://'+dir+'/endkarte.html');await p.evaluate(()=>document.fonts.ready);
await p.waitForTimeout(300);
const N=+process.argv[3]||105;
for(let i=0;i<N;i++){await p.evaluate(t=>render(t),i/30);await p.screenshot({path:`${dir}/ek/f${String(i).padStart(4,'0')}.png`});}
await b.close();})();
