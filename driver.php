<!DOCTYPE html>
<html>
<head>
<title>Driver Portal - Bykea Clone</title>
<style>
body{font-family:Poppins;background:#f0f9f5;margin:0;}
header{background:#00b14f;color:#fff;padding:15px;text-align:center;font-size:24px;}
.table{margin:30px auto;width:80%;background:#fff;border-radius:10px;box-shadow:0 3px 10px rgba(0,0,0,0.1);}
table{width:100%;border-collapse:collapse;}
th,td{padding:12px;text-align:left;border-bottom:1px solid #eee;}
th{background:#00b14f;color:#fff;}
.btn{background:#00b14f;color:#fff;padding:7px 14px;border:none;border-radius:6px;cursor:pointer;}
.btn:hover{background:#008a3e;}
</style>
</head>
<body>
<header>Driver Dashboard</header>
<div class="table">
<table>
<tr><th>Request Type</th><th>Route</th><th>Action</th></tr>
<tbody id="requests"></tbody>
</table>
</div>
<script>
let requests=[];
if(localStorage.getItem("ride"))requests.push({type:"Ride",route:localStorage.getItem("ride")});
if(localStorage.getItem("parcel"))requests.push({type:"Parcel",route:localStorage.getItem("parcel")});
let tbl="";
requests.forEach((r,i)=>{tbl+=`<tr><td>${r.type}</td><td>${r.route}</td><td><button class='btn' onclick='accept(${i})'>Accept</button></td></tr>`});
document.getElementById("requests").innerHTML=tbl||"<tr><td colspan='3'>No requests yet.</td></tr>";
function accept(i){
 alert(requests[i].type+" accepted!");
 window.location="track_status.php";
}
</script>
</body>
</html>
