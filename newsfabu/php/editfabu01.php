<?php
include "db.php";
$id=$_GET["id"];
$title=$_GET["title"];
$text=$_GET["text"];

$sql="update news set title='$title',text='$text' where id='$id'";
$result=$db->query($sql);
if($result>0){
	echo "1";
}
?>