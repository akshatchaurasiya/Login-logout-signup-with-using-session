<?php
include 'logincon.php';

$name=$_POST['name'];
$email=$_POST['email'];
$pass=$_POST['pass'];
$cpass=$_POST['cpass'];
$pwd=md5($pass);

/*var_dump($name);
var_dump($email);
var_dump($pass);
var_dump($cpass);
exit;*/

if($name!="" && $email!="" && $pwd!="")
{
  if ($pass!=$cpass)
  {
    echo '<script>alert("Your Password not Matched")</script>';?>
    <script type="text/javascript">window.location='signup.php';</script><?php
  }

  else
  {
    $sql = "INSERT INTO `login_form`(`name`, `email`, `pass`) VALUES ('$name','$email','$pwd')";
  }
}

if(mysqli_query($conn, $sql))
{
  echo "Successfully Inserted.";
  header('location:login.php');
}
/*else
{
  echo "ERROR not Inserted";
  header('location:signup.php');
}*/


mysql_close($conn);
?>