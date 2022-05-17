<?php
/* Smarty version 4.1.0, created on 2022-05-16 23:35:49
  from 'C:\xampp\htdocs\koncowy\app\views\articles.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_6282c3b546a696_25809425',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '38c68c27188e23e2fe1c3716ae40ec495a58a51a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\koncowy\\app\\views\\articles.tpl',
      1 => 1652736947,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6282c3b546a696_25809425 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16388044166282c3b5449504_23096173', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'layout.tpl');
}
/* {block 'content'} */
class Block_16388044166282c3b5449504_23096173 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_16388044166282c3b5449504_23096173',
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
