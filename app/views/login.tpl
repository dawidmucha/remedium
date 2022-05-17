{extends file='layout.tpl'}

{block name='content'}
	<form action='{$conf->action_root}login' method='post'>
		<label for='login'>Login</label>
		<input type='text' id='login' name='login' />
		<label for='password'>Password</label>
		<input type='text' id='password' name='password' />
		
		<input type='submit' value='log in' />
	</form>
{/block}