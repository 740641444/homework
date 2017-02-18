<?php
include "db.php";
$a=$_GET["a"];
$b=$_GET["b"];
$c=$_GET["c"];
$sql="update stu set $b='$c' where id='$a' ";
$result=$db->query($sql);
echo $result;
?>