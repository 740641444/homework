<?php
include "session.php";
include "db.php";

$id=$_GET["id"];

$sql="delete from shows where id=".$id;
$result=$db->query($sql);
if($result){
	$massage="删除成功！";
	$url="guanlishow.php";
	include"tishi.php";
}

?>