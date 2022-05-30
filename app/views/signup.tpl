{extends file='layout.tpl'}

{block name='content'}
	<form action='{$conf->action_root}signup' method='post' class='d-flex flex-column align-items-center m-5'>
		<label for='login'>Login</label>
		<input type='text' id='login' name='login' value='{$form->login}' class='m-2' />
		<label for='email'>Email</label>
		<input type='text' id='email' name='email' value='{$form->email}' class='m-2' />
		<label for='password'>Password</label>
		<input type='text' id='password' name='password' class='m-2' />
		<label for='password2'>Confirm Password</label>
		<input type='text' id='password2' name='password2' class='m-2' />
		
		<input type='submit' value='sign up' class='btn btn-primary p-3 m-3' />
	</form>	
{/block}