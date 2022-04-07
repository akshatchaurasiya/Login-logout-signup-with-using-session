<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>SignUp</title>
<link rel="stylesheet" href="style2.css">
</head>

<?php

$nameErr = $emailErr = $passErr = $cpassErr = "";
$name = $email = $pass = $cpass = "";

if ($_SERVER["REQUEST_METHOD"] == "POST")
{
  if (empty($_POST["name"]))
  {
    $nameErr = "Required";
  } 
  else
  {
    $name = test_input($_POST["name"]);
  }


  if (empty($_POST["email"]))
  {
    $emailErr = "Required";
  }
  else
  {
    $email = test_input($_POST["email"]);
  }
    

  if (empty($_POST["pass"])) {
    $passErr = "Required";
  }
  else
  {
    $pass = test_input($_POST["pass"]);
  }


  if (empty($_POST["cpass"])) {
    $cpassErr = "Gender is required";
  }
  else
  {
    $cpass = test_input($_POST["cpass"]);
  }
}

function test_input($data)
{
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  include_once('logincon.php');
  return $data;
}
?>
<body>

  <form class="container" method="POST" name="myform" action="insert.php">
    <h1 align="center">Signup</h1>

    <label for="name"><b>Name</b></label><span class="error">*<?php echo $nameErr;?></span>
    <input type="text" placeholder="Enter Name" name="name" id="name" onkeypress="return event.charCode >= 97 && event.charCode <= 122 || event.charCode >= 65 && event.charCode <= 90 || event.charCode==32" spellcheck="false">


    <label for="email"><b>Email</b></label><span class="error">*<?php echo $emailErr;?></span>
    <input type="email" placeholder="Enter Email" name="email" id="email" pattern="[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$" spellcheck="false">


    <label for="pass"><b>Password</b></label><span class="error">*<?php echo $passErr;?></span>
    <input type="password" placeholder="Enter Password" name="pass" id="pass" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,12}" title="Must contain at least one number and one uppercase and lowercase letter, and minimum 8 characters" spellcheck="false">

    <input type="checkbox" onclick="shpass()" title="Show Password">


    <label for="cpss"><b>Confirm Password</b></label><span class="error">*<?php echo $cpassErr;?></span>
    <input type="password" placeholder="Enter Confirm Password" name="cpass" id="cpass" spellcheck="false">

    <input type="checkbox" onclick="shcpass()" title="Show Password">


    <div class="ex1">
      <input type="checkbox" name="accept" id="accept" onchange="activateButton(this)">
      <label for="accept">I accept the all Terms & Conditions</label>
    </div>

    <input class="btn" type="submit" name="submit" id="submit" disabled value="SignUp"/>

    <div class="ex2">Already have an account? <a href="login.php">Login here</a></div>

  </form>



<script type="text/javascript">
  function disableSubmit() 
  {
    document.getElementById("submit").disabled = true;
  }
  function activateButton(element)
  {
    if(element.checked)
    {
      document.getElementById("submit").disabled = false;
    }
    else
    {
      document.getElementById("submit").disabled = true;
    }
  }



function shpass() {
  var x = document.getElementById("pass");
  if (x.type === "password") {
    x.type = "texts";
  } else {
    x.type = "password";
  }
}

function shcpass() {
  var x = document.getElementById("cpass");
  if (x.type === "password") {
    x.type = "texts";
  } else {
    x.type = "password";
  }
}

</script>




</body>
</html>
