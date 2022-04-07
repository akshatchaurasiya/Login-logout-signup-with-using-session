<?php
if(count($_POST)>0)
{    
include 'con.php';
$name = $_POST['name'];
$contact = $_POST['contact'];
$email = $_POST['email'];
$gender=$_POST['gender'];
$dob=$_POST['dob'];
$comment=$_POST['comment'];


if(empty($_POST['id']))
{
$query = "INSERT INTO users (name,contact,email,gender,dob,comment)VALUES ('$name','$contact','$email','$gender','$dob','$comment')";
}
else
{
$query = "UPDATE users set id='" . $_POST['id'] . "', name='" . $_POST['name']."', contact='" .$_POST['contact'] ."',email='".$_POST['email']."',gender='".$_POST['gender']. "',dob='" .$_POST['dob'] ."',comment='" .$_POST['comment'] ."' WHERE id='" . $_POST['id'] . "'";
}

$res = mysqli_query($dbCon, $query);

if($res) 
{
echo json_encode($res);
}
else
{
echo "Error: " . $sql . "" . mysqli_error($dbCon);
}
}
?>