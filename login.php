<html>
<head>
<title>LOGIN</title>
</head>
<body><center>
 <form action="<?php $_PHP_SELF ?>" method="POST">
<body background="home.jpg">
<table border="30">
<tr><td>USER NAME : <input type="text" name="user"></td></tr><br><table border="20">
<tr><td>PASSWORD : <input type="password" name="pass"></td></tr><br><table border="20">
<tr><td><center><input type="submit" value="LOGIN" name="login"></center></td></tr><table border="1">
</table>
</form>
</center>
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
 $user=$_POST["user"];
 $pass=$_POST["pass"];
 $sql2="SELECT username,password FROM admin WHERE username='$user'";
//echo $sql2;
 $result=mysqli_query($conn,$sql2);
if(mysqli_num_rows($result)>0)
{
while($row = mysqli_fetch_assoc($result))
{
$usname=$row["username"];
$upwd=$row["password"];
echo $usname;
echo $upwd;
}
}
else
{
 //echo "0 results";
//echo "incorrect password";
$upwd=",khu.oglj,hjgkhgljkmhj;o.li.jk.ghumjh,kdgy";
$usname=";hlo,ukmyjjn,bigyumgfnjybhgynjugh";
}
 if($upwd==$pass && $usname==$user)
{
header("Location: logino.php");
}
else
{
echo "incorrect password";
}
}
?>
