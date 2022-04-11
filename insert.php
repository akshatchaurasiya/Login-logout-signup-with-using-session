<?php
include 'logincon.php';

$name=$_POST['name'];
$email=$_POST['email'];
$pass=$_POST['pass'];
$cpass=$_POST['cpass'];
$pwd=md5($pass);
$str1=$_POST['capt'];
$str2=$_POST['textinput'];

/*var_dump($name);
var_dump($email);
var_dump($pass);
var_dump($cpass);
var_dump($pwd);
var_dump($str1);
var_dump($str2);
exit;
*/


       if($name!="" && $email!="" && $pwd!="")
        {
          if ($pass!=$cpass)
          {
            echo '<script>alert("Your Password not Matched")</script>';?>
            <script type="text/javascript">window.location=history.back(); </script><?php
          }
          else
          {
            if ($str1==$str2)
            {
              $sql = "INSERT INTO `login_form`(`name`, `email`, `pass`) VALUES ('$name','$email','$pwd')";
            }
            else
            {
              echo '<script>alert("Please Enter a valid Captcha")</script>';?>
              <script type="text/javascript">window.location=history.back(); </script><?php
            }
          }
        }
        

        if(mysqli_query($conn, $sql))
        {
          echo '<script>alert("Successfully Signup Please login")</script>';?>
          <script type="text/javascript">window.location='login.php';</script><?php
        }
        /*else
        {
        echo "ERROR not Inserted";
        header('location:signup.php');
      }*/
          






mysql_close($conn);
?>