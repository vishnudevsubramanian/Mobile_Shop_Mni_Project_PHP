<html>
 <head>
 <title>REGISTRATION FORM</title>
</head>
<body>
<center>
<form action="<?php $_PHP_SELF ?>" method="POST">
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
$db = "studentzz";
$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $db);
if ($conn->connect_error) {
die("connection failed: ".$conn->connect_error);
}
echo "connected successfully";
/*$sql ="CREATE DATABASE studentzz";
if ($conn->query($sql) === TRUE) {
echo "DATABASE CONNECTED SUCCESSFULLY";
} else {
echo "error creating database: " . $conn->error;
}*/
if (isset($_POST["save"])) {
$firstname=$_POST["firstname"];
$lastname=$_POST["lastname"];
$gender=$_POST["a"];
$sql ="INSERT INTO studentzz(firstname,lastname,gender)VALUES('$firstname','$lastname','$gender')";
if (mysqli_query($conn, $sql)) {
echo "NEW RECORD CREATED SUCCESSFULLY";
} else {
echo"ERROR: " . $sql . "<br>" . mysqli_error($conn);
}
}
if (isset($_POST["update"])) {
$firstname=$_POST["firstname"];
$lastname=$_POST["lastname"];
$gender=$_POST["a"];
$sql = "UPDATE studentzz SET lastname = '$lastname',gender='$gender' WHERE firstname = '$firstname'" ;
if (mysqli_query($conn, $sql)) {
echo "NEW RECORD UPDATED SUCCESSFULLY";
} else {
echo"ERROR: " . $sql . "<br>" . mysqli_error($conn);
}
}
if (isset($_POST["delete"])) {
$firstname=$_POST["firstname"];
//$lastname=$_POST["lastname"];
//$gender=$_POST["a"];
$sql = "DELETE FROM studentzz WHERE firstname = '$firstname'";
if (mysqli_query($conn, $sql)) {
echo "NEW RECORD DELETED SUCCESSFULLY";
} else {
echo"ERROR: " . $sql . "<br>" . mysqli_error($conn);
}
}
if (isset($_POST["view"])) {
$sql="select * from studentzz";
$result=$conn->query($sql);
if($result->num_rows>0)
{
echo "<table border=2>";
echo "<tr>";
echo "<td>";
echo "firstname";
echo "</td>";
echo "<td>";
echo "lastname";
echo "</td>";
echo "<td>";
echo "gender";
echo "</td>";
echo "</tr>";
while($row=$result->fetch_assoc())
{
echo "<tr>";
echo "<td>";
echo $row["firstname"];
echo "</td>";
echo "<td>";
echo $row["lastname"];
echo "</td>";
echo "<td>";
echo $row["gender"];
echo "</td>";
echo "</tr>";
}
echo "</table>";
}
else 
{
echo " no row selected";
}
}
$conn->close();
?>
