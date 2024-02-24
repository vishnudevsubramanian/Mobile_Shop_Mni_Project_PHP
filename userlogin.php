<html>
<head>
<title>userlogin</title>
</head>
<body background="and.jpg">
<form action="<?php $_PHP_SELF ?>" method="POST"><center>
<table border="2">
<tr>
<td colspan="2"><center><img src="PP.png"></center>
<tr>
<td>
name:
</td>
<td><input type="text" name="txtname">
</td>
</tr>
<tr>
<td>
password:
</td>
<td><input type="password" name="pass">
</td>
</tr>
<tr>
<td colspan="2"><center><input type="submit" name="login" value="login"></center>
</td>
</tr>
</table>
</form>
<a href="register.php"><img src="nn.png"></a>
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
 die("connection failed:".$conn->connect_error);
}
//echo"<br> connected successfully";
if(isset($_POST["login"] ))
{
 $uname=$_POST["txtname"];
 $pass=$_POST["pass"];
 $sql2="SELECT password,username FROM user WHERE username='$uname'";
//echo $sql2;
 $result=mysqli_query($conn,$sql2);
if(mysqli_num_rows($result)>0)
{
while($row = mysqli_fetch_assoc($result))
{
$upwd=$row["password"];
$usname=$row["username"];
echo $upwd;
echo $usname;
}
}
else
{
 //echo "0 results";
//echo "incorrect password";
$upwd=",khu.oglj,hjgkhgljkmhj;o.li.jk.ghumjh,kdgy";
$usname=";hlo,ukmyjjn,bigyumgfnjybhgynjugh";
}
 if($upwd==$pass && $usname==$uname)
{
header("Location: user27.php");
}
else
{
echo "incorrect password";
}
}
?>

