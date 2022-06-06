<?php
/* Smarty version 4.1.0, created on 2022-05-31 08:16:27
  from 'C:\xampp\htdocs\koncowy\app\views\login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_6295b2bb333919_65372986',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4b77940b125f0d923600d450bfd680110706e9c3' => 
    array (
      0 => 'C:\\xampp\\htdocs\\koncowy\\app\\views\\login.tpl',
      1 => 1653977779,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6295b2bb333919_65372986 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17581200266295b2bb324ef7_64081940', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'layout.tpl');
}
/* {block 'content'} */
class Block_17581200266295b2bb324ef7_64081940 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_17581200266295b2bb324ef7_64081940',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<form action='<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
login' method='post' class='d-flex flex-column align-items-center m-5'>
		<label for='login'>Login</label>
		<input type='text' id='login' name='login' class='m-2' /> <br />
		<label for='password'>Password</label>
		<input type='password' id='password' name='password' class='m-2' /> <br />
		
		<input type='submit' value='log in' class='btn btn-primary p-3 m-3' />
	</form>
<?php
}
}
/* {/block 'content'} */
}
