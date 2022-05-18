<?php
/* Smarty version 4.1.0, created on 2022-05-18 22:27:56
  from 'C:\xampp\htdocs\koncowy\app\views\newarticle.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_628556ccd7f267_29604349',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9405e01843b6eb60cd2e428675da3042b80d53a8' => 
    array (
      0 => 'C:\\xampp\\htdocs\\koncowy\\app\\views\\newarticle.tpl',
      1 => 1652905647,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_628556ccd7f267_29604349 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php $_smarty_tpl->_assignInScope('categories', core\App::getDB()->select("category","*"));?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_313454360628556ccd6b643_27906245', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'layout.tpl');
}
/* {block 'content'} */
class Block_313454360628556ccd6b643_27906245 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_313454360628556ccd6b643_27906245',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<form action='<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
newarticle' method='post'>
		<label for='login'>Title</label>
		<input type='text' id='title' name='title' /><br />
		
		<fieldset>
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categories']->value, 'category');
$_smarty_tpl->tpl_vars['category']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['category']->value) {
$_smarty_tpl->tpl_vars['category']->do_else = false;
?>
				<label><input type='radio' name='idCategory' value=<?php echo $_smarty_tpl->tpl_vars['category']->value['idCategory'];?>
><?php echo $_smarty_tpl->tpl_vars['category']->value['name'];?>
</input></label>
			<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		</fieldset>

		<textarea rows='20' cols='120' id='content' name='content'></textarea>
		
		<input type='submit' value='submit' />
	</form>
<?php
}
}
/* {/block 'content'} */
}
