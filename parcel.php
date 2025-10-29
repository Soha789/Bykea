<!DOCTYPE html>
<html>
<head>
<title>Send Parcel - Bykea Clone</title>
<style>
body{font-family:Poppins;background:#f8fbff;margin:0;}
header{background:#00b14f;color:#fff;padding:15px;text-align:center;font-size:24px;}
.box{width:380px;background:#fff;margin:40px auto;padding:25px;border-radius:15px;box-shadow:0 3px 10px rgba(0,0,0,0.1);}
label{font-weight:500;}
input,textarea{width:100%;padding:10px;margin:8px 0;border:1px solid #ccc;border-radius:8px;}
.btn{width:100%;background:#00b14f;color:#fff;padding:10px;border:none;border-radius:8px;margin-top:10px;font-size:16px;}
.btn:hover{background:#009247;}
</style>
</head>
<body>
<header>Send Parcel</header>
<div class="box">
  <label>Pickup Address:</label>
  <input type="text" id="p1">
  <label>Drop-off Address:</label>
  <input type="text" id="p2">
  <label>Parcel Details:</label>
  <textarea id="details" placeholder="Describe parcel (e.g., documents, food, etc.)"></textarea>
  <button class="btn" onclick="sendParcel()">Send Parcel</button>
</div>
<script>
function sendParcel(){
 let p1=document.getElementById("p1").value;
 let p2=document.getElementById("p2").value;
 if(!p1||!p2){alert("Please enter both addresses.");return;}
 localStorage.setItem("parcel",p1+" → "+p2);
 alert("Parcel booked successfully!");
 window.location="track_status.php";
}
</script>
</body>
</html>
