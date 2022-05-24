<?php
/* Smarty version 4.1.0, created on 2022-05-24 19:43:48
  from 'C:\xampp\htdocs\koncowy\app\views\articles.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_628d19544ed3a5_19803896',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '38c68c27188e23e2fe1c3716ae40ec495a58a51a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\koncowy\\app\\views\\articles.tpl',
      1 => 1653414224,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_628d19544ed3a5_19803896 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_321958170628d19544c47a2_31489387', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'layout.tpl');
}
/* {block 'content'} */
class Block_321958170628d19544c47a2_31489387 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_321958170628d19544c47a2_31489387',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<form action='<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
articles' method='post'>
		<label for='filter'>Filter by: </label>
		<select name='filter' id='filter'>
			<option value="-">-</option>
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categories']->value, 'category');
$_smarty_tpl->tpl_vars['category']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['category']->value) {
$_smarty_tpl->tpl_vars['category']->do_else = false;
?>
				<?php if ($_smarty_tpl->tpl_vars['category']->value == $_smarty_tpl->tpl_vars['curr_category']->value) {?>
					<option value='<?php echo $_smarty_tpl->tpl_vars['category']->value;?>
' selected><?php echo $_smarty_tpl->tpl_vars['category']->value;?>
</option>
				<?php } else { ?>
					<option value='<?php echo $_smarty_tpl->tpl_vars['category']->value;?>
'><?php echo $_smarty_tpl->tpl_vars['category']->value;?>
</option>
				<?php }?>
			<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		</select>
		<input type='submit' value='filter' />
		<?php if ($_smarty_tpl->tpl_vars['curr_category']->value != "-" && $_smarty_tpl->tpl_vars['curr_category']->value != '') {?>
			Currently filtering by: <?php echo $_smarty_tpl->tpl_vars['curr_category']->value;?>

		<?php }?>
	</form>
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['articles']->value, 'article');
$_smarty_tpl->tpl_vars['article']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['article']->value) {
$_smarty_tpl->tpl_vars['article']->do_else = false;
?>
		<div style="border: 1px solid black">
			<h3><?php echo $_smarty_tpl->tpl_vars['article']->value["title"];?>
</h3>
			<h4>
				by 
				<form style="display: inline-block" action='<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
user' method='post'> <!-- https://stackoverflow.com/questions/6210900/how-can-i-pass-post-parameters-in-a-url -->
					<input type='hidden' name='user' value='<?php echo $_smarty_tpl->tpl_vars['article']->value["login"];?>
' />
					<button><b><u><?php echo $_smarty_tpl->tpl_vars['article']->value["login"];?>
</u></b></button> 
				</form>
				at <?php echo $_smarty_tpl->tpl_vars['article']->value["createdAt"];?>
 #<?php echo $_smarty_tpl->tpl_vars['article']->value["name"];?>
</h4>
			<p><?php echo $_smarty_tpl->tpl_vars['article']->value["content"];?>
</p>
		</div>
	<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}
/* {/block 'content'} */
}
