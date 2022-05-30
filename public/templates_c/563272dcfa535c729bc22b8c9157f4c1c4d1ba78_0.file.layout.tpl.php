<?php
/* Smarty version 4.1.0, created on 2022-05-30 17:38:01
  from 'C:\xampp\htdocs\koncowy\app\views\templates\layout.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_6294e4d9058d21_36579014',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '563272dcfa535c729bc22b8c9157f4c1c4d1ba78' => 
    array (
      0 => 'C:\\xampp\\htdocs\\koncowy\\app\\views\\templates\\layout.tpl',
      1 => 1653925078,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6294e4d9058d21_36579014 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pl" lang="pl">
	<head>
		<meta charset="utf-8"/>
		<title>Remedium</title>

		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
	</head>
	<body>
		<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15832283936294e4d9049dc3_11267526', 'topbar');
?>

		</div>

		<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8496764686294e4d9058244_91028938', 'content');
?>

	</body>
</html><?php }
/* {block 'topbar'} */
class Block_15832283936294e4d9049dc3_11267526 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'topbar' => 
  array (
    0 => 'Block_15832283936294e4d9049dc3_11267526',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

			<div class='navbar bg-light p-3'>
				<a href='<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
'>
					<img src='https://i.imgur.com/bdDUZrG.png' alt='remedium logo' />
				</a>

				<?php if ((core\RoleUtils::inRole('user')) || (core\RoleUtils::inRole('admin'))) {?>
					<div class='d-flex flex-column align-items-stretch'>
						<div class='p-2'>
							Currently logged in as <b><?php echo \core\SessionUtils::load('username',true);?>
</b>
							<?php if ((core\RoleUtils::inRole('admin'))) {?>
								(admin)
							<?php }?>
						</div>

						<div class='d-flex flex-row justify-content-evenly'>
							<form action='<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
newarticle' method='post'>
								<input type='submit' value='new article' class='p-2 btn btn-primary' />
							</form>

							<form action='<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
logout' method='post'>			
								<input type='submit' value='log out' class='p-2 btn btn-secondary' />
							</form>
						</div>
					</div>
				<?php } else { ?>
					<div class='d-flex flex-column align-items-stretch'>
						<div class='p-2'>
							Obecnie przeglądasz jako gość
						</div>

						<div class='d-flex flex-row justify-content-evenly'>
							<form action='<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
login' method='post'>			
								<input type='submit' value='log in' class='p-2 btn btn-primary' />
							</form>
							<form action='<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
signup' method='post'>			
								<input type='submit' value='sign up' class='p-2 btn btn-success' />
							</form>
						</div>
					</div>
				<?php }?>
			<?php
}
}
/* {/block 'topbar'} */
/* {block 'content'} */
class Block_8496764686294e4d9058244_91028938 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_8496764686294e4d9058244_91028938',
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
