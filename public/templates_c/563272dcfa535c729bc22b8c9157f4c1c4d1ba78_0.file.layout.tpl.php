<?php
/* Smarty version 4.1.0, created on 2022-05-17 19:43:14
  from 'C:\xampp\htdocs\koncowy\app\views\templates\layout.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_6283deb2a83fe9_52863553',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '563272dcfa535c729bc22b8c9157f4c1c4d1ba78' => 
    array (
      0 => 'C:\\xampp\\htdocs\\koncowy\\app\\views\\templates\\layout.tpl',
      1 => 1652809389,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6283deb2a83fe9_52863553 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pl" lang="pl">
	<head>
		<meta charset="utf-8"/>
		<title>Remedium</title>
	</head>
	<body>
		<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2729593006283deb2a6c7f1_44319454', 'topbar');
?>


		<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3548712596283deb2a82f42_42163719', 'content');
?>

	</body>
</html><?php }
/* {block 'topbar'} */
class Block_2729593006283deb2a6c7f1_44319454 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'topbar' => 
  array (
    0 => 'Block_2729593006283deb2a6c7f1_44319454',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

			<a href='<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
'>Re:medium</a>

			<?php if ((isset($_smarty_tpl->tpl_vars['access']->value))) {?>
				<div>
					Obecnie zalogowany jako <?php echo $_smarty_tpl->tpl_vars['access']->value;?>

				</div>
				<form action='<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
logout' method='post'>			
					<input type='submit' value='log out' />
				</form>

				<form action='<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
newpost' method='post'>
					<input type='submit' value='new post' />
				</form>
			<?php } else { ?>
				<div>
					Obecnie przeglądasz jako gość
				</div>
				<form action='<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
login' method='post'>			
					<input type='submit' value='log in' />
				</form>
				<form action='<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
signup' method='post'>			
					<input type='submit' value='sign up' />
				</form>
			<?php }?>
		<?php
}
}
/* {/block 'topbar'} */
/* {block 'content'} */
class Block_3548712596283deb2a82f42_42163719 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_3548712596283deb2a82f42_42163719',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

			<div>Default 'content' block</div>
		<?php
}
}
/* {/block 'content'} */
}
