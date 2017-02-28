<?php
    session_start();
    if(empty($_SESSION["flag"])){
		$massage="请登录";
	    $url="../admin.php";
		include "tishi.php";
		exit;
    }
?>