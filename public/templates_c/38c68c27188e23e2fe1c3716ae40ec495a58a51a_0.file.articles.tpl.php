<?php
/* Smarty version 4.1.0, created on 2022-05-18 22:40:48
  from 'C:\xampp\htdocs\koncowy\app\views\articles.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_628559d01a2049_60762103',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '38c68c27188e23e2fe1c3716ae40ec495a58a51a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\koncowy\\app\\views\\articles.tpl',
      1 => 1652906446,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_628559d01a2049_60762103 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_107588996628559d0181d06_54789537', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'layout.tpl');
}
/* {block 'content'} */
class Block_107588996628559d0181d06_54789537 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_107588996628559d0181d06_54789537',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['articles']->value, 'article');
$_smarty_tpl->tpl_vars['article']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['article']->value) {
$_smarty_tpl->tpl_vars['article']->do_else = false;
?>
		<div>
			<h3><?php echo $_smarty_tpl->tpl_vars['article']->value["title"];?>
</h3>
			<h4>by <?php echo $_smarty_tpl->tpl_vars['article']->value["login"];?>
 at <?php echo $_smarty_tpl->tpl_vars['article']->value["createdAt"];?>
 #<?php echo $_smarty_tpl->tpl_vars['article']->value["name"];?>
</h4>
			<p><?php echo $_smarty_tpl->tpl_vars['article']->value["content"];?>
</p>
		</div>
	<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}
/* {/block 'content'} */
}
