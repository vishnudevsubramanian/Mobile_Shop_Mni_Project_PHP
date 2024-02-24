<html>
 <head>
 <title>REGISTRATION FORM</title>
</head>
<body bgcolor="sky blue">
<center>
<form action="<?php $_PHP_SELF?>" method="POST">
<table border="20">
<tr>
<td><center><b>REGISTER FORM </b></center></td>
</tr>
<tr>
<td>FIRST NAME:<input type="text" name="firstname">
</td></tr>
<tr>
<td>LAST NAME:<input type="text" name="lastname">
</td></tr>
<tr>
<td>
<input type="radio" name="a" value="male">MALE
<input type="radio" name="a" value="female">FEMALE
</td>
</tr>
<tr>
<td>
USERNAME:<input type="text" name="username">
</tr>
</td>
<tr>
<td>
PASSWORD:<input type="text" name="password">
</td>
</tr>
<tr>
<td>
COUNTRY:<select name="nj">
<option value="india">INDIA</option>
<option value="japan">JAPAN</option>
<option value="ausralia">AUSTRALIA</option>
<option value="newzland">NEWZLAND</option>
<option value="thailand">THAILAND</option>
<option value="china">CHINA</option>
</select>
</td>
</tr>
<tr>
<td>
PHONE NUMBER:<input type="number" name="phonenumber">
</tr>
</td>
<tr>
<td>
EMAIL ADDRESS:<input type="text" name="email">
<tr>
<td>
<center><input type="submit" name="save" value="save">
</center>
</td>
</tr>
</table>
</form>
</body>
</html>
<?php
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$db= "dbnj";
$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $db);
if ($conn->connect_error) {
die("connection failed: ".$conn->connect_error);
}
//echo "connected successfully";
if (isset($_POST["save"])) {
$firstname=$_POST["firstname"];
$lastname=$_POST["lastname"];
$gender=$_POST["a"];
$country=$_POST["nj"];
$phonenumber=$_POST["phonenumber"];
$email=$_POST["email"];
$username=$_POST["username"];
$password=$_POST["password"];
$sql= "INSERT INTO user(firstname,lastname,gender,country,phonenumber,email,username,password) VALUES('$firstname','$lastname','$gender','$country',$phonenumber,'$email','$username','$password')";
if(mysqli_query($conn,$sql))
{
echo "<br>registration successfull";
//header("Location: register.php");
}
else
{
echo "error: ". $sql . "<br>" . mysqli_error($conn);
}
}
?>


