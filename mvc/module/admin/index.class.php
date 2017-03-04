<?php
  class index extends main {
      function init(){
//      include "template/admin/index.html";
//      $db=new db("stu");
//				$result=$db->select();
//		
//				$this->smarty->assign('result',$result);
//				$this->smarty->display('admin/index.html');
        $url=FILE_URL."/module/admin/dl.php";
				$this->smarty->assign('url',$url);
        $this->smarty->display("admin/landpage.html");
      }

      function login(){
            $this->smarty->display("admin/login.html");
      }
  }
?>