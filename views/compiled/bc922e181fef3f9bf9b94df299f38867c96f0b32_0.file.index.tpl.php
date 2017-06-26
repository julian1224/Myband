<?php
/* Smarty version 3.1.30, created on 2017-06-26 11:50:03
  from "C:\Users\7isco\Desktop\Myband\views\index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5950f4ebf26208_66427565',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bc922e181fef3f9bf9b94df299f38867c96f0b32' => 
    array (
      0 => 'C:\\Users\\7isco\\Desktop\\Myband\\views\\index.tpl',
      1 => 1498477793,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5950f4ebf26208_66427565 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_modifier_date_format')) require_once 'C:\\Users\\7isco\\Desktop\\Myband\\libs\\plugins\\modifier.date_format.php';
?>
<p id="pagenumber">Page <?php echo $_smarty_tpl->tpl_vars['page']->value;?>
</p>

<table id="pagechanger">
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

    </table>

    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, ((string)$_smarty_tpl->tpl_vars['result']->value), 'oneItem');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['oneItem']->value) {
?>
      <table class="content">
        <tr><td><h3><?php echo $_smarty_tpl->tpl_vars['oneItem']->value['id'];?>
</h3></td></tr>
        <tr><td><h4><?php echo $_smarty_tpl->tpl_vars['oneItem']->value['title'];?>
</h4></td></tr>
        <tr><td><p><?php echo $_smarty_tpl->tpl_vars['oneItem']->value['content'];?>
</p></td></tr>
        <tr><td><p><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['oneItem']->value['date_created'],"%e %B %Y");?>
</p></td></tr>
      </table><br>
      <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

<?php }
}
