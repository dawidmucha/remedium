<?php
/* Smarty version 4.1.0, created on 2022-05-25 16:36:25
  from 'C:\xampp\htdocs\koncowy\app\views\templates\layout.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_628e3ee92c82d3_18479241',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '563272dcfa535c729bc22b8c9157f4c1c4d1ba78' => 
    array (
      0 => 'C:\\xampp\\htdocs\\koncowy\\app\\views\\templates\\layout.tpl',
      1 => 1653489379,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_628e3ee92c82d3_18479241 (Smarty_Internal_Template $_smarty_tpl) {
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
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1162637609628e3ee92b4370_77179751', 'topbar');
?>


		<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1879142222628e3ee92c76a5_09248501', 'content');
?>

	</body>
</html><?php }
/* {block 'topbar'} */
class Block_1162637609628e3ee92b4370_77179751 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'topbar' => 
  array (
    0 => 'Block_1162637609628e3ee92b4370_77179751',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

			<a href='<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
'>Re:medium</a>

			<?php if ((core\RoleUtils::inRole('user'))) {?>
				<div>
					Obecnie zalogowany jako user <?php echo \core\SessionUtils::load('id',true);?>

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
class Block_1879142222628e3ee92c76a5_09248501 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_1879142222628e3ee92c76a5_09248501',
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
