{extends file='layout.tpl'}

{block name='content'}
	<form action='{$conf->action_root}signup' method='post'>
		<label for='login'>Login</label>
		<input type='text' id='login' name='login' value={$form->login} />
		<label for='email'>Email</label>
		<input type='text' id='email' name='email' value={$form->email} />
		<label for='password'>Password</label>
		<input type='text' id='password' name='password' />
		<label for='password2'>Confirm Password</label>
		<input type='text' id='password2' name='password2' />
		
		<input type='submit' value='sign up' />
	</form>	
{/block}