<?php
/* Smarty version 3.1.30, created on 2017-07-14 08:37:01
  from "D:\SCHOOL\Myband\views\articles.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_596882ad3af864_52295628',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e2302d9d11cfcbc2ab89bf7b3f6e42d88eda3094' => 
    array (
      0 => 'D:\\SCHOOL\\Myband\\views\\articles.tpl',
      1 => 1499686018,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_596882ad3af864_52295628 (Smarty_Internal_Template $_smarty_tpl) {
?>
  <content class="wrap">
    <div>
  <section>
      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['article_list']->value, 'one_article');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['one_article']->value) {
?>
        <article  class="flashback">

          <h1> <?php echo $_smarty_tpl->tpl_vars['one_article']->value['title'];?>
 </h1> <br>
          <img id="contentimg" src="<?php echo $_smarty_tpl->tpl_vars['one_article']->value['image'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['one_article']->value['alt'];?>
"> </img> <br>
          <content><?php echo $_smarty_tpl->tpl_vars['one_article']->value['content'];?>
 </content>
          <br> <br> <hr>  </article>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

    </section>
  </div>
  </content>
<?php }
}
