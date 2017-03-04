<?php
/* Smarty version 3.1.30, created on 2017-03-03 03:45:02
  from "F:\wamp\www\myblog\template\index\index.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58b8d8ae0ddc28_05083887',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '92958a7179c7d0f6f2b042ddd8408a1bf437b0bf' => 
    array (
      0 => 'F:\\wamp\\www\\myblog\\template\\index\\index.html',
      1 => 1488509098,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58b8d8ae0ddc28_05083887 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
/index.css">

    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/index.js"><?php echo '</script'; ?>
>
</head>
<body>
	<img src="LIBS_URL/code.class.php"/>
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['result']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
   <li><?php echo $_smarty_tpl->tpl_vars['v']->value["id"];?>
</li>
<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

</body>
</html><?php }
}
