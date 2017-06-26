<?php
/* Smarty version 3.1.30, created on 2017-06-26 13:01:41
  from "C:\Users\7isco\Desktop\Myband\views\menu.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_595105b5b599a8_00056272',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '474aba19284521582a594181cc8ca0edbabc097a' => 
    array (
      0 => 'C:\\Users\\7isco\\Desktop\\Myband\\views\\menu.tpl',
      1 => 1498482082,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_595105b5b599a8_00056272 (Smarty_Internal_Template $_smarty_tpl) {
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
