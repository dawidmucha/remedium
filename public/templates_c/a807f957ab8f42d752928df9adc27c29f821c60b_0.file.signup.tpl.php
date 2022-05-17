<?php
/* Smarty version 4.1.0, created on 2022-05-17 15:21:59
  from 'C:\xampp\htdocs\koncowy\app\views\signup.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_6283a1774b5111_20781742',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a807f957ab8f42d752928df9adc27c29f821c60b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\koncowy\\app\\views\\signup.tpl',
      1 => 1652793713,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6283a1774b5111_20781742 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10493631696283a1774a9584_47075824', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'layout.tpl');
}
/* {block 'content'} */
class Block_10493631696283a1774a9584_47075824 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_10493631696283a1774a9584_47075824',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<form action='<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
signup' method='post'>
		<label for='login'>Login</label>
		<input type='text' id='login' name='login' value=<?php echo $_smarty_tpl->tpl_vars['form']->value->login;?>
 />
		<label for='email'>Email</label>
		<input type='text' id='email' name='email' value=<?php echo $_smarty_tpl->tpl_vars['form']->value->email;?>
 />
		<label for='password'>Password</label>
		<input type='text' id='password' name='password' />
		<label for='password2'>Confirm Password</label>
		<input type='text' id='password2' name='password2' />
		
		<input type='submit' value='sign up' />
	</form>	
<?php
}
}
/* {/block 'content'} */
}
