<?php
/* Smarty version 3.1.30, created on 2017-03-09 09:39:21
  from "F:\wamp\www\zmr_once\template\index\dl.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58c114b9bd6030_29982112',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0106c6907ab4a9ab64c1db1f37e5c0b54792abf4' => 
    array (
      0 => 'F:\\wamp\\www\\zmr_once\\template\\index\\dl.html',
      1 => 1489048758,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58c114b9bd6030_29982112 (Smarty_Internal_Template $_smarty_tpl) {
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
		<?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/dl.js"><?php echo '</script'; ?>
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
	<h1>欢迎您的登录</h1>
	<form action="index.php?a=denglu" method="post">
		<div class="name">
			<label>账号：</label>
			<input type="text" name="name" id="" tabindex="1" autocomplete="off" /><br />
			<span>请输入您的账号</span>
		</div>
		<div class="password">
			<label>密码：</label>
			<input type="password" name="password" maxlength="16" id="" tabindex="2"/><br />
			<span>请输入您的密码</span>
		</div>
		<div class="login">
			<input type="submit" tabindex="5" value="登录"><a class="tiaozhuan" href="<?php echo $_smarty_tpl->tpl_vars['url2']->value;?>
">我没有账号</a>
		</div>
	</form>
</div>
</div>		
	</body>
</html>
<?php }
}
