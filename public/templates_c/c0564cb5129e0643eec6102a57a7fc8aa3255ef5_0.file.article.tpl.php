<?php
/* Smarty version 4.1.0, created on 2022-05-29 21:57:06
  from 'C:\xampp\htdocs\koncowy\app\views\templates\article.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_6293d01252f871_27821711',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c0564cb5129e0643eec6102a57a7fc8aa3255ef5' => 
    array (
      0 => 'C:\\xampp\\htdocs\\koncowy\\app\\views\\templates\\article.tpl',
      1 => 1653854223,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6293d01252f871_27821711 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_assignInScope('comments', \core\App::getDB()->select('comment',array('idArticle'),array('idArticle'=>$_smarty_tpl->tpl_vars['article']->value['idArticle'])));?>

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
	<p><?php echo substr($_smarty_tpl->tpl_vars['article']->value["content"],0,150);?>
...</p>
	<form action='<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
articlePage' method='post'>
		<input type='hidden' name='idArticle' value='<?php echo $_smarty_tpl->tpl_vars['article']->value["idArticle"];?>
' />
		<input type='hidden' name='idUser' value='<?php echo \core\SessionUtils::load("idUser",true);?>
' />
		<button>Continue</button> <?php echo count($_smarty_tpl->tpl_vars['comments']->value);?>
 Comments
	</form>
</div><?php }
}
