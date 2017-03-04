<?php

class session{
	function __construct(){
		session_start();
	}
	
	function set($k,$v){
		if(is_array($sk)){
			foreach($k as $k1=>$v1){
				$_SESSION[$k1]=$v1;
			}
		}else{
			$_SESSION[$k]=$v;
		}
		
	}
	
	function del($k){
		unset($_SESSION[$k]);
	}
	
	function delall(){
		foreach($_SESSION as $k=>$v){
			unset($_SESSION[$k]);
		}
	}
	
}

?>