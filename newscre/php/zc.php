<?php
include "db.php";
$name=$_POST["name"];
$password=md5($_POST["password"]);
$sql="insert into user (name,password,role) value ('$name','$password','1')";
$db->query($sql);
if($db->affected_rows){
	$url="../landpage.html";
    $massage="恭喜您！注册成功";
	include "tishi.php";
}
?>