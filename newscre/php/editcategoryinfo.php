<?php
    include "session.php";
    include "db.php";
    
    $cname=$_GET["cname"];
    $pid=$_GET["pid"];
    $id=$_GET["id"];
    $desql="delete from category where id=".$id;
    $deresult=$db->query($desql);
    if($deresult){
	    $sql="insert into category (cname,pid) value ('$cname','$pid')";
	    $result=$db->query($sql);
	    if($result){
	    	$massage="恭喜您！修改成功";
	    	$url="guanlicategory.php";
	    	include "tishi.php";
	    }    	
    }
    

?>