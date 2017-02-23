<?php
    session_start();
    if(empty($_SESSION["flag"])){
		$massage="请登录";
	    $url="../landpage.html";
		include "tishi.php";
		exit;
    }
?>