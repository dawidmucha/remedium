{extends file='layout.tpl'}

{block name='content'}
	<form action='{$conf->action_root}adminPanelEditSubmit' method='post' class='d-flex flex-column align-items-center m-5'>
		<label for='login'>Name</label>
		<input type='text' id='login' name='login' value='{$login}' class='m-2' />
		<label for='email'>Email</label>
		<input type='text' id='email' name='email' value='{$email}' class='m-2' />
		<input type='hidden' id='idUser' name='idUser' value='{$idUser}' class='m-2' />
		
		<input type='submit' value='Save changes' class='btn btn-primary p-3 m-3' />
	</form>	
{/block}