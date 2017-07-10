<?php
/* Smarty version 3.1.30, created on 2017-07-10 11:44:12
  from "C:\Users\7isco\Desktop\Myband\views\index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5963688c839b65_21900088',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bc922e181fef3f9bf9b94df299f38867c96f0b32' => 
    array (
      0 => 'C:\\Users\\7isco\\Desktop\\Myband\\views\\index.tpl',
      1 => 1499687048,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5963688c839b65_21900088 (Smarty_Internal_Template $_smarty_tpl) {
?>

<div>
  <section>
      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['news_list']->value, 'news');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['news']->value) {
?>
        <article id="news" class="flashback">

          <h1> <?php echo $_smarty_tpl->tpl_vars['news']->value['Title'];?>
 </h1>
          <h3> <?php echo $_smarty_tpl->tpl_vars['news']->value['Subtitle'];?>
 </h3>
          <p><?php echo $_smarty_tpl->tpl_vars['news']->value['Content'];?>
 </p>
          <h5> posted on: <?php echo $_smarty_tpl->tpl_vars['news']->value['Date'];?>
</h2>
          <br> </article>
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
