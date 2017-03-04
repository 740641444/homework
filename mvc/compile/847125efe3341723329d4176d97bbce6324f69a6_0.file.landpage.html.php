<?php
/* Smarty version 3.1.30, created on 2017-03-03 09:36:15
  from "F:\wamp\www\myblog\template\admin\landpage.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58b92aff16a983_52280272',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '847125efe3341723329d4176d97bbce6324f69a6' => 
    array (
      0 => 'F:\\wamp\\www\\myblog\\template\\admin\\landpage.html',
      1 => 1488530173,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58b92aff16a983_52280272 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title></title>
		<?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/jquery.min.js"><?php echo '</script'; ?>
>
<style>
	
.zmr_landbox{
	width: 500px;height: 250px;
	padding: 50px 0;
	position: absolute;
	top: 0;bottom: 0;left: 0;right: 0;
	margin: auto auto;
	border: 1px solid #000;
	text-align: center;
	line-height: 30px;
}

	
</style>

	</head>
	<body>

<div class="zmr_landbox">
	<h2>管理员登陆系统</h2>
	<form action="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
" method="post">
		管理员账号：<input type="text" id="name" name="name" value="" /><br />
		<span></span><br />
		管理员密码：<input type="text" id="password" name="password" value="" /><br />
		<span></span><br />
		验证码：<input type="text" /><br /><img src="<?php echo CODE_PATH;?>
/code.class.php"/><br />
		<input type="submit" id="btn" value="登陆" /><br />
	</form>
</div>

	</body>
</html>
<?php }
}
