<?php
/* Smarty version 4.1.0, created on 2022-05-30 17:02:34
  from 'C:\xampp\htdocs\koncowy\app\views\articles.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_6294dc8ad22943_82004344',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '38c68c27188e23e2fe1c3716ae40ec495a58a51a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\koncowy\\app\\views\\articles.tpl',
      1 => 1653922952,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:article.tpl' => 1,
  ),
),false)) {
function content_6294dc8ad22943_82004344 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15088053706294dc8acf6237_50568820', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'layout.tpl');
}
/* {block 'content'} */
class Block_15088053706294dc8acf6237_50568820 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_15088053706294dc8acf6237_50568820',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<form action='<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
articles' method='post' class='p-3'>
		<label for='filter'>Filter by: </label>
		<select name='filter' id='filter' class='btn btn-light dropdown-toggle'>
			<option value="-">-</option>
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categories']->value, 'category');
$_smarty_tpl->tpl_vars['category']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['category']->value) {
$_smarty_tpl->tpl_vars['category']->do_else = false;
?>
				<?php if ($_smarty_tpl->tpl_vars['category']->value == $_smarty_tpl->tpl_vars['curr_category']->value) {?>
					<option value='<?php echo $_smarty_tpl->tpl_vars['category']->value;?>
' selected><?php echo $_smarty_tpl->tpl_vars['category']->value;?>
</option>
				<?php } else { ?>
					<option value='<?php echo $_smarty_tpl->tpl_vars['category']->value;?>
'><?php echo $_smarty_tpl->tpl_vars['category']->value;?>
</option>
				<?php }?>
			<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		</select>
		<input type='submit' value='filter' class='btn btn-primary' />
		<?php if ($_smarty_tpl->tpl_vars['curr_category']->value != "-" && $_smarty_tpl->tpl_vars['curr_category']->value != '') {?>
			Currently filtering by: <?php echo $_smarty_tpl->tpl_vars['curr_category']->value;?>

		<?php }?>
	</form>
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['articles']->value, 'article');
$_smarty_tpl->tpl_vars['article']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['article']->value) {
$_smarty_tpl->tpl_vars['article']->do_else = false;
?>
		<?php $_smarty_tpl->_subTemplateRender('file:article.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('article'=>$_smarty_tpl->tpl_vars['article']->value), 0, true);
?>
	<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}
/* {/block 'content'} */
}
