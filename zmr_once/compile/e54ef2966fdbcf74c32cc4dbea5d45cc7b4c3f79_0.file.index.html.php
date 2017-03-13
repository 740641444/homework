<?php
/* Smarty version 3.1.30, created on 2017-03-09 11:11:56
  from "F:\wamp\www\zmr_once\template\index\index.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58c12a6c88be18_76536327',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e54ef2966fdbcf74c32cc4dbea5d45cc7b4c3f79' => 
    array (
      0 => 'F:\\wamp\\www\\zmr_once\\template\\index\\index.html',
      1 => 1489054279,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58c12a6c88be18_76536327 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title></title>
		<link rel="stylesheet" type="text/css" href="<?php echo CSS_PATH;?>
/public.css"/>
		<link rel="stylesheet" type="text/css" href="<?php echo CSS_PATH;?>
/index.css"/>
		<?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/jquery.min.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/index.js"><?php echo '</script'; ?>
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
			<ul class="tui <?php echo $_smarty_tpl->tpl_vars['flag1']->value;?>
">
				<li>欢迎<span><?php echo $_smarty_tpl->tpl_vars['name']->value;?>
</span>,您的操作<a href="<?php echo $_smarty_tpl->tpl_vars['url3']->value;?>
">退出</a>/<a href="<?php echo $_smarty_tpl->tpl_vars['url4']->value;?>
">查看密码</a></li>
			</ul>
			<ul class="deng <?php echo $_smarty_tpl->tpl_vars['flag2']->value;?>
">
				<li><a href="<?php echo $_smarty_tpl->tpl_vars['url1']->value;?>
">登录</a></li>
				<li><a href="<?php echo $_smarty_tpl->tpl_vars['url2']->value;?>
">注册</a></li>
			</ul>
		</div>		
	</div>
</div>
<!--头部结束-->
<div class="zmr_floorbox">
	<div class="zmr_floor">
		<div class="zmr_text zmr_welcome"><span>Welcome to here</span></div>
		<div class="zmr_text zmr_this box1"><span>This is my graduction project</span></div>
		<div class="zmr_text zmr_hope"><span>Web端一次性口令身份认证系统</span></div>
	</div>		
</div>	
	</body>
</html>
<?php }
}
