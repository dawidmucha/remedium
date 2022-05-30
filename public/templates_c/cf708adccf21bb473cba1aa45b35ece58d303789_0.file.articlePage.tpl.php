<?php
/* Smarty version 4.1.0, created on 2022-05-30 18:08:12
  from 'C:\xampp\htdocs\koncowy\app\views\articlePage.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_6294ebec6cf1a7_38278389',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cf708adccf21bb473cba1aa45b35ece58d303789' => 
    array (
      0 => 'C:\\xampp\\htdocs\\koncowy\\app\\views\\articlePage.tpl',
      1 => 1653926889,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6294ebec6cf1a7_38278389 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7892967476294ebec6b34d9_79889306', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'layout.tpl');
}
/* {block 'content'} */
class Block_7892967476294ebec6b34d9_79889306 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_7892967476294ebec6b34d9_79889306',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<div class='p-5'>
		<h2><?php echo $_smarty_tpl->tpl_vars['article']->value["title"];?>
</h2>
		<h5>
			by 
			<form style="display: inline-block" action='<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
user' method='post'> <!-- https://stackoverflow.com/questions/6210900/how-can-i-pass-post-parameters-in-a-url -->
				<input type='hidden' name='user' value='<?php echo $_smarty_tpl->tpl_vars['article']->value["login"];?>
' />
				<button class='btn badge bg-light'><b><u style='text-decoration: none; color: black; font-weight: 500;'><?php echo $_smarty_tpl->tpl_vars['article']->value["login"];?>
</u></b></button> 
			</form>
			at <?php echo $_smarty_tpl->tpl_vars['article']->value["createdAt"];?>
 #<?php echo $_smarty_tpl->tpl_vars['article']->value["name"];?>
</h5>
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
					<h4><button class='btn btn-primary'><?php echo $_smarty_tpl->tpl_vars['upvoteButtonText']->value;?>
</button> <span class='badge bg-secondary'>+<?php echo $_smarty_tpl->tpl_vars['upvotesNumber']->value;?>
</span></h4>
				</form>

				<form action='<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
comment' method='post' class='d-flex flex-column align-items-center'>
					<textarea rows='5' cols='60' id='comment' name='comment' class='m-3 p-1'></textarea>
					<input type='hidden' name='idUser' value='<?php echo \core\SessionUtils::load("idUser",true);?>
' />
					<input type='hidden' name='idArticle' value='<?php echo $_smarty_tpl->tpl_vars['article']->value["idArticle"];?>
' />
					<button class='btn btn-primary m-3 p-4'>COMMENT</button>
				</form>
			</div>
		<?php } else { ?>
			<h4>
				<span>Log in to upvote</span> <div class='badge bg-secondary'>+<?php echo $_smarty_tpl->tpl_vars['upvotesNumber']->value;?>
</div>
			</h4>
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
				<div class='m-2'>
					<b><?php echo $_smarty_tpl->tpl_vars['comment']->value['login'];?>
</b>:  <?php echo $_smarty_tpl->tpl_vars['comment']->value['content'];?>

					<?php if (($_smarty_tpl->tpl_vars['comment']->value['idUser'] == \core\SessionUtils::load('id',true)) || (\core\RoleUtils::inRole('admin'))) {?>
						<form action='<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
removeComment' method='post' style='display: inline-block'>
							<input type='hidden' name='idComment' value='<?php echo $_smarty_tpl->tpl_vars['comment']->value['idComment'];?>
' />
							<input type='hidden' name='idArticle' value='<?php echo $_smarty_tpl->tpl_vars['article']->value["idArticle"];?>
' />
							<button class='btn btn-danger'>x</button>
						</form>
					<?php }?>
				</div>
			<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		</div>
	</div>
<?php
}
}
/* {/block 'content'} */
}
