<?php
/* Smarty version 3.1.30, created on 2017-07-14 08:36:40
  from "D:\SCHOOL\Myband\views\head.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59688298836491_09769611',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b0fbd11aca7f7e1b44f5dce4b393f321de496e3d' => 
    array (
      0 => 'D:\\SCHOOL\\Myband\\views\\head.tpl',
      1 => 1498467253,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59688298836491_09769611 (Smarty_Internal_Template $_smarty_tpl) {
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
