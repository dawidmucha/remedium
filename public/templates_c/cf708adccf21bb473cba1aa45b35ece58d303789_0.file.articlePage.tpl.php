<?php
/* Smarty version 4.1.0, created on 2022-05-25 20:44:34
  from 'C:\xampp\htdocs\koncowy\app\views\articlePage.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_628e7912cd3630_85421750',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cf708adccf21bb473cba1aa45b35ece58d303789' => 
    array (
      0 => 'C:\\xampp\\htdocs\\koncowy\\app\\views\\articlePage.tpl',
      1 => 1653504269,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_628e7912cd3630_85421750 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_302985266628e7912cae6e8_83272270', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'layout.tpl');
}
/* {block 'content'} */
class Block_302985266628e7912cae6e8_83272270 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_302985266628e7912cae6e8_83272270',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

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
	<?php if ((\core\RoleUtils::inRole('user') || \core\RoleUtils::inRole('admin'))) {?>
		<div>
			<form action='<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
upvote' method='post' >
				<input type='hidden' name='idUser' value='<?php echo \core\SessionUtils::load("idUser",true);?>
' />
				<input type='hidden' name='idArticle' value='<?php echo $_smarty_tpl->tpl_vars['article']->value["idArticle"];?>
' />
				<button><?php echo $_smarty_tpl->tpl_vars['upvoteButtonText']->value;?>
</button> +<?php echo $_smarty_tpl->tpl_vars['upvotesNumber']->value;?>

		</div>
	<?php } else { ?>
		<div>
			<p>Log in to upvote</p> <p>+<?php echo $_smarty_tpl->tpl_vars['upvotesNumber']->value;?>
</p>
		</div>
	<?php }
}
}
/* {/block 'content'} */
}
