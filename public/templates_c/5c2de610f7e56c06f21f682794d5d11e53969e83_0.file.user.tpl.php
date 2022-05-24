<?php
/* Smarty version 4.1.0, created on 2022-05-24 19:32:42
  from 'C:\xampp\htdocs\koncowy\app\views\user.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_628d16bae33645_65269816',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5c2de610f7e56c06f21f682794d5d11e53969e83' => 
    array (
      0 => 'C:\\xampp\\htdocs\\koncowy\\app\\views\\user.tpl',
      1 => 1653413557,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_628d16bae33645_65269816 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2051293821628d16bae0cca3_46787655', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'layout.tpl');
}
/* {block 'content'} */
class Block_2051293821628d16bae0cca3_46787655 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_2051293821628d16bae0cca3_46787655',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<div>
		<h1><?php echo $_smarty_tpl->tpl_vars['user']->value["login"];?>
</h1>
		<h3>member since <?php echo $_smarty_tpl->tpl_vars['user']->value["createdAt"];?>
</h3>
	</div>
	<div>
		All of <?php echo $_smarty_tpl->tpl_vars['user']->value["login"];?>
's posts...
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['userArticles']->value, 'userArticle');
$_smarty_tpl->tpl_vars['userArticle']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['userArticle']->value) {
$_smarty_tpl->tpl_vars['userArticle']->do_else = false;
?>
			<div style="border: 1px solid black">
				<h3><?php echo $_smarty_tpl->tpl_vars['userArticle']->value["title"];?>
</h3>
				<h4>
					by 
					<form style="display: inline-block" action='<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
user' method='post'> <!-- https://stackoverflow.com/questions/6210900/how-can-i-pass-post-parameters-in-a-url -->
						<input type='hidden' name='user' value='<?php echo $_smarty_tpl->tpl_vars['userArticle']->value["login"];?>
' />
						<button><b><u><?php echo $_smarty_tpl->tpl_vars['userArticle']->value["login"];?>
</u></b></button> 
					</form>
					at <?php echo $_smarty_tpl->tpl_vars['userArticle']->value["createdAt"];?>
 #<?php echo $_smarty_tpl->tpl_vars['userArticle']->value["name"];?>
</h4>
				<p><?php echo $_smarty_tpl->tpl_vars['userArticle']->value["content"];?>
</p>
			</div>
		<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	</div>
<?php
}
}
/* {/block 'content'} */
}
