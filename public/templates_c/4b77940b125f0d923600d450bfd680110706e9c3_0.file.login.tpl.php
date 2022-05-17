<?php
/* Smarty version 4.1.0, created on 2022-05-17 08:40:29
  from 'C:\xampp\htdocs\koncowy\app\views\login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_6283435d584073_20555055',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4b77940b125f0d923600d450bfd680110706e9c3' => 
    array (
      0 => 'C:\\xampp\\htdocs\\koncowy\\app\\views\\login.tpl',
      1 => 1652769624,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6283435d584073_20555055 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_246527916283435d57cb22_71708627', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'layout.tpl');
}
/* {block 'content'} */
class Block_246527916283435d57cb22_71708627 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_246527916283435d57cb22_71708627',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<form action='<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
login' method='post'>
		<label for='login'>Login</label>
		<input type='text' id='login' name='login' />
		<label for='password'>Password</label>
		<input type='text' id='password' name='password' />
		
		<input type='submit' value='log in' />
	</form>
<?php
}
}
/* {/block 'content'} */
}
