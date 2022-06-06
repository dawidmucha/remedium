<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pl" lang="pl">
	<head>
		<meta charset="utf-8"/>
		<title>Remedium</title>

		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
	</head>
	<body>
		{block name='topbar'}
			<div class='navbar bg-light p-3'>
				<a href='{$conf->action_root}'>
					<img src='https://i.imgur.com/bdDUZrG.png' alt='remedium logo' />
				</a>

				{if (core\RoleUtils::inRole('user')) || (core\RoleUtils::inRole('admin'))}
					<div class='d-flex flex-column align-items-stretch'>
						<div class='p-2'>
							Currently logged in as <b>{\core\SessionUtils::load('username', true)}</b>
							{if (core\RoleUtils::inRole('admin'))}
								(admin)
							{/if}
						</div>

						<div class='d-flex flex-row justify-content-evenly'>
							<form action='{$conf->action_root}newarticle' method='post'>
								<input type='submit' value='new article' class='p-2 btn btn-primary' />
							</form>

							<form action='{$conf->action_root}logout' method='post'>			
								<input type='submit' value='log out' class='p-2 btn btn-secondary' />
							</form>

							{if (core\RoleUtils::inRole('admin'))}
								<form action='{$conf->action_root}adminPanel' method='post'>			
									<input type='submit' value='admin panel' class='p-2 btn btn-secondary' />
								</form>
							{/if}
						</div>
					</div>
				{else}
					<div class='d-flex flex-column align-items-stretch'>
						<div class='p-2'>
							Obecnie przeglądasz jako gość
						</div>

						<div class='d-flex flex-row justify-content-evenly'>
							<form action='{$conf->action_root}login' method='post'>			
								<input type='submit' value='log in' class='p-2 btn btn-primary' />
							</form>
							<form action='{$conf->action_root}signup' method='post'>			
								<input type='submit' value='sign up' class='p-2 btn btn-success' />
							</form>
						</div>
					</div>
				{/if}
			{/block}
		</div>

		{block name='content'}
			<div>Default 'content' block</div>
		{/block}
	</body>
</html>