<?php
/* Smarty version 3.1.30, created on 2017-03-09 16:38:22
  from "F:\wamp\www\zmr_once\template\index\chakan.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58c176ee0b5832_71333466',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '43f79640f89721a4f7ed1238fb8b1b7c37bbdfc2' => 
    array (
      0 => 'F:\\wamp\\www\\zmr_once\\template\\index\\chakan.html',
      1 => 1489073898,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58c176ee0b5832_71333466 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title></title>
		<link rel="stylesheet" type="text/css" href="<?php echo CSS_PATH;?>
/public.css"/>
		<link rel="stylesheet" type="text/css" href="<?php echo CSS_PATH;?>
/bootstrap.min.css"/>
		<link rel="stylesheet" type="text/css" href="<?php echo CSS_PATH;?>
/chakan.css"/>
		<?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/jquery.min.js"><?php echo '</script'; ?>
>
	</head>
	<body>
<!--头部开始-->
<div class="zmr_nav">
	<div class="zmr_navbox">
		<div class="zmr_nav_l">
			
			<div class="zmr_nav_l_z">M<span>r.</span>Z</div>
			<div class="zmr_nav_l_q"></div>
			<div class="zmr_nav_touxiang"></div>
		</div>
		<div class="zmr_nav_r">
			<ul class="tui flag">
				<li>欢迎<span><?php echo $_smarty_tpl->tpl_vars['name']->value;?>
</span>,您的操作<a href="<?php echo $_smarty_tpl->tpl_vars['url3']->value;?>
">退出</a>/<a href="<?php echo $_smarty_tpl->tpl_vars['url4']->value;?>
">查看密码</a></li>
			</ul>
		</div>		
	</div>
</div>
<!--头部结束-->
<div class="zmr_floorbox">
	<div class="zmr_floor">
		<table class="table table-striped">
		  <caption>游客登录信息</caption>
		  <thead>
		    <tr>
		      <th>num</th>
		      <th>username</th>
		      <th>password</th>
		      <th>date</th>
		    </tr>
		  </thead>
		  <tbody>


		  </tbody>
		</table> 			
	
	</div>      	
</div>	
	</body>
</html>
<?php echo '<script'; ?>
>
var arr=<?php echo $_smarty_tpl->tpl_vars['all']->value;?>


var delid=0;
var str="";

for(var i=0;i<arr.length;i++){
	str+="<tr>";
	num=i+1;
	str+="<td>"+num+"</td>";

		str+="<td>"+arr[i]["name"]+"</td>";	
		str+="<td>"+arr[i]["password"]+"</td>";	
		str+="<td>"+arr[i]["date"]+"</td>";	

	str+="</tr>";
}




$("tbody").append(str);




<?php echo '</script'; ?>
><?php }
}
