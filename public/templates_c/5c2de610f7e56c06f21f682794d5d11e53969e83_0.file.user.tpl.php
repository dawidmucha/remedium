<?php
/* Smarty version 4.1.0, created on 2022-05-30 18:03:33
  from 'C:\xampp\htdocs\koncowy\app\views\user.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_6294ead5533a50_82280015',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5c2de610f7e56c06f21f682794d5d11e53969e83' => 
    array (
      0 => 'C:\\xampp\\htdocs\\koncowy\\app\\views\\user.tpl',
      1 => 1653926610,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:article.tpl' => 1,
  ),
),false)) {
function content_6294ead5533a50_82280015 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20580517366294ead551df34_85210976', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'layout.tpl');
}
/* {block 'content'} */
class Block_20580517366294ead551df34_85210976 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_20580517366294ead551df34_85210976',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<div class='p-5'>
		<div class='p-2'>
			<h1><?php echo $_smarty_tpl->tpl_vars['user']->value["login"];?>
</h1>
			<div>member since <?php echo $_smarty_tpl->tpl_vars['user']->value["createdAt"];?>
</div>
		</div>
		<div class='p-2'>
			<h3>All of <?php echo $_smarty_tpl->tpl_vars['user']->value["login"];?>
's posts</h3>
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
	</div>
<?php
}
}
/* {/block 'content'} */
}
