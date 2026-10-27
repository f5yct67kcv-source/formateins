const {chromium}=require('playwright');
(async()=>{const dir=process.argv[2];const b=await chromium.launch({args:['--allow-file-access-from-files']});
const p=await b.newPage({viewport:{width:900,height:200}});await p.goto('file://'+dir+'/tags.html');await p.evaluate(()=>document.fonts.ready);
for(const [f,txt] of [['tag-social','Social Media'],['tag-erklaer','Erklärvideo'],['tag-werbe','Werbevideo'],['tag-betrieb','Betriebsvideo']]){
 await p.evaluate(t=>document.getElementById('s').textContent=t,txt);
 const el=await p.$('#t');await el.screenshot({path:`${dir}/${f}.png`,omitBackground:true});}
await b.close();})();
