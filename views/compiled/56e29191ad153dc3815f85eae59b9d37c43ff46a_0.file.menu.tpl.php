<?php
/* Smarty version 3.1.30, created on 2017-07-14 08:36:40
  from "D:\SCHOOL\Myband\views\menu.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59688298bae374_57238390',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '56e29191ad153dc3815f85eae59b9d37c43ff46a' => 
    array (
      0 => 'D:\\SCHOOL\\Myband\\views\\menu.tpl',
      1 => 1498482082,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59688298bae374_57238390 (Smarty_Internal_Template $_smarty_tpl) {
?>


<div class="flashback" id="pagetitle"><?php echo $_smarty_tpl->tpl_vars['page_title']->value;?>
</div> <hr>
  <nav class="wrap">
    <ul class="flashback">
        <li><a href="?page=home">home</a></li>
        <li><a href="?page=articles">articles</a></li>
        <li><a href="?page=about">about</a></li>
        <li><a href="?page=contact">contact</a></li>
        <li><a href="?page=search">search</a></li>
        <br>
    </ul>
  </nav>
<hr>
<?php }
}
