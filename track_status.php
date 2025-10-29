<!DOCTYPE html>
<html>
<head>
<title>Track Status - Bykea Clone</title>
<style>
body{font-family:Poppins;background:#f9fcfa;margin:0;}
header{background:#00b14f;color:#fff;padding:15px;text-align:center;font-size:24px;}
.box{width:350px;margin:60px auto;background:#fff;padding:25px;border-radius:15px;box-shadow:0 3px 10px rgba(0,0,0,0.1);text-align:center;}
.status{color:#333;font-size:18px;margin-top:15px;}
.btn{background:#00b14f;color:#fff;padding:10px 18px;border:none;border-radius:8px;cursor:pointer;font-size:16px;margin-top:20px;}
.btn:hover{background:#009247;}
</style>
</head>
<body>
<header>Delivery Status</header>
<div class="box">
  <h3 id="type"></h3>
  <div class="status" id="msg"></div>
  <button class="btn" onclick="back()">Back to Home</button>
</div>
<script>
let ride=localStorage.getItem("ride");
let parcel=localStorage.getItem("parcel");
if(ride){document.getElementById("type").innerText="Ride Request";document.getElementById("msg").innerText="Driver accepted your ride: "+ride;}
else if(parcel){document.getElementById("type").innerText="Parcel Delivery";document.getElementById("msg").innerText="Driver accepted your parcel: "+parcel;}
else{document.getElementById("msg").innerText="No active deliveries.";}
function back(){window.location='index.php';}
</script>
</body>
</html>
