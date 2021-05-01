<?php
$link = mysqli_connect("localhost","root","");
mysqli_select_db($link,"infoassu");

?>



<!DOCTYPE html>
<html>
<head>
	<title>	</title>
	<link rel = "stylesheet"
			href = "styles/design3.css">

</head>
<body>
  <div class="login-page">
  <div class="form">
 
    <form class="login-form" method="post">
      <input type="text" placeholder="Enter your ID" name = "id"/>
      <input type="text" placeholder="Enter your Username" name = "user"/>
      <input type="text" placeholder="Enter your Old Password" name = "old"/>
      <input type="password" placeholder="Enter Your New Password" name = "new"/>
      <input type="password" placeholder="Confirm Password" name = "cpwd"/>

      <button type  = "submit" name = "change">Change Password</a></button>
      
<p class="message">Not registered? <a href="login.php">Create an account</a></p>
    </form>
  </div>
</div>

<?php
if(isset($_POST['change'])){
  $id = $_POST['id'];
  $n1 = $_POST['user'];
  $opwd = $_POST['old'];
  $conf = $_POST['cpwd'];
  $act = "Change Password";
 
$tb2= "UPDATE user set password = '$_POST[new]' where id = '$id'";

if(mysqli_query($link,$tb2)){
  $query = "INSERT INTO logs(username,activity) values ('$n1','$act')";
  $resultset = mysqli_query($link, $query);
  header ('Location: login.php');
  echo '<script> alert("Change Password Successfully")</script>';
}
else{
  echo '<script>alert("Login Failed")</script>'; 
}

}
?>


</body>
</html>