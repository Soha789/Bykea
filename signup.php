<!DOCTYPE html>
<html>
<head>
<title>Signup - Bykea Clone</title>
<style>
body{font-family:Poppins;background:#eafaf0;margin:0;}
.box{width:350px;background:#fff;margin:60px auto;padding:25px;border-radius:15px;box-shadow:0 3px 10px rgba(0,0,0,0.1);}
h2{text-align:center;color:#00b14f;}
input{width:100%;padding:10px;margin:10px 0;border:1px solid #ccc;border-radius:8px;}
.btn{width:100%;background:#00b14f;color:#fff;padding:10px;border:none;border-radius:8px;cursor:pointer;font-size:16px;}
.btn:hover{background:#009247;}
.link{text-align:center;margin-top:10px;}
</style>
</head>
<body>
<div class="box">
  <h2>Create Account</h2>
  <input type="text" id="name" placeholder="Full Name">
  <input type="email" id="email" placeholder="Email">
  <input type="password" id="pass" placeholder="Password">
  <button class="btn" onclick="signup()">Sign Up</button>
  <div class="link">Already have an account? <a href="login.php">Login</a></div>
</div>
<script>
function signup(){
 alert('Account created successfully!');
 window.location='login.php';
}
</script>
</body>
</html>
