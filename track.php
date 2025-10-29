<!DOCTYPE html>
<html>
<head>
<title>Track Ride - Bykea Clone</title>
<style>
body{font-family:Poppins;background:#f9fdf8;margin:0;}
header{background:#00b14f;color:#fff;padding:15px;text-align:center;font-size:24px;}
.card{width:340px;margin:60px auto;background:#fff;padding:25px;border-radius:15px;box-shadow:0 3px 10px rgba(0,0,0,0.1);text-align:center;}
.status{font-size:18px;margin:20px 0;color:#333;}
.bar{height:12px;width:80%;margin:0 auto;border-radius:10px;background:#ddd;overflow:hidden;}
.fill{height:100%;width:0;background:#00b14f;transition:width 1s;}
</style>
</head>
<body>
<header>Ride Tracking</header>
<div class="card">
  <div class="status" id="status">Finding Driver...</div>
  <div class="bar"><div class="fill" id="fill"></div></div>
  <p id="info"></p>
</div>
<script>
let pct=0;
let f=document.getElementById("fill");
let s=document.getElementById("status");
let info=document.getElementById("info");
let interval=setInterval(()=>{
 pct+=20;
 f.style.width=pct+"%";
 if(pct==40)s.innerText="Driver Found!";
 if(pct==80)s.innerText="On the Way...";
 if(pct==100){s.innerText="Arrived!";info.innerHTML="Your driver has reached pickup point 🚴‍♂️";clearInterval(interval);}
},1000);
</script>
</body>
</html>
