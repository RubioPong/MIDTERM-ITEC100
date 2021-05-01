<?php session_start();
$error = NULL;



if(isset($_POST['login'])){
  $u = $_POST['user'];
  $p = $_POST['pass'];
  $log="Login";
  $ve = "ViewLog";


    $mysqli = NEW MySQLi('Localhost','root','','awit');
      
      
    $resultset = "SELECT * FROM awitise where user = '$u' and pass = '$p'";

    if($result=mysqli_query($mysqli,$resultset)){
       $check = mysqli_num_rows($result);
       $row = mysqli_fetch_array($result);
      }
    
    if($check>0){
      $query = "INSERT INTO lab(User,Activity) values ('$u','$log')";
      $result1 = mysqli_query($mysqli, $query);
   
        $_SESSION['user'] = $u;
        $_SESSION ['pass'] = $p;
         header ('Location: mode.php');
      }
     


     $resultset2 = "SELECT * FROM adminaccount where admin_user = '$u' and pass = '$p'";
    if($result=mysqli_query($mysqli,$resultset2)){
       $check = mysqli_num_rows($result);
       $row = mysqli_fetch_array($result);
      }
    
    if($check>0){
        $_SESSION['user'] = $u;
        $_SESSION ['pass'] = $p;
         header ('Location: log.php');
      }
     
      else{
        echo "<script>alert('Login Failed');</script>";

      }

  } 


    
?>

<?php


if(isset($_POST['pota']))
{
  $hostname = "localhost";
  $username = "root";
  $password = "";
  $dbname = "awit";

  $connect = mysqli_connect($hostname, $username, $password, $dbname);

  $y = $_SESSION['user'];
  $x = $_SESSION['pass'];
  $code = $_POST['code'];
    
  $query = "INSERT INTO keycode(user, pass, vcode) values ('$y','$x','$code')";

  $result = mysqli_query($connect, $query);

  if($result)
  {
    header('Location: verifi.php');
  }
  else
  {
    echo "fail";

  }

  mysqli_close($connect);

}
?>  




<?php
if(isset($_POST['logout']))
{
$hostname = "localhost";
  $username = "root";
  $password = "";
  $dbname = "awit";

  $connect = mysqli_connect($hostname, $username, $password, $dbname);

  $y = $_SESSION['user'];
  $act = "Logout";
    
  $query = "INSERT INTO lab(User, Activity) values ('$y','$act')";

  $result = mysqli_query($connect, $query);

  if($result)
  {
    header('Location: s1.php');
  }
  else
  {
    echo "fail";

  }

  mysqli_close($connect);

}
?>