<?php
/* Smarty version 4.1.0, created on 2022-06-05 15:29:58
  from 'C:\xampp\htdocs\koncowy\app\views\adminPanel.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_629cafd6258e13_27487632',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2fc35491bf8a95ec04a43f429d659cb2d7684d41' => 
    array (
      0 => 'C:\\xampp\\htdocs\\koncowy\\app\\views\\adminPanel.tpl',
      1 => 1654435793,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_629cafd6258e13_27487632 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_98804489629cafd6241b73_08719123', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'layout.tpl');
}
/* {block 'content'} */
class Block_98804489629cafd6241b73_08719123 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_98804489629cafd6241b73_08719123',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<h1>admin panel</h1>
	<table class='table'>
		<thead>
			<tr>
				<th>id</th>
				<th>login</th>
				<th>email</th>
				<th>created at</th>
				<th>role</th>
				<th>idRole</th>
				<th>actions</th>
			</tr>
		</thead>
		<tbody>
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['users']->value, 'user');
$_smarty_tpl->tpl_vars['user']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['user']->value) {
$_smarty_tpl->tpl_vars['user']->do_else = false;
?>
				<tr>
					<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['user']->value, 'el');
$_smarty_tpl->tpl_vars['el']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['el']->value) {
$_smarty_tpl->tpl_vars['el']->do_else = false;
?>
						<td><?php echo $_smarty_tpl->tpl_vars['el']->value;?>
</td>
					<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
					<td>
						<form action='<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
adminPanelEdit' method='post'>	
							<input type='hidden' name='idUser' value='<?php echo $_smarty_tpl->tpl_vars['user']->value["idUser"];?>
' />
							<input type='hidden' name='login' value='<?php echo $_smarty_tpl->tpl_vars['user']->value["login"];?>
' />
							<input type='hidden' name='email' value='<?php echo $_smarty_tpl->tpl_vars['user']->value["email"];?>
' />
							<button>Edit</button>
						</form>
						<form action='<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
adminPanelAdmin' method='post'>
							<input type='hidden' name='idUser' value='<?php echo $_smarty_tpl->tpl_vars['user']->value["idUser"];?>
' />
							<input type='hidden' name='login' value='<?php echo $_smarty_tpl->tpl_vars['user']->value["login"];?>
' />
							<input type='hidden' name='email' value='<?php echo $_smarty_tpl->tpl_vars['user']->value["email"];?>
' />
							<input type='hidden' name='role' value='<?php echo $_smarty_tpl->tpl_vars['user']->value["role"];?>
' />
							<input type='hidden' name='idRole' value='<?php echo $_smarty_tpl->tpl_vars['user']->value["idRole"];?>
' />
							<?php if ($_smarty_tpl->tpl_vars['user']->value['idRole'] == 1) {?>
								<button>Revoke admin</button>
							<?php } else { ?>
								<button>Grant admin</button>
							<?php }?>
						</form>
						<form action='<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
adminPanelRemove' method='post'>
							<input type='hidden' name='idUser' value='<?php echo $_smarty_tpl->tpl_vars['user']->value["idUser"];?>
' />
							<input type='hidden' name='login' value='<?php echo $_smarty_tpl->tpl_vars['user']->value["login"];?>
' />
							<input type='hidden' name='email' value='<?php echo $_smarty_tpl->tpl_vars['user']->value["email"];?>
' />
							<button>Remove</button>
						</form>
					</td>
				</tr>
			<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		</tbody>
	</table>
	<hr />
<?php
}
}
/* {/block 'content'} */
}
