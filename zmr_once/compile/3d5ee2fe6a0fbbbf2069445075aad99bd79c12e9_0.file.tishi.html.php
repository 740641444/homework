<?php
/* Smarty version 3.1.30, created on 2017-03-09 23:38:44
  from "F:\wamp\www\zmr_once\template\index\tishi.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58c177045bf551_73069531',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3d5ee2fe6a0fbbbf2069445075aad99bd79c12e9' => 
    array (
      0 => 'F:\\wamp\\www\\zmr_once\\template\\index\\tishi.html',
      1 => 1489073916,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58c177045bf551_73069531 (Smarty_Internal_Template $_smarty_tpl) {
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
			html,body{
				width: 100%;height: 100%;
			}
			*{
				margin: 0;padding: 0;list-style: none;
			}
			.bg{
				width: 100%;
				height: 100%;
				background: url(static/images/008.jpg);
				background-size: 100% auto;
				-webkit-filter: blur(8px);
                filter: blur(8px);
			}
			.box{
				width: 400px;height: 200px;
				padding: 50px 0;
				/*border: 1px solid #000000;*/
				position: fixed;
				top: 0;bottom: 0;left: 0;right: 0;
				margin: auto auto;
				text-align: center;

                background: rgba(50,50,50,0.4);
                border-radius:10px;
				text-shadow:0 1px 4px rgba(0,0,0,.2);
			}
			.chenggong{
				font-size: 25px;
				color: #ffffff;
				line-height: 100px;
			}
			.zi{
				color: #ffffff;
			}
			.zi01{
				color: #cccccc;
			}
		</style>
		<?php echo '<script'; ?>
>
			$(function(){
				var num=3;
				$("span").eq(1).text(num);
				var t1=setInterval(function(){
					num--
					$("span").eq(1).text(num);
					if(num==0){
						clearInterval(t1);
						var aa=$("a").attr("href");
						location.href=aa;
						console.log(aa)
					}
				},1000)				
			})

		<?php echo '</script'; ?>
>
	</head>
	<body>
		<div class="bg"></div>
			<div class="box">
				<span class="chenggong"><?php echo $_smarty_tpl->tpl_vars['message']->value;?>
</span><br />
				<span class="zi"></span><span class="zi01">秒后返回，立即返回点</span><a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
">这里</a>
			</div>			
		

	</body>
</html>
<?php }
}
