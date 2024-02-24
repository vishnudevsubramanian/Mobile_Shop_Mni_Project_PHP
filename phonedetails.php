<html>
 <head>
<center>
 <title>PHONE DETAILS</title>
</head>
<body bgcolor="skyblue">
<form action="<?php $_PHP_SELF?>" method="POST">
<table border="30" height="520" width="500">
<tr>
<td colspan="2"><center><b><h2>PHONE DETAILS<h2></b></center></td>
</tr>
<tr>
<td>PHONENAME:</td><td><input type="text" name="phonename"><br>
</td></tr>
<tr>
<td>MODEL:</td><td><input type="text" name="model"><br>
</td></tr>
<tr>
<td>STOCK:</td><td><input type="text" name="stock"></td><br>
</tr>
<tr>
<td>IMAGE:</td><td><input type="text" name="image"></td><br>
</tr>
<tr>
<td colspan="2">
<center><input type="submit" name="save" value="BUY NOW"><br>
</td>
</tr>
</center>
</table>
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
?>
