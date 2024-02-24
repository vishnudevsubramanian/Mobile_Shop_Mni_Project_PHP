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
function factorial($number)
{
$factorial=1;
for($i=1; $i<=$number; $i++)
{
$factorial=$factorial*$i;
}
return $factorial;
}
$fact=factorial($number);
echo "factorial=$fact";
?>
