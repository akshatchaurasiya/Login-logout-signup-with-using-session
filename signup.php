<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>SignUp</title>
<link rel="stylesheet" href="style2.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
</head>
<body oncontextmenu="return false">
  <form class="container" method="POST" name="myform" action="insert.php">
    
    <h1 align="center">Signup</h1>

    <label for="name"><b>Name</b></label><span class="error">*<?php echo $nameErr;?></span>
    <input type="text" placeholder="Enter Name" name="name" id="name" onkeypress="return event.charCode >= 97 && event.charCode <= 122 || event.charCode >= 65 && event.charCode <= 90 || event.charCode==32" spellcheck="false">


    <label for="email"><b>Email</b></label><span class="error">*<?php echo $emailErr;?></span>
    <input type="email" placeholder="Enter Email" name="email" id="email" pattern="[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$" spellcheck="false">


    <label for="pass"><b>Password</b></label><span class="error">*<?php echo $passErr;?></span>
    <input type="password" placeholder="Enter Password" name="pass" id="pass" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,12}" title="" spellcheck="false">
    <i class="far fa-eye" id="togglePassword" style="position: absolute; margin-top: 5%; margin-left: -6%; cursor: pointer;"></i>

    <div class="pm">Password must have at least <b>one Number</b>, <b>one Uppercase</b> and <b>Lowercase</b> letter, and <b>Minimum 8 Characters</b></div>


    <label for="cpss"><b>Confirm Password</b></label><span class="error">*<?php echo $cpassErr;?></span>
    <input type="password" placeholder="Enter Confirm Password" name="cpass" id="cpass" spellcheck="false">
    <i class="far fa-eye" id="togglePassword2" style="position: absolute; margin-top: 5%; margin-left: -6%; cursor: pointer;"></i>

    <div class="ex1">
      <input type="checkbox" name="accept" id="accept" onchange="activateButton(this)">
      <label for="accept">I accept the all Terms & Conditions</label>
    </div>

    <button class="btn" type="submit" name="submit" id="submit" disabled>SignUp</button>

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



const togglePassword = document.querySelector('#togglePassword');
  const password = document.querySelector('#pass');
 
  togglePassword.addEventListener('click', function (e) {
    // toggle the type attribute
    const type = pass.getAttribute('type') === 'password' ? 'texts' : 'password';
    pass.setAttribute('type', type);
    // toggle the eye slash icon
    this.classList.toggle('fa-eye-slash');
});
  const togglePassword2 = document.querySelector('#togglePassword2');
  const cpass = document.querySelector('#cpass');
 
  togglePassword2.addEventListener('click', function (f) {
    // toggle the type attribute
    const type = cpass.getAttribute('type') === 'password' ? 'texts' : 'password';
    cpass.setAttribute('type', type);
    // toggle the eye slash icon
    this.classList.toggle('fa-eye-slash');
});

</script>
</body>
</html>
