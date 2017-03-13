<?php
/* Smarty version 3.1.30, created on 2017-03-09 10:09:08
  from "F:\wamp\www\zmr_once\template\index\zc.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58c11bb4541040_65087161',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bf0fd1d612f0efb15614ecbd2fc7180cec0cb4b0' => 
    array (
      0 => 'F:\\wamp\\www\\zmr_once\\template\\index\\zc.html',
      1 => 1489049827,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58c11bb4541040_65087161 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title></title>
		<link rel="stylesheet" type="text/css" href="<?php echo CSS_PATH;?>
/public.css"/>
		<link rel="stylesheet" type="text/css" href="<?php echo CSS_PATH;?>
/zc.css"/>
		<?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/jquery.min.js"><?php echo '</script'; ?>
>
		<!--<?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/jquery.validate.js"><?php echo '</script'; ?>
>-->
		<?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/zc.js"><?php echo '</script'; ?>
>
	</head>
	<body>
<div class="zmr_bg">
	<div class="zmr_bgbox zmr_bgxuan"><img src="<?php echo IMG_PATH;?>
/001.jpg" alt="" /></div>
	<div class="zmr_bgbox"><img src="<?php echo IMG_PATH;?>
/002.jpg" alt="" /></div>
	<div class="zmr_bgbox"><img src="<?php echo IMG_PATH;?>
/003.jpg" alt="" /></div>
	<div class="zmr_bgbox"><img src="<?php echo IMG_PATH;?>
/004.jpg" alt="" /></div>
	<div class="zmr_bgbox"><img src="<?php echo IMG_PATH;?>
/005.jpg" alt="" /></div>
	<div class="zmr_bgbox"><img src="<?php echo IMG_PATH;?>
/006.jpg" alt="" /></div>
	<div class="zmr_bgbox"><img src="<?php echo IMG_PATH;?>
/007.jpg" alt="" /></div>
	<div class="zmr_bgbox"><img src="<?php echo IMG_PATH;?>
/008.jpg" alt="" /></div>
<div class="login-box">
	<h1>欢迎您的使用，请注册账号</h1>
	<form action="index.php?a=zhuce" method="post" id="myform">
		<div class="name">
			<label>注册账号：</label>
			<input type="text" name="name" id="name" autocomplete="off" /><br />
			<span>请输入以字母开头6到10位账号</span>
		</div>
		<div class="password">
			<label>注册密码：</label>
			<input type="password" name="password" maxlength="16" id="password" /><br />
			<span>请输入6到10位密码</span>
		</div>
		<div class="code">
			<label>再次输入：</label>
			<input type="password" name="password2" id="password2"   /><br />
			<span>请确认密码</span>
		</div>
		<div class="login">
			<input type="button" id="sub" tabindex="5" value="注册"><a class="tiaozhuan" href="<?php echo $_smarty_tpl->tpl_vars['url1']->value;?>
">我有账号</a>
		</div>
	</form>
</div>
</div>		
	</body>
</html>
<?php }
}
