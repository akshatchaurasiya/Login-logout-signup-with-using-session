<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Forget</title>
<link rel="stylesheet" href="style2.css">

</head>
<body>

  <form action="login.php" class="con_for">
    <div class="title"><a href="login.php"><img src="back.png"></a>Forget</div>

    <label for="name"><b>Name</b></label>
    <input type="text" placeholder="Enter Name" name="name" id="name" onkeypress="return event.charCode >= 97 && event.charCode <= 122 || event.charCode >= 65 && event.charCode <= 90 || event.charCode==32" required>

    <label for="email"><b>Email</b></label>
    <input type="email" placeholder="Enter Email" name="email" id="email" pattern="[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$" required>

    <button class="btn" type="submit" id="submit">Show Password</button>

  </form>

</body>
</html>
