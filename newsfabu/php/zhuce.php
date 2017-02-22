<?php
include "db.php";
$name=$_GET["name"];
$mima=$_GET["mima"];
$ssh=$_GET["ssh"];
$sql="insert into people (name,mima,ssh) values ('$name','$mima','$ssh')";
$result=$db->query($sql);
echo $result;
?>