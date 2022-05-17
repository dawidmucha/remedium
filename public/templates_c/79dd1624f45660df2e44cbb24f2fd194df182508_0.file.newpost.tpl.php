<?php
/* Smarty version 4.1.0, created on 2022-05-17 19:48:48
  from 'C:\xampp\htdocs\koncowy\app\views\newpost.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_6283e0009ab384_31602051',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '79dd1624f45660df2e44cbb24f2fd194df182508' => 
    array (
      0 => 'C:\\xampp\\htdocs\\koncowy\\app\\views\\newpost.tpl',
      1 => 1652809545,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6283e0009ab384_31602051 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1396218106283e0009a4440_22975113', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'layout.tpl');
}
/* {block 'content'} */
class Block_1396218106283e0009a4440_22975113 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_1396218106283e0009a4440_22975113',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<form action='<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
newpost' method='post'>
		<label for='login'>Title</label>
		<input type='text' id='title' name='title' /><br />

		<textarea rows='20' cols='120' id='content' name='content'></textarea>
		
		<input type='submit' value='submit' />
	</form>
<?php
}
}
/* {/block 'content'} */
}
