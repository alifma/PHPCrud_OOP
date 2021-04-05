<?php 

$host = "localhost";
$user = "root";
$pass = "password";
$dbname = "db_toko";

$con = new mysqli($host, $user, $pass, $dbname);

if($con->connect_error) {
  echo "Failed to connect database :".$con->connect_error;
  die();
}
?>