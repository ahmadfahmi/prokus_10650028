<html>
<body>
<?php
$con=mysql_connect("localhost","root","") or die ('error = '.mysql_error());
mysql_select_db('ppdb') or die ('error = '.mysql_error());
if(isset($_GET['id']))
{
$id=$_GET['id'];
$q = "delete from komen where id_komen='$id'";
$query = @mysql_query($q) or die ("error = ".mysql_error());
if($query){
header('Location: komen.php');
}
}
?>

</body>
</html>
