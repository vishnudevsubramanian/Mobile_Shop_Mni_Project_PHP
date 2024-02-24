<html>
<head>
<title>userlogin</title>
</head>
<body background="and.jpg">
<form action="<?php $_PHP_SELF ?>" method="POST"><center>
<table border="2">
<tr>
<td>
username:
</td>
<td><input type="text" name="user">
</td>
</tr>
<tr>
<td colspan="2"><center><input type="submit" name="view" value="view"></center>
</td>
</tr>
</table>
</form>
</body>
</html>
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
  if(isset($_POST["view"]))
{
  $user=$_POST["user"];
  $sql2="SELECT * FROM user WHERE username='$user'";
  //echo $sql2;
  $result=mysqli_query($conn,$sql2);
  if($result->num_rows > 0)
  {
   echo "<table border=2 cellpadding=15>";
   echo "<tr>";
   echo "<td>";
   echo "id";
   echo "</td>";
   echo "<td>";
   echo "firstname";
   echo "</td>";
   echo "<td>";
   echo "lastname";
   echo "</td>";
   echo "<td>";
   echo "gender";
   echo "</td>";
   echo "<td>";
   echo "country";
   echo "</td>";
   echo "<td>";
   echo "phonenumber";
   echo "</td>";
   echo "<td>";
   echo "email";
   echo "</td>";
   echo "<td>";
   echo "username";
   echo "</td>";
   echo "</tr><";
   while($row=mysqli_fetch_assoc($result))
   {
    echo "<tr>";
    echo "<td>";
    echo "<center>$row[id]</center>";
    echo "</td>";
    echo "<td>";
    echo "<center>$row[firstname]</center";
    echo "</td>";
    echo "<td>";
    echo "<center>$row[lastname]</center";
    echo "</td>";
    echo "<td>";
    echo "<center>$row[gender]</center";
    echo "</td>";
    echo "<td>";
    echo "<center>$row[country]</center";
    echo "</td>";
    echo "<td>";
    echo "<center>$row[phonenumber]</center";
    echo "</td>";
    echo "<td>";
    echo "<center>$row[email]</center";
    echo "</td>";
    echo "<td>";
    echo "<center>$row[username]</center";
    echo "</td>";
    echo "</tr></center>";
   } 
   echo "</table>";
  }
  else
  {
   echo "error". $sql2 ."<br>" .mysqli_error($conn);
   //echo "NO ROWS SELECTED";
  }
}
?>
