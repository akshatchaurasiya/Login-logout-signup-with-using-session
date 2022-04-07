<?php
 
    $hName='localhost'; // host name
 
    $uName='Root';   // database user name
 
    $password='leooffice';   // database password
 
    $dbName = "chaurasiya_ji"; // database name
 
    $dbCon = mysqli_connect($hName,$uName,$password,$dbName);
 
      if(!$dbCon){
          die('Could not Connect MySql Server:' .mysql_error());
      }
?>