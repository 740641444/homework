<?php
include "session.php";
include "db.php";

$id=$_GET["id"];


$sql="delete from user where id=".$id;
$result=$db->query($sql);
if($result){
	$massage="删除成功！";
	$url="guanliuser.php";
	include"tishi.php";
}

?>