<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pl" lang="pl">
	<head>
		<meta charset="utf-8"/>
		<title>Remedium</title>
	</head>
	<body>
		{block name='topbar'}
			<a href='{$conf->action_root}'>Re:medium</a>

			{if (core\RoleUtils::inRole('user'))}
				<div>
					Obecnie zalogowany jako user {\core\SessionUtils::load('id', true)}
				</div>
				<form action='{$conf->action_root}logout' method='post'>			
					<input type='submit' value='log out' />
				</form>

				<form action='{$conf->action_root}newarticle' method='post'>
					<input type='submit' value='new article' />
				</form>
			{elseif (core\RoleUtils::inRole('admin'))}
				<div>
					Obecnie zalogowany jako admin
				</div>
				<form action='{$conf->action_root}logout' method='post'>			
					<input type='submit' value='log out' />
				</form>

				<form action='{$conf->action_root}newarticle' method='post'>
					<input type='submit' value='new article' />
				</form>
			{else}
				<div>
					Obecnie przeglądasz jako gość
				</div>
				<form action='{$conf->action_root}login' method='post'>			
					<input type='submit' value='log in' />
				</form>
				<form action='{$conf->action_root}signup' method='post'>			
					<input type='submit' value='sign up' />
				</form>
			{/if}
		{/block}

		{block name='content'}
			<div>Default 'content' block</div>
		{/block}
	</body>
</html>