<?php
/* Smarty version 4.1.0, created on 2022-05-30 18:01:33
  from 'C:\xampp\htdocs\koncowy\app\views\signup.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_6294ea5dcf3630_23709651',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a807f957ab8f42d752928df9adc27c29f821c60b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\koncowy\\app\\views\\signup.tpl',
      1 => 1653926490,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6294ea5dcf3630_23709651 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15264167226294ea5dceda35_20276044', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'layout.tpl');
}
/* {block 'content'} */
class Block_15264167226294ea5dceda35_20276044 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_15264167226294ea5dceda35_20276044',
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
		<input type='text' id='password' name='password' class='m-2' />
		<label for='password2'>Confirm Password</label>
		<input type='text' id='password2' name='password2' class='m-2' />
		
		<input type='submit' value='sign up' class='btn btn-primary p-3 m-3' />
	</form>	
<?php
}
}
/* {/block 'content'} */
}
