<html>
 <head>
 <title>REGISTRATION FORM</title>
</head>
<body>
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
</tr><tr><td colspan ="2">
<input type="submit" name="save" value="save">
<input type="submit" name="update" value="update">
<input type="submit" name="view" value="view">
<input type="submit" name="delete" value="delete">
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
$db="MARKSS";
$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $db);
if ($conn->connect_error) {
die("connection failed: ".$conn->connect_error);
}
echo "connected successfully";
if (isset($_POST["save"])) {
$firstname=$_POST["firstname"];
$lastname=$_POST["lastname"];
$gender=$_POST["a"];
$sql ="INSERT INTO student(firstname,lastname,gender)VALUES('$firstname','$lastname','$gender')";
if (mysqli_query($conn, $sql)) {
echo "NEW RECORD CREATED SUCCESSFULLY";
} else {
echo"ERROR: " . $sql . "<br>" . mysqli_error($conn);
}
}
if (isset($_POST["delete"])) {
$lastname=$_POST["lastname"];
$sql ="DELETE FROM student WHERE lastname='$lastname'";
if (mysqli_query($conn,$sql)) {
echo "1 record deleted";
} else {
echo "error: " . $sql . "<br>" . mysqli_error($conn);
}
}
?>

