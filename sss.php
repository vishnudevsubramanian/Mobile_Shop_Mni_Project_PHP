<html>
<body>
<form action="<?php $_PHP_SELF ?>" method= "GET">
season: <input type= "text" name="name"/>
<input type="submit" value="save">
</form>
</body>
</html>
<?php
$season=$_GET["name"];
if (isset($_GET["name"]))
{
$season=array("summer","winter","spring","autumn");
$arraylength=count($season);
echo"the lenth is $arraylength";
}
?>

