<?php
/* Smarty version 4.1.0, created on 2022-05-10 08:44:35
  from 'C:\xampp\htdocs\koncowy\app\views\templates\topbar.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_627a09d3477246_01660669',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '654135d9d91e38bc4a0f347450be74bbcc08c9df' => 
    array (
      0 => 'C:\\xampp\\htdocs\\koncowy\\app\\views\\templates\\topbar.tpl',
      1 => 1652165054,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_627a09d3477246_01660669 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_694611057627a09d346e1b7_91099649', 'topbar');
}
/* {block 'topbar'} */
class Block_694611057627a09d346e1b7_91099649 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'topbar' => 
  array (
    0 => 'Block_694611057627a09d346e1b7_91099649',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<div>
		<a href='<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
'>Remedium</a>

		<?php if ($_smarty_tpl->tpl_vars['access']->value != null) {?>
			<div>
				<div>Obecnie zalogowany jako <?php echo $_smarty_tpl->tpl_vars['access']->value;?>
</div>
				<form action='<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
logout' method='post'>
					<input type='submit' value='log out' />
				</form>
			</div>
		<?php } else { ?>
			<div>
				<div>Obecnie przeglądasz jako gość</div>
				<form action='<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
login' method='post'>
					<input type='submit' value='log in' />
				</form>			
			</div>
		<?php }?>
	</div>
<?php
}
}
/* {/block 'topbar'} */
}
