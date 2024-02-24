<html>
<body>
<form action="<?php $_PHP_SELF?>"method="GET">
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
function palindrome($number)
{
$temp=$number;
$new=0;
while(floor($temp))
{
$d=$temp%10;
$new=$new*10+$d;
$temp=$temp/10;
}
if($new==$number)
{
return 1;
}
else
{
return 0;
}
}
if(palindrome($number))
{
echo "palindrome";
}
else
{
echo "not palindrome";
}
?>

