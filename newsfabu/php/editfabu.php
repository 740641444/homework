<?php
include "db.php";
$id=$_GET["id"];
$sql="select * from news where id='$id'";
$result=$db->query($sql);
$row=$result->fetch_assoc();
$row=json_encode($row);
echo $row;
?>