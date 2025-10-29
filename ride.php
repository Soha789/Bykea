<!DOCTYPE html>
<html>
<head>
<title>Book Ride - Bykea Clone</title>
<style>
body{font-family:Poppins;background:#f7fcf8;margin:0;}
header{background:#00b14f;color:#fff;padding:15px;text-align:center;font-size:24px;}
.box{width:380px;background:#fff;margin:40px auto;padding:25px;border-radius:15px;box-shadow:0 3px 10px rgba(0,0,0,0.1);}
label{font-weight:500;}
input{width:100%;padding:10px;margin:8px 0;border:1px solid #ccc;border-radius:8px;}
.btn{width:100%;background:#00b14f;color:#fff;padding:10px;border:none;border-radius:8px;margin-top:10px;font-size:16px;}
.btn:hover{background:#009247;}
</style>
</head>
<body>
<header>Book a Ride</header>
<div class="box">
  <label>Pickup Location:</label>
  <input type="text" id="pickup">
  <label>Drop-off Location:</label>
  <input type="text" id="drop">
  <button class="btn" onclick="book()">Book Ride</button>
</div>
<script>
function book(){
  let pickup=document.getElementById("pickup").value;
  let drop=document.getElementById("drop").value;
  if(!pickup||!drop){alert("Please enter both locations.");return;}
  localStorage.setItem("ride",pickup+" → "+drop);
  alert("Ride booked successfully!");
  window.location="booking.php"; // optional placeholder
  window.location="track.php";
}
</script>
</body>
</html>
