<?php
/* Smarty version 4.1.0, created on 2022-05-30 23:38:29
  from 'C:\xampp\htdocs\koncowy\app\views\newarticle.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_62953955ade448_13949902',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9405e01843b6eb60cd2e428675da3042b80d53a8' => 
    array (
      0 => 'C:\\xampp\\htdocs\\koncowy\\app\\views\\newarticle.tpl',
      1 => 1653946704,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62953955ade448_13949902 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php $_smarty_tpl->_assignInScope('categories', core\App::getDB()->select("category","*"));?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_54335016262953955ac4d25_30585659', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'layout.tpl');
}
/* {block 'content'} */
class Block_54335016262953955ac4d25_30585659 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_54335016262953955ac4d25_30585659',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<form class='d-flex m-3 justify-content-around' action='<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
newarticle' method='post'>
		<div>
			<div class='m-3'>
				<label for='login'>Title</label>
				<input type='text' id='title' name='title' /><br />
			</div>
			
			<fieldset class='form-check'>
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categories']->value, 'category');
$_smarty_tpl->tpl_vars['category']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['category']->value) {
$_smarty_tpl->tpl_vars['category']->do_else = false;
?>
					<input class='m-1 form-check-input' type='radio' name='idCategory' value=<?php echo $_smarty_tpl->tpl_vars['category']->value['idCategory'];?>
 />
					<label class='m-1 form-check-label'><?php echo $_smarty_tpl->tpl_vars['category']->value['name'];?>
</label> <br />
				<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		</fieldset>
		</div>

		<div class='d-flex flex-column'>
			<textarea class='m-3' rows='20' cols='120' id='content' name='content'></textarea>
			<input class='btn btn-primary p-3 m-3' type='submit' value='submit' />
		</div>
	</form>
<?php
}
}
/* {/block 'content'} */
}
