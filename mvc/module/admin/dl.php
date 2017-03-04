<?php
	session_start();
include "db.php";
$name=$_POST["name"];
$password=md5($_POST["password"]);
$sql="select * from user";
$result=$db->query($sql);
while($row=$result->fetch_assoc()){
	if($row["name"]=="$name"&&$row["password"]=="$password"){
		$_SESSION["flag"]="1";
		$massage="恭喜您！登陆成功";
		$url="../admin.php";
		include "tishi.php";
		exit;
	}
}
$massage="登陆失败";
$url="../landpage.html";
include "tishi.php";
?>