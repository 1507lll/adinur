<!DOCTYPE html>
<html lang="en" dir="ltr"
<head>
  <meta charset="utf-8">
  <title>Animated Login Form</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>

<script>
  function checkValid() {
    let name = document.getElementById('fname');
    var password = document.getElementById('password');
    if(name.value == 'Adinur' && password.value == '54321')
    {
      pageRedirect();
    }else{
      alert('Invalid');
    }
  }
  function pageRedirect() {
    window.location.href = "https://portfoliop.herokuapp.com/";
  }


</script>

<div class="center">
  <h1>Login</h1>
  <form method="post">
    <div class="txt_field">
      <input type="text" id = 'fname' required>
      <span></span>
      <label>Username</label>
    </div>
    <div class="txt_field">
      <input type="password" id = 'password'required>
      <span></span>
      <label>Password</label>
    </div>
    <div class="pass">forgot Password?</div>
    <input type="sumdit" onClick='checkValid();' value="Login">
    <div class="signup_link">
      Not a member? <a href="#">Signup</a>
    </div>
  </form>
</div>


</body>
</html>
