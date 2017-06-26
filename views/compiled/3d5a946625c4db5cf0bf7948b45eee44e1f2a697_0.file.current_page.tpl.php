<?php
/* Smarty version 3.1.30, created on 2017-06-26 13:10:46
  from "C:\Users\7isco\Desktop\Myband\views\current_page.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_595107d6920f71_51667547',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3d5a946625c4db5cf0bf7948b45eee44e1f2a697' => 
    array (
      0 => 'C:\\Users\\7isco\\Desktop\\Myband\\views\\current_page.tpl',
      1 => 1498482624,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_595107d6920f71_51667547 (Smarty_Internal_Template $_smarty_tpl) {
?>
<hr>
<table id="pagechanger" >
  <tr><td id="left">
    <?php if ($_smarty_tpl->tpl_vars['page']->value > 1) {?>
    <a href="?url=articles&page=<?php echo $_smarty_tpl->tpl_vars['page']->value+1;?>
"><==</a>
    <?php }?>
  </td>
  <td> <?php echo $_smarty_tpl->tpl_vars['page']->value;?>
 </td>
  <td id="right">
    <?php if ($_smarty_tpl->tpl_vars['page']->value < $_smarty_tpl->tpl_vars['number_of_pages']->value) {?>
    <a href="?url=articles&page=<?php echo $_smarty_tpl->tpl_vars['page']->value+1;?>
">==></a>
    <?php }?>
  </td></tr>
<?php }
}
