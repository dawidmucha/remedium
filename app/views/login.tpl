{extends file='layout.tpl'}

{block name='content'}
	<form action='{$conf->action_root}login' method='post' class='d-flex flex-column align-items-center m-5'>
		<label for='login'>Login</label>
		<input type='text' id='login' name='login' class='m-2' /> <br />
		<label for='password'>Password</label>
		<input type='password' id='password' name='password' class='m-2' /> <br />
		
		<input type='submit' value='log in' class='btn btn-primary p-3 m-3' />
	</form>
{/block}