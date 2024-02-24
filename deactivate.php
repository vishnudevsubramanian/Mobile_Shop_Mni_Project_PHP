<html>
 <head>
  <title>DEACTIVATE</title>
 </head>
 <body>
  <center><br><br><br><br>
  <form action="<?php $_POST_SELF ?>" method="POST"> 
   <table border="2">
   <tr><td>ENTER USERNAME:</td><td><input type="text" name="user"></td></tr>
   <td colspan="2"><center><input type="submit" name="delete" value="DEACTIVATE" onclick="return confirm('ARE YOU SURE WANT TO DEACTIVATE?');"">
   </table>
  </form>
  </center>
 </body>
<html>
<?php
 $dbhost="localhost";
 $dbuser="root";
 $dbpass="";
 $db="dbnj";
 $conn=mysqli_connect($dbhost,$dbuser,$dbpass,$db);
 if($conn->connect_error)
 {
  die("CONNECTION FAILED : ".$conn->$connect_error);
 }
 //echo "CONNECTED SUCESSFULLY";
 if(isset($_POST["delete"]))
 {
  $user=$_POST["user"];
  $sql3="DELETE FROM user WHERE USERNAME='$user'";
  $result=mysqli_query($conn,$sql3);
   if(mysqli_query($conn, $sql3))
   {
    echo ("ACCOUNT REMOVED SUCCESFULLY");
    header("Location:userlogin.php");
   }
   else
   {
    echo "error". $sql3 ."<br>" .mysqli_error($conn);
   }
  }
?>

