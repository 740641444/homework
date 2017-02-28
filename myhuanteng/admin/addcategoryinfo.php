<?php
    include "session.php";
    include "db.php";
    
    $cname=$_GET["cname"];
    $pid=$_GET["pid"];
    $sql="insert into category (cname,pid) value ('$cname','$pid')";
    $result=$db->query($sql);
    if($result){
    	$massage="恭喜您！添加成功";
    	$url="addcategory.php";
    	include "tishi.php";
    }
?>