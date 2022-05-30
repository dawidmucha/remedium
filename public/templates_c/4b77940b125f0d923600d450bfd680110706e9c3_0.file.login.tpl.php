<?php
/* Smarty version 4.1.0, created on 2022-05-30 17:58:17
  from 'C:\xampp\htdocs\koncowy\app\views\login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_6294e999a20149_98212679',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4b77940b125f0d923600d450bfd680110706e9c3' => 
    array (
      0 => 'C:\\xampp\\htdocs\\koncowy\\app\\views\\login.tpl',
      1 => 1653926295,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6294e999a20149_98212679 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3574554996294e999a1a572_63108204', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'layout.tpl');
}
/* {block 'content'} */
class Block_3574554996294e999a1a572_63108204 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_3574554996294e999a1a572_63108204',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<form action='<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
login' method='post' class='d-flex flex-column align-items-center m-5'>
		<label for='login'>Login</label>
		<input type='text' id='login' name='login' class='m-2' /> <br />
		<label for='password'>Password</label>
		<input type='text' id='password' name='password' class='m-2' /> <br />
		
		<input type='submit' value='log in' class='btn btn-primary p-3 m-3' />
	</form>
<?php
}
}
/* {/block 'content'} */
}
