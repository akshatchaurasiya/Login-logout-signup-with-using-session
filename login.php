<?php
    session_start();
    $message="";
    if(count($_POST)>0) {
        $con = mysqli_connect('localhost','Root','leooffice','chaurasiya_ji') or die('Unable To connect');
        $password=$_POST['pass'];
        $pwd = md5($password);


        $result = mysqli_query($con,"SELECT * FROM login_form WHERE email='" . $_POST["email"] . "' and pass = '". $pwd ."'");

        $row  = mysqli_fetch_array($result);
        if(is_array($row)) {
        $_SESSION["id"] = $row['id'];
        $_SESSION["name"] = $row['name'];
        } else {
         $message = "Invalid Email or Password!<br>";
        }
    }
    if(isset($_SESSION["id"])) {
    header("Location:index.php");
    }
?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Login</title>
<link rel="stylesheet" type="text/css" href="style2.css">
</head>
<body>

  <form action="" method="post" class="container">
    <h1 align="center">Login</h1>

    <center><label style="color: red;">
      <?php if($message!="") { echo $message; } ?>
      </label></center>

    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email" pattern="[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$" required>

    <label for="pass"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="pass" id="pass" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,12}" title="Must contain at least one number and one uppercase and lowercase letter, and minimum 8 characters" required>
    <input type="checkbox" onclick="myFunction()" title="Show Password">


    <input type="checkbox" checked="checked" name="remember"> Remember me
    <!-- <a href="forget.php" class="forget">Forget Password</a> -->

    <button type="submit" class="btn">Login</button>
    <div class="ex2">Not registered? <a href="signup.php">Create an account</a></div>
  </form>




<script>
function myFunction() {
  var x = document.getElementById("pass");
  if (x.type === "password") {
    x.type = "texts";
  } else {
    x.type = "password";
  }
}
</script>



</body>
</html>