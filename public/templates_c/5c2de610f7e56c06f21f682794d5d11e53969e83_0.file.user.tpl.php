<?php
/* Smarty version 4.1.0, created on 2022-05-24 21:27:40
  from 'C:\xampp\htdocs\koncowy\app\views\user.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_628d31ac41e465_20882785',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5c2de610f7e56c06f21f682794d5d11e53969e83' => 
    array (
      0 => 'C:\\xampp\\htdocs\\koncowy\\app\\views\\user.tpl',
      1 => 1653418856,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:article.tpl' => 1,
  ),
),false)) {
function content_628d31ac41e465_20882785 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1294262632628d31ac3f4906_86622253', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'layout.tpl');
}
/* {block 'content'} */
class Block_1294262632628d31ac3f4906_86622253 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_1294262632628d31ac3f4906_86622253',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<div>
		<h1><?php echo $_smarty_tpl->tpl_vars['user']->value["login"];?>
</h1>
		<div>member since <?php echo $_smarty_tpl->tpl_vars['user']->value["createdAt"];?>
</div>
	</div>
	<div>
		<h3>All of <?php echo $_smarty_tpl->tpl_vars['user']->value["login"];?>
's posts...</h3>
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['userArticles']->value, 'userArticle');
$_smarty_tpl->tpl_vars['userArticle']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['userArticle']->value) {
$_smarty_tpl->tpl_vars['userArticle']->do_else = false;
?>
			<?php $_smarty_tpl->_subTemplateRender('file:article.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('article'=>$_smarty_tpl->tpl_vars['userArticle']->value), 0, true);
?>
		<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	</div>
<?php
}
}
/* {/block 'content'} */
}
