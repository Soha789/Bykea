<!DOCTYPE html>
<html>
<head>
<title>Login - Bykea Clone</title>
<style>
body{font-family:Poppins;background:#f0f9f3;margin:0;}
.box{width:350px;background:#fff;margin:80px auto;padding:25px;border-radius:15px;box-shadow:0 3px 10px rgba(0,0,0,0.1);}
h2{text-align:center;color:#00b14f;}
input{width:100%;padding:10px;margin:10px 0;border:1px solid #ccc;border-radius:8px;}
.btn{width:100%;background:#00b14f;color:#fff;padding:10px;border:none;border-radius:8px;cursor:pointer;font-size:16px;}
.btn:hover{background:#009247;}
.link{text-align:center;margin-top:10px;}
</style>
</head>
<body>
<div class="box">
  <h2>Login</h2>
  <input type="email" id="email" placeholder="Email">
  <input type="password" id="pass" placeholder="Password">
  <button class="btn" onclick="login()">Login</button>
  <div class="link">No account? <a href="signup.php">Sign up</a></div>
</div>
<script>
function login(){
 let e=document.getElementById("email").value;
 if(e=="driver@bykea.com"){window.location="driver.php";}
 else{window.location="index.php";}
}
</script>
</body>
</html>
