<?php

$host = 'localhost'; 
$user = 'root';   
$pass = "";   
$database = 'php_crud';     


  $conn = mysqli_connect($host,$user,$pass,$database);   

 
  if (!$conn) {                                             
    die("Connection failed: " . mysqli_connect_error());     
  }
?>


