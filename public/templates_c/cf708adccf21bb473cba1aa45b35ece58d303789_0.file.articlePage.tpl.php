<?php
/* Smarty version 4.1.0, created on 2022-05-29 21:15:31
  from 'C:\xampp\htdocs\koncowy\app\views\articlePage.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_6293c653cebcb1_64084937',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cf708adccf21bb473cba1aa45b35ece58d303789' => 
    array (
      0 => 'C:\\xampp\\htdocs\\koncowy\\app\\views\\articlePage.tpl',
      1 => 1653851728,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6293c653cebcb1_64084937 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4700293206293c653ca4af4_61657632', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'layout.tpl');
}
/* {block 'content'} */
class Block_4700293206293c653ca4af4_61657632 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_4700293206293c653ca4af4_61657632',
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
upvote' method='post'>
				<input type='hidden' name='idUser' value='<?php echo \core\SessionUtils::load("idUser",true);?>
' />
				<input type='hidden' name='idArticle' value='<?php echo $_smarty_tpl->tpl_vars['article']->value["idArticle"];?>
' />
				<button><?php echo $_smarty_tpl->tpl_vars['upvoteButtonText']->value;?>
</button> +<?php echo $_smarty_tpl->tpl_vars['upvotesNumber']->value;?>

			</form>
			<form action='<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
comment' method='post'>
				<textarea rows='4' columns='20' id='comment' name='comment'></textarea>
				<input type='hidden' name='idUser' value='<?php echo \core\SessionUtils::load("idUser",true);?>
' />
				<input type='hidden' name='idArticle' value='<?php echo $_smarty_tpl->tpl_vars['article']->value["idArticle"];?>
' />
				<button>COMMENT</button>
			</form>
		</div>
	<?php } else { ?>
		<div>
			<p>Log in to upvote</p> <p>+<?php echo $_smarty_tpl->tpl_vars['upvotesNumber']->value;?>
</p>
		</div>
	<?php }?>

	<div>
		<h3><?php echo count($_smarty_tpl->tpl_vars['comments']->value);?>
 Comments</h3>
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['comments']->value, 'comment');
$_smarty_tpl->tpl_vars['comment']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['comment']->value) {
$_smarty_tpl->tpl_vars['comment']->do_else = false;
?>
			<div>
				<b><?php echo $_smarty_tpl->tpl_vars['comment']->value['login'];?>
</b>:  <?php echo $_smarty_tpl->tpl_vars['comment']->value['content'];?>

				<?php if (($_smarty_tpl->tpl_vars['comment']->value['idUser'] == \core\SessionUtils::load('id',true)) || (\core\RoleUtils::inRole('admin'))) {?>
					<form action='<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
removeComment' method='post' style='display: inline-block'>
						<input type='hidden' name='idComment' value='<?php echo $_smarty_tpl->tpl_vars['comment']->value['idComment'];?>
' />
						<input type='hidden' name='idArticle' value='<?php echo $_smarty_tpl->tpl_vars['article']->value["idArticle"];?>
' />
						<button>x</button>
					</form>
				<?php }?>
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
