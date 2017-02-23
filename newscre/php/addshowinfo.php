<?php

include "session.php";
include "db.php";

$pid=$_GET["pid"];
$title=$_GET["title"];
$text=$_GET["text"];

$sql1="select * from category ";
$result1=$db->query($sql1);

while($row=$result1->fetch_assoc()){
	if($row["pid"]==$pid){
		$massage="不能给父级元素加内容";
		$url="addshow.php";
		include "tishi.php";	
		exit;	
	}
}


$sql="insert into shows (title,text,pid) value ('$title','$text','$pid')";
$result=$db->query($sql);

if($result){
	$massage="恭喜您！添加成功";
	$url="addshow.php";
	include "tishi.php";
}

?>