const {chromium}=require('playwright');
(async()=>{const d=process.argv[2];const b=await chromium.launch({args:['--allow-file-access-from-files']});
const p=await b.newPage({viewport:{width:1080,height:1920}});await p.goto('file://'+d+'/titel.html');await p.evaluate(()=>document.fonts.ready);
for(const [k,t] of [['social','Social Media'],['erklaer','Erklärvideo'],['werbe','Werbevideo'],['betrieb','Imagefilm']]){
 await p.evaluate(t=>document.getElementById('t').textContent=t,t);await p.screenshot({path:`${d}/titel-${k}.png`,omitBackground:true});}
await b.close();})();
