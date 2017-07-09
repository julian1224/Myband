<?php
/* Smarty version 3.1.30, created on 2017-07-06 09:02:08
  from "C:\Users\7isco\Desktop\Myband\views\index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_595dfc90957109_98578624',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bc922e181fef3f9bf9b94df299f38867c96f0b32' => 
    array (
      0 => 'C:\\Users\\7isco\\Desktop\\Myband\\views\\index.tpl',
      1 => 1499331725,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_595dfc90957109_98578624 (Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="flashback" style="height:900px">
  NEWS goes here. Eventually? For an extra point. Yes.

  <section>
      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['news_list']->value, 'news');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['news']->value) {
?>
        <article  class="flashback">

          <h1> <?php echo $_smarty_tpl->tpl_vars['news']->value['title'];?>
 </h1> <br>
          <h3> <?php echo $_smarty_tpl->tpl_vars['news']->value['subtitle'];?>
 </h3> <br>
          <content><?php echo $_smarty_tpl->tpl_vars['news']->value['content'];?>
 </content>
          <h2> <?php echo $_smarty_tpl->tpl_vars['news']->value['Date'];?>
</h2>
          <br> <br> <hr>  </article>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

    </section>
</div>
<hr>
<?php }
}
