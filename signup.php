<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>SignUp</title>
<link rel="stylesheet" href="style2.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
<style>
@import url('https://fonts.googleapis.com/css2?family=Fredericka+the+Great&display=swap');
</style>
</head>
<body oncontextmenu="return false">
  <form class="container" method="POST" name="myform" action="insert.php" autocomplete="off" oncontextmenu="return false">
    
    <h1 class="signup">Signup</h1>

    <label for="name"><b>Name</b></label><span class="error">*<?php echo $nameErr;?></span>
    <input type="text" placeholder="Enter Name" name="name" id="name" onkeypress="return event.charCode >= 97 && event.charCode <= 122 || event.charCode >= 65 && event.charCode <= 90 || event.charCode==32" spellcheck="false" required>


    <label for="email"><b>Email</b></label><span class="error">*<?php echo $emailErr;?></span>
    <input type="email" placeholder="Enter Email" name="email" id="email" pattern="[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$" spellcheck="false" required>


    <label for="pass"><b>Password</b></label><span class="error">*<?php echo $passErr;?></span>
    <input type="password" placeholder="Enter Password" name="pass" id="pass" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,12}" spellcheck="false" required>
    <i class="far fa-eye" id="togglePassword" style="position: absolute; margin-top: 5%; margin-left: -6%; cursor: pointer;"></i>

    <div class="pm">Password must have at least <b>one Number</b>, <b>one Uppercase</b> and <b>Lowercase</b> letter, and <b>Minimum 8 Characters</b></div>

 
    <label for="cpss"><b>Confirm Password</b></label><span class="error">*<?php echo $cpassErr;?></span>
    <input type="password" placeholder="Enter Confirm Password" name="cpass" id="cpass" spellcheck="false" required>

    <label for="capt"><b>Captcha</b></label><span class="error">*</span>
    <input type="texts" id="capt" name="capt" class="capt" readonly><a class="re" onclick="cap()">Refresh</a>

    <input type="text" id="textinput" name="textinput" maxlength="6" placeholder="Enter Captcha code" spellcheck="false" required>



    <div class="ex1">
      <input type="checkbox" name="accept" id="accept" onchange="activateButton(this)">
      <label for="accept">I accept the all Terms & Conditions</label>
    </div>

    <button class="btn" type="submit" name="submit" id="submit" onclick="val()" disabled>SignUp</button>

    <div class="ex2">Already have an account? <a href="login.php">Login here</a></div>

  </form>



<script type="text/javascript">

  // start disable submit button code

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
  //end disable submit button code


  //for show password code
  const togglePassword = document.querySelector('#togglePassword');
  const password = document.querySelector('#pass');
 
  togglePassword.addEventListener('click', function (e) {
    // toggle the type attribute
    const type = pass.getAttribute('type') === 'password' ? 'texts' : 'password';
    pass.setAttribute('type', type);
    // toggle the eye slash icon
    this.classList.toggle('fa-eye-slash');
  });
  //end show pass code



//for captcha

function cap()
    {
      var alpha=['A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z','0','1','2','3','4','5','6','7','8','9','a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','u','v','w','x','y','z'];

      var a=alpha[Math.floor(Math.random()*62)];
      var b=alpha[Math.floor(Math.random()*62)];
      var c=alpha[Math.floor(Math.random()*62)];
      var d=alpha[Math.floor(Math.random()*62)];
      var e=alpha[Math.floor(Math.random()*62)];
      var f=alpha[Math.floor(Math.random()*62)];

      /*document.write(a);
      document.write(b);
      document.write(d);
      document.write(e);
      document.write(c);
      document.write(f);*/

      var sum=a+b+c+d+e+f;

      //document.write(sum);

      document.getElementById("capt").value=sum;
    }
    //end captcha code...\



    //for validate captcha code
    function valcap(){
      var str1=document.getElementById('capt').value;
      var str2=document.getElementById('textinput').value
      if (str1==str2)
      {
        alert("Successfully");
        return true;
      }
      else
      {
        alert("please enter a valid captacha");
        return false;
      }

    }


//for copy paste in input field and call captcha
    window.onload = () => {

      cap();  //for catpcha

      //for name input copy paste off
      const name = document.getElementById('name');
      name.onpaste = e => e.preventDefault();
      name.oncopy = e => e.preventDefault();


      //for email input copy paste off
      const email = document.getElementById('email');
      email.onpaste = e => e.preventDefault();
      email.oncopy = e => e.preventDefault();


      //for pass input copy paste off
      const pass = document.getElementById('pass');
      pass.onpaste = e => e.preventDefault();
      pass.oncopy = e => e.preventDefault();


      //for cpass input copy paste off
      const cpass = document.getElementById('cpass');
      cpass.onpaste = e => e.preventDefault();
      cpass.oncopy = e => e.preventDefault();


      //for capt input copy paste off
      const capt = document.getElementById('capt');
      capt.onpaste = e => e.preventDefault();
      capt.oncopy = e => e.preventDefault();


      //for textinput input copy paste off
      const textinput = document.getElementById('textinput');
      textinput.onpaste = e => e.preventDefault();
      textinput.oncopy = e => e.preventDefault();
    }
    //end disable copy paste code

</script>
</body>
</html>
