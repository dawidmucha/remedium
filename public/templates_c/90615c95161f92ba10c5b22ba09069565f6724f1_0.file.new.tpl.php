<?php
/* Smarty version 4.1.0, created on 2022-05-17 19:19:52
  from 'C:\xampp\htdocs\koncowy\app\views\new.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_6283d93830ad14_14904470',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '90615c95161f92ba10c5b22ba09069565f6724f1' => 
    array (
      0 => 'C:\\xampp\\htdocs\\koncowy\\app\\views\\new.tpl',
      1 => 1652807988,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6283d93830ad14_14904470 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13107793476283d938303751_47932426', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'layout.tpl');
}
/* {block 'content'} */
class Block_13107793476283d938303751_47932426 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_13107793476283d938303751_47932426',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<form action='<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
new' method='post'>
		<label for='login'>Title</label>
		<input type='text' id='title' name='title' /><br />

		<textarea rows='20' cols='120' id='content' name='content'></textarea>
		
		<input type='submit' value='log in' />
	</form>

			<div>
			Dodawanie nowego posta...
		</div>
<?php
}
}
/* {/block 'content'} */
}
