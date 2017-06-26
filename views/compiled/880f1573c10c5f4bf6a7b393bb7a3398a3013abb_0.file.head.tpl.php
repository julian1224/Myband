<?php
/* Smarty version 3.1.30, created on 2017-06-26 08:54:16
  from "C:\Users\7isco\Desktop\Myband\views\head.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5950cbb8eb6b36_64602908',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '880f1573c10c5f4bf6a7b393bb7a3398a3013abb' => 
    array (
      0 => 'C:\\Users\\7isco\\Desktop\\Myband\\views\\head.tpl',
      1 => 1498467253,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5950cbb8eb6b36_64602908 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>

<head>
	<meta charset="utf-8">
	<title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width">

	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

	<link rel="stylesheet" href="css/main.css">
</head>
  <span id="playing"> Now playing: <?php echo $_smarty_tpl->tpl_vars['mp3source']->value;?>
 </span> <br>
	<img id="cover" src="images/pose.png" alt="damn"/>
	<audio preload autoplay loop>
	  <source src="media/<?php echo $_smarty_tpl->tpl_vars['mp3source']->value;?>
" type="audio/mpeg">
	    <?php echo $_smarty_tpl->tpl_vars['mp3source']->value;?>

	</audio>
<?php }
}
