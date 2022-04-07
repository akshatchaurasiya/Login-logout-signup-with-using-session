<?php
$host="localhost";
$user="Root";
$pass="leooffice";
$db="chaurasiya_ji";

$conn=mysqli_connect($host, $user, $pass, $db);

if(!$conn)
{
  die("Connection failed");
}
echo "Connected"."<br>";

?>