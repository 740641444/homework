<?php
include "db.php";
$title=$_GET["title"];
$text=$_GET["text"];
$data=$_GET["data"];
$sql="insert into news (title,text,data) value ('$title','$text','$data')";
$result=$db->query($sql);

if($result>0){
	echo "1";
}
?>