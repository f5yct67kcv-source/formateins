const {chromium}=require('playwright');
(async()=>{const dir=process.argv[2],N=+process.argv[3];const b=await chromium.launch({args:['--allow-file-access-from-files']});
const p=await b.newPage({viewport:{width:360,height:640},deviceScaleFactor:3});
await p.goto('file://'+dir+'/profil.html');await p.evaluate(()=>document.fonts.ready);await p.waitForTimeout(400);
for(let i=0;i<N;i++){await p.evaluate(t=>render(t),i/30);
 await p.evaluate(()=>Promise.all([...document.images].map(i=>i.decode().catch(()=>{}))));
 await p.waitForTimeout(25);
 await p.screenshot({path:`${dir}/fr/f${String(i).padStart(4,'0')}.jpg`,type:'jpeg',quality:92});}
await b.close();})();
