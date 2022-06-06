<?php
/* Smarty version 4.1.0, created on 2022-05-31 08:19:29
  from 'C:\xampp\htdocs\koncowy\app\views\signup.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_6295b371b2ed10_73527627',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a807f957ab8f42d752928df9adc27c29f821c60b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\koncowy\\app\\views\\signup.tpl',
      1 => 1653977964,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6295b371b2ed10_73527627 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5169222566295b371b28747_63196577', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'layout.tpl');
}
/* {block 'content'} */
class Block_5169222566295b371b28747_63196577 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_5169222566295b371b28747_63196577',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<form action='<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
signup' method='post' class='d-flex flex-column align-items-center m-5'>
		<label for='login'>Login</label>
		<input type='text' id='login' name='login' value='<?php echo $_smarty_tpl->tpl_vars['form']->value->login;?>
' class='m-2' />
		<label for='email'>Email</label>
		<input type='text' id='email' name='email' value='<?php echo $_smarty_tpl->tpl_vars['form']->value->email;?>
' class='m-2' />
		<label for='password'>Password</label>
		<input type='password' id='password' name='password' class='m-2' />
		<label for='password2'>Confirm Password</label>
		<input type='password' id='password2' name='password2' class='m-2' />
		
		<input type='submit' value='sign up' class='btn btn-primary p-3 m-3' />
	</form>	
<?php
}
}
/* {/block 'content'} */
}
