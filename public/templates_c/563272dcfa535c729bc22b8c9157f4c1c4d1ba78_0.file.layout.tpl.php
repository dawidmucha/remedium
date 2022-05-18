<?php
/* Smarty version 4.1.0, created on 2022-05-18 13:42:27
  from 'C:\xampp\htdocs\koncowy\app\views\templates\layout.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_6284dba3226027_04384418',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '563272dcfa535c729bc22b8c9157f4c1c4d1ba78' => 
    array (
      0 => 'C:\\xampp\\htdocs\\koncowy\\app\\views\\templates\\layout.tpl',
      1 => 1652874137,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6284dba3226027_04384418 (Smarty_Internal_Template $_smarty_tpl) {
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
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14189747976284dba3211d64_85198495', 'topbar');
?>


		<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5112701226284dba3225432_72733677', 'content');
?>

	</body>
</html><?php }
/* {block 'topbar'} */
class Block_14189747976284dba3211d64_85198495 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'topbar' => 
  array (
    0 => 'Block_14189747976284dba3211d64_85198495',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

			<a href='<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
'>Re:medium</a>

			<?php if ((core\RoleUtils::inRole('user'))) {?>
				<div>
					Obecnie zalogowany jako user
				</div>
				<form action='<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
logout' method='post'>			
					<input type='submit' value='log out' />
				</form>

				<form action='<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
newarticle' method='post'>
					<input type='submit' value='new article' />
				</form>
			<?php } elseif ((core\RoleUtils::inRole('admin'))) {?>
				<div>
					Obecnie zalogowany jako admin
				</div>
				<form action='<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
logout' method='post'>			
					<input type='submit' value='log out' />
				</form>

				<form action='<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
newarticle' method='post'>
					<input type='submit' value='new article' />
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
class Block_5112701226284dba3225432_72733677 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_5112701226284dba3225432_72733677',
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
