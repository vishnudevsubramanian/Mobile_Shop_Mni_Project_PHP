<html>
<body>
<form action="<?php $_PHP_SELF?>" method="GET">
number:<input type="number" name="num"/>
<input type="submit" value="save"/>
</form>
</body>
</html>
<?php
if(isset($_GET["num"]))
{
$number=$_GET["num"];
}
function primecheck($number)
{
if($number==1)
return 0;
for($i=2; $i<=$number/2; $i++)
{
if($number%$i==0)
return 0;
}
return 1;
}
$flag=primecheck($number);
if(flag==1)
echo "prime"
else
echo "not prime";
?>
