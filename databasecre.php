<?php
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$conn = mysqli_connect($dbhost,$dbuser,$dbpass);
if($conn->connect_error) {
die("connection failed: " . $conn->connect_error);
}
 echo "connected successfully";
 $sql="CREATE DATABASE TESTDB";
 if($conn->query($sql)===TRUE)
 {
   echo"DATABASE CREATED SUCCESSFULLY";
}
  else
{
   echo"ERROR CREATING DATABASE".$conn->error;
}
  //$mysqli_close($conn);
?>
