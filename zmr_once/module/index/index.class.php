<?php
class index extends main{
    function init(){
    	if(isset($_SESSION["name"])){
 	        $flag1="flag";
		  	$this->smarty->assign('flag1',$flag1); 
		  	$name=$_SESSION["name"];
		  	$this->smarty->assign('name',$name);   		
	        $url3="index.php?a=tuichu";
		  	$this->smarty->assign('url3',$url3);	  	
	        $url4="index.php?a=chakan";
		  	$this->smarty->assign('url4',$url4);	  	
	        $this->smarty->display("index/index.html");     		
    	}else{
 	        $flag2="flag";
		  	$this->smarty->assign('flag2',$flag2);   		
	        $url1="index.php?a=dl";
		  	$this->smarty->assign('url1',$url1);
	        $url2="index.php?a=zc";
		  	$this->smarty->assign('url2',$url2);		
	        $this->smarty->display("index/index.html");    		
    	}
    }
    
    //跳转登录页面
    function dl(){
        $url2="index.php?a=zc";
	  	$this->smarty->assign('url2',$url2);   	
    	$this->smarty->display("index/dl.html"); 
    }
    //跳转注册页面
    function zc(){
        $url1="index.php?a=dl";
	  	$this->smarty->assign('url1',$url1);
//      $url1="index.php?a=dl";
//	  	$this->smarty->assign('url1',$url1);	  	     	
    	$this->smarty->display("index/zc.html"); 
    }
    //注册用户名验证
    function nameyz(){
    	$name=P("name");
    	$db=new db("user");
    	$result=$db->select();
    	for($i=0;$i<count($result);$i++){
    		if($result[$i]["name"]==$name){
    			echo "1";
    			exit();
    		}
    	}
    }
    //提交表单注册
    function zhuce(){
    	$name=P("name");
    	$password=P("password");
    	//设置时区
    	date_default_timezone_set("Asia/Shanghai");
    	$date=date("Y/m/d H:i:s");
    	$password=md5($password.$date);
    	$db=new db("user"); 
    	//判断用户名是否重复
    	$result=$db->select();
    	for($i=0;$i<count($result);$i++){
    		if($result[$i]["name"]==$name){
    		    $this->jump("index.php","账号已经存在");
    			exit();
    		}
    	}
    	//如果不重复继续执行注册语句
    	$result=$db->insert("insert into user (name,password,date) values ('".$name."','".$password."','".$date."')");
    	if($result==1){
    		$this->jump("index.php","恭喜您！注册成功");
    	}else{
    		$this->jump("index.php","注册失败！请重新注册");
    	}
    }
    //登录账号
    function denglu(){
     	$name=P("name");
    	$password=P("password");   
    	$db=new db("user"); 
    	$result=$db->select();
//  	var_dump($_SESSION["arr"]);
    	if(!isset($_SESSION["arr"])){
    		$_SESSION["arr"]=Array();
    	}
    	for($i=0;$i<count($result);$i++){
    		if($result[$i]["name"]==$name){
    			if(md5($password.$result[$i]["date"])==$result[$i]["password"]){

    				array_push($_SESSION["arr"],$result[$i]);
    				
    				date_default_timezone_set("Asia/Shanghai");
                	$date=date("Y/m/d H:i:s");
    	            $password=md5($password.$date);
    	            $db->filed("password='".$password."',date='".$date."'")->where("id=".$result[$i]["id"])->update();
    		        $_SESSION["name"]=$name;
    		        $this->jump("index.php","恭喜您！登录成功");	
    		        exit();
    			}
    		}
    	}
    	$this->jump("index.php","账号或密码不正确");
    	exit();
    }
    //账号退出
    function tuichu(){
    	unset($_SESSION["name"]);
    	$this->jump("index.php","您已经退出");
    }
    
    //此后都需要判断SESSION
    
    //查看密码页面
    function chakan(){
    	if(isset($_SESSION["name"])){
		  	$name=$_SESSION["name"];
		  	$this->smarty->assign('name',$name);   		
	        $url3="index.php?a=tuichu";
		  	$this->smarty->assign('url3',$url3);	  	
	        $url4="index.php?a=chakan";
		  	$this->smarty->assign('url4',$url4);
		  		 
 	 	    $all=JSON_encode($_SESSION["arr"]);
			$this->smarty->assign('all',$all);
		    $this->smarty->display("index/chakan.html");     		
    	}else{
    		$this->jump("index.php","请登录");
    	}
    }


}
?>