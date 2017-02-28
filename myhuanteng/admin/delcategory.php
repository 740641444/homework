<?php
include "session.php";
include "db.php";

$id=$_GET["id"];

$selsql="select * from category where pid=".$id;
$selresult=$db->query($selsql);
while($selrow=$selresult->fetch_assoc()){
	if($selrow["pid"]==$id){
		$massage="请删除子元素！";
		$url="guanlicategory.php";
		include "tishi.php";
		exit;
	}
}


$sql="delete from category where id=".$id;
$result=$db->query($sql);
if($result){
	$massage="删除成功！";
	$url="guanlicategory.php";
	include"tishi.php";
}

?>