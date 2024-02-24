<html>
<head>
</head>
<body background="qq.png">
<form action="<?php $_PHP_SELF ?>" method="POST">
<center>
<table border="2">
<tr>
<td><img src="AA.png"></td>
<td><input type="text" name="mode">
</td>
</tr>
<tr>
<td colspan="2"><center> 
<input type="submit" value="view" name="view"><input type="submit" value="view all" name="views"></center>
</td>
</tr>
</table>
</center>
</form>
</body>
</html>
<?php
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$db= "dbnj";
$conn = mysqli_connect($dbhost, $dbuser, $dbpass,$db);
if ($conn->connect_error) {
die("connection failed: ".$conn->connect_error);
}
//echo "connected successfully";
if(isset($_POST['view']))
 {
  $mode= $_POST["mode"];
  $sql3="SELECT * FROM phonedetails WHERE phonemodel='$mode'";
  $result=$conn->query($sql3);
  if($result->num_rows>0)
  {
   echo "<TABLE BORDER=5";
   echo "<tr>";
   echo "<td>";
   echo "MODEL";
   echo "</td>";
   echo "<td>";
   echo "STOCK";
   echo "</td>";
   echo "</tr>";
   while($row=$result->fetch_assoc())
   {
    echo "<tr>";
    echo "<td>";
    echo $row['model'];
    echo "</td>";
    echo "<td>";
    echo $row['stock'];
    echo "</td>";
    echo "</tr>";
   }
   echo "</table>";
  }
  else
  {
   echo "NO MOBILES SELECTED";
  }
 }
 if(isset($_POST['views']))
 {
  $sql3="SELECT * FROM phonedetails";
  $result=$conn->query($sql3);
  if($result->num_rows>0)
  {
   echo "<TABLE BORDER=5";
   echo "<tr>";
   echo "<td>";
   echo "PHONENAME";
   echo "</td>";
   echo "<td>";
   echo "STOCK";
   echo "</td>";
   echo "</tr>";
   while($row=$result->fetch_assoc())
   {
    echo "<tr>";
    echo "<td>";
    echo $row['phonemodel'];
    echo "</td>";
    echo "<td>";
    echo $row['stock'];
    echo "</td>";
    echo "</tr>";
   }
   echo "</table>";
  }
  else
  {
   echo "NO MOBILES SELECTED";
  }
 }
 $conn->close(); 
?>


