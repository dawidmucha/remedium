<?php
/* Smarty version 4.1.0, created on 2022-05-30 17:31:38
  from 'C:\xampp\htdocs\koncowy\app\views\templates\article.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_6294e35a3178a3_72745830',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c0564cb5129e0643eec6102a57a7fc8aa3255ef5' => 
    array (
      0 => 'C:\\xampp\\htdocs\\koncowy\\app\\views\\templates\\article.tpl',
      1 => 1653924694,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6294e35a3178a3_72745830 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_assignInScope('comments', \core\App::getDB()->select('comment',array('idArticle'),array('idArticle'=>$_smarty_tpl->tpl_vars['article']->value['idArticle'])));?>

<div class='card m-2 p-4'>
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
	<p><?php echo substr($_smarty_tpl->tpl_vars['article']->value["content"],0,150);?>
...</p>
	<form action='<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
articlePage' method='post'>
		<input type='hidden' name='idArticle' value='<?php echo $_smarty_tpl->tpl_vars['article']->value["idArticle"];?>
' />
		<input type='hidden' name='idUser' value='<?php echo \core\SessionUtils::load("idUser",true);?>
' />
		<button class='btn btn-primary'>Continue</button> <?php echo count($_smarty_tpl->tpl_vars['comments']->value);?>
 Comments
	</form>
</div><?php }
}
