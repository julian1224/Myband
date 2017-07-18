<?php
/* Smarty version 3.1.30, created on 2017-07-14 08:37:01
  from "D:\SCHOOL\Myband\views\current_page.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_596882ad6370d4_78601819',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1b11af4568cdb6e286ecaa130df808e29b977263' => 
    array (
      0 => 'D:\\SCHOOL\\Myband\\views\\current_page.tpl',
      1 => 1499412743,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_596882ad6370d4_78601819 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="flashback">
<table id="pagechanger" >
  <tr><td id="left">
    <?php if ($_smarty_tpl->tpl_vars['page']->value > 1) {?>
    <a href="?page=articles&num=<?php echo $_smarty_tpl->tpl_vars['page']->value-1;?>
"><==</a>
    <?php }?>
  </td>
  <td> <?php echo $_smarty_tpl->tpl_vars['page']->value;?>
 </td>
  <td id="right">
    <?php if ($_smarty_tpl->tpl_vars['page']->value < $_smarty_tpl->tpl_vars['number_of_pages']->value) {?>
    <a href="?page=articles&num=<?php echo $_smarty_tpl->tpl_vars['page']->value+1;?>
">==></a>
    <?php }?>
  </td></tr>
</table>
</div>
<hr>
<?php }
}
