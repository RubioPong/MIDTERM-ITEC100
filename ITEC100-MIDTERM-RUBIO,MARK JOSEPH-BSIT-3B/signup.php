<?php
$link = mysqli_connect("localhost","root","");
mysqli_select_db($link,"awit");

?>

<!DOCTYPE html>
<html>
<head>
	<title>Create an Account</title>
	<link rel = "stylesheet"
			href = "singup.css">
</head>
<body>
<!-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------->
<div class="main-w3layouts wrapper">
<!-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------->
		<div class="main-agileinfo">
<!-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------->
			<div class="agileits-top">
<!-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------->
				<h2 class="img"> <img src="Nike.png" width="100", height="30"></h2>
<!-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------->
				<h1>Sign Up</h1>
<!-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------->
				<form action="#" method="post">
<!-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------->
					<input class="text" type="text" name="username" placeholder="Username" required= ""/>
					<input class="text email" type="email" name="email" placeholder="Email" required=""/>
					<input class = "text" type="password" id="password" name="password" placeholder = "Password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required = ""/>
					<input class = "text w3lpass" type="password" id="password1" name="password" placeholder="Confirm Passowrd" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required = ""/>
	
					<button class = "submit" type="submit" value="Sign Up" name = "submit">Sign Up</button>
				</form>	
				<p>Join Us Now? <a href="s1.php"> Login Now!</a></p>
			</div>
		</div>
<!-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------->
	
<!-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------->
<?php

if(isset($_POST['submit'])){

$n1=$_POST['username'];
$n2=$_POST['password'];

$stmt="INSERT INTO awitise (user,pass)VALUES('$n1','$n2')";

if(mysqli_query($link,$stmt)){
	header("Location: s1.php");
}
else{
	echo "fail";
}
}
?>

</body>
</html>