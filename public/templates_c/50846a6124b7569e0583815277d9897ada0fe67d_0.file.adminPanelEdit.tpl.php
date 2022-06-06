<?php
/* Smarty version 4.1.0, created on 2022-06-04 13:41:28
  from 'C:\xampp\htdocs\koncowy\app\views\adminPanelEdit.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_629b44e8c30625_45228192',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '50846a6124b7569e0583815277d9897ada0fe67d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\koncowy\\app\\views\\adminPanelEdit.tpl',
      1 => 1654342883,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_629b44e8c30625_45228192 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_452974587629b44e8c28883_82836046', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'layout.tpl');
}
/* {block 'content'} */
class Block_452974587629b44e8c28883_82836046 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_452974587629b44e8c28883_82836046',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<form action='<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
adminPanelEditSubmit' method='post' class='d-flex flex-column align-items-center m-5'>
		<label for='login'>Name</label>
		<input type='text' id='login' name='login' value='<?php echo $_smarty_tpl->tpl_vars['login']->value;?>
' class='m-2' />
		<label for='email'>Email</label>
		<input type='text' id='email' name='email' value='<?php echo $_smarty_tpl->tpl_vars['email']->value;?>
' class='m-2' />
		<input type='hidden' id='idUser' name='idUser' value='<?php echo $_smarty_tpl->tpl_vars['idUser']->value;?>
' class='m-2' />
		
		<input type='submit' value='Save changes' class='btn btn-primary p-3 m-3' />
	</form>	
<?php
}
}
/* {/block 'content'} */
}
