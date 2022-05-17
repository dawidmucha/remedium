<?php
/* Smarty version 4.1.0, created on 2022-05-10 18:15:20
  from 'C:\xampp\htdocs\koncowy\app\views\register.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_627a8f981dca09_22230809',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '394309f041ece56ad400d674fe3c4a061f011a83' => 
    array (
      0 => 'C:\\xampp\\htdocs\\koncowy\\app\\views\\register.tpl',
      1 => 1652199027,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_627a8f981dca09_22230809 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1315327866627a8f981cdc61_54975296', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'layout.tpl');
}
/* {block 'content'} */
class Block_1315327866627a8f981cdc61_54975296 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_1315327866627a8f981cdc61_54975296',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<form action='<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
registerAction' method='post'>
		<label for='login'>Login</label>
		<input type='text' id='login' name='login' />
		<label for='email'>Email</label>
		<input type='text' id='email' name='email' />
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
