
<!DOCTYPE html>
<html>
<head>
  <title>Login Form </title>
  <link rel = "stylesheet"
      href = "style/login.css">


</head>
<body style="background-image: url('danilo.jpg');">
  <div class="login-page">
  <div class="form">
    <form method = "post" class="login-form" action = "s2.php">
       <h2 class="img"> <img src="Nike.png" width="100", height="30"></h2>
    <h2 class="ur">YOUR ACCOUNT FOR EVERYTHING NIKE</h2>
    <br>
      <input type="text" placeholder="username" name = "user" required="" />
      <input type="password" placeholder="password" name = "pass" required="" />
      <button type  = "submit" name = "login" id = "myBtn">login</button>
      <p class="message">Not registered? <a href="signup.php">Create an account</a></p>
      <a id="ref" href="forgot.php">For got Password?</a>
    </form>
  </div>
</div>








</body>
</html>
