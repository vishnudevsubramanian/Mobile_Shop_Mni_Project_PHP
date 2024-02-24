<html>
 <head>
<center>
 <title>DELIEVERY ADDRESS</title>
</head>
<body bgcolor="skyblue">
<form action="<?php $_PHP_SELF?>" method="POST">
<table border="30" height="520" width="500">
<tr>
<td colspan="2"><center><b><h2>DELIEVERY ADDRESS<h2></b></center></td>
</tr>
<tr>
<td>FIRST NAME:</td><td><input type="text" name="firstname"><br>
</td></tr>
<tr>
<td>LAST NAME:</td><td><input type="text" name="lastname"><br>
</td></tr>
<tr>
<td>ADDRESS:</td><td><input type="text" name="address"></td><br>
</tr>
<tr>
<td>LANDMARK:</td><td><input type="text" name="landmark"></td><br>
</tr>
<tr>
<td>PHONE MODEL</td>
<td><select name="model">><option><--SELECT-->
<option>samsungbase
<option>samsungguru
<option>samsungguru2
<option>samsungnxt
<option>samsungj6
<option>samsungon8
<option>samsunga30
<option>samsunga8
<option>nokia106
<option>nokia130
<option>nokia1
<option>redmik20pro
<option>redmi6a
<option>redmi5a
<option>redminote7
<option> pocof1
<option>iphone8
<option>iphonexr
<option>iphone6s
<option>oppof11
<option>oppoa7
<option>oppoa1k
<option>oppoa3s
<option>oppoa5
</select>
</td></tr>
<tr>
<td>
PHONE NUMBER:</td><td><input type="number" name="phonenumber"><br>
</tr>
</td>
<tr>
<td>
EMAIL ADDRESS:</td><td><input type="text" name="email"><br>
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
if (isset($_POST["save"])) {
$firstname=$_POST["firstname"];
$lastname=$_POST["lastname"];
$address=$_POST["address"];
$landmark=$_POST["landmark"];
$phonemodel=$_POST["model"];
$phonenumber=$_POST["phonenumber"];
$email=$_POST["email"];
$date=date('Y/m/d');


$sql= "INSERT INTO delieveryaddress (firstname,lastname,addrress,landmark,phonemodel,phonenumber,email,date) VALUES ('$firstname','$lastname','$address','$landmark','$phonemodel',$phonenumber,'$email','$date')";
if(mysqli_query($conn,$sql))
{
//header("Location:success.php");
}
else
{
echo "error: ". $sql . "<br>" . mysqli_error($conn);
}
}
if(isset($_POST['save']))
 {
  $mode=$_POST["model"];
  $sql3="SELECT stock FROM phonedetails WHERE phonemodel='$mode'";

  $result=mysqli_query($conn,$sql3);
  if(mysqli_num_rows($result) > 0)
  {
     while($row = mysqli_fetch_assoc($result))
    {
     $s=$row["stock"];
     //echo $s;
     $o = $s - 1;
     //echo $o;
     $sql ="UPDATE phonedetails SET stock = $o WHERE phonemodel = '$mode'";
     //echo $sql;
     if(mysqli_query($conn,$sql))
     {
        echo"updated successfully ";
      header("Location:success.php");
     }
    }
  
  }
  else
  {
   echo "error: ". $sql . "<br>" . mysqli_error($conn);
  }
 }
  $conn->close(); 
     
    
?>







