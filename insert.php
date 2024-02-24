<html>
 <head>
<center>
 <title>INSERT MOBILES</title>
</head>
<body bgcolor="skyblue">
<form action="<?php $_PHP_SELF?>" method="POST">
<table border="30" height="520" width="500">
<tr>
<td colspan="2"><center><b><h2>ADD MOBILES<h2></b></center></td>
</tr>
<tr>
<td>ID:</td><td><input type="number" name="id"><br>
</td></tr>
<tr>
<td>PHONEMODEL:</td><td><input type="text" name="phonename"><br>
</td></tr>
<tr>
<td>
STOCK:</td><td><input type="number" name="stock"><br></td>
</tr>

<tr>
<td>
image:</td><td> <input type="file" name="image" />
<input type="submit" value="upload" name="submit1">
</td>
</tr>
<tr>
<td colspan="2">
<center><input type="submit" name="add"><br>
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



if (isset($_POST["add"])) {
$id = $_POST["id"];
$phonename = $_POST["phonename"];
//$model = $_POST["model"];
$stock = $_POST["stock"];
$image=$_POST["image"];
$filepath = "/home/user/Downloads/" . $_POST["image"];

$image=$filepath;
echo $image;
$sql= "INSERT INTO phonedetails (id,phonemodel,stock,image) VALUES ($id,'$phonename','$stock','$image')";
if(mysqli_query($conn,$sql))
{
echo "inserted";

header("Location:success1.php");
}
else
{
echo "failed";

echo "error: ". $sql . "<br>" . mysqli_error($conn);
}
}
?>

