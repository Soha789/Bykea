<!DOCTYPE html>
<html>
<head>
<title>Bykea Clone – Home</title>
<style>
body{margin:0;font-family:Poppins,Arial;background:#f6f8fb;color:#222;}
header{background:#00b14f;color:#fff;padding:15px;text-align:center;font-size:26px;font-weight:600;}
.container{display:flex;flex-wrap:wrap;justify-content:center;padding:30px;}
.card{background:#fff;margin:15px;padding:25px;border-radius:15px;box-shadow:0 3px 10px rgba(0,0,0,0.1);width:280px;text-align:center;transition:0.3s;}
.card:hover{transform:translateY(-5px);}
.card h2{color:#00b14f;}
.btn{background:#00b14f;color:#fff;padding:10px 18px;border:none;border-radius:8px;cursor:pointer;font-size:15px;margin-top:15px;}
.btn:hover{background:#008a3e;}
footer{text-align:center;padding:15px;color:#666;}
</style>
</head>
<body>
<header>Bykea Clone</header>
<div class="container">
  <div class="card">
    <h2>Book a Ride</h2>
    <p>Fast & affordable motorbike rides across the city.</p>
    <button class="btn" onclick="go('ride.php')">Book Ride</button>
  </div>
  <div class="card">
    <h2>Send a Parcel</h2>
    <p>Deliver packages quickly with trusted riders.</p>
    <button class="btn" onclick="go('parcel.php')">Send Parcel</button>
  </div>
  <div class="card">
    <h2>Become a Driver</h2>
    <p>Join Bykea Clone & earn on your own schedule.</p>
    <button class="btn" onclick="go('driver.php')">Driver Portal</button>
  </div>
</div>
<footer>© 2025 Bykea Clone | Built in PHP</footer>
<script>
function go(p){window.location=p;}
</script>
</body>
</html>
