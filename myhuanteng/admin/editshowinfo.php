<?php
    include "session.php";
    include "db.php";
    
    $title=$_GET["title"];
    $text=$_GET["text"];
    $pid=$_GET["pid"];
    $id=$_GET["id"];
    $imgurl=$_GET["imgurl"];
    $desql="delete from shows where id=".$id;
    $deresult=$db->query($desql);
    if($deresult){
	    $sql="insert into shows (title,text,pid,imgurl) value ('$title','$text','$pid','$imgurl')";
	    $result=$db->query($sql);
	    if($result){
	    	$massage="恭喜您！修改成功";
	    	$url="guanlishow.php";
	    	include "tishi.php";
	    }    	
    }
    

?>