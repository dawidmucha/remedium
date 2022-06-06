{extends file='layout.tpl'}

{block name='content'}
	<h1>admin panel</h1>
	<table class='table'>
		<thead>
			<tr>
				<th>id</th>
				<th>login</th>
				<th>email</th>
				<th>created at</th>
				<th>role</th>
				<th>idRole</th>
				<th>actions</th>
			</tr>
		</thead>
		<tbody>
			{foreach $users as $user}
				<tr>
					{foreach $user as $el}
						<td>{$el}</td>
					{/foreach}
					<td>
						<form action='{$conf->action_root}adminPanelEdit' method='post'>	
							<input type='hidden' name='idUser' value='{$user["idUser"]}' />
							<input type='hidden' name='login' value='{$user["login"]}' />
							<input type='hidden' name='email' value='{$user["email"]}' />
							<button>Edit</button>
						</form>
						<form action='{$conf->action_root}adminPanelAdmin' method='post'>
							<input type='hidden' name='idUser' value='{$user["idUser"]}' />
							<input type='hidden' name='login' value='{$user["login"]}' />
							<input type='hidden' name='email' value='{$user["email"]}' />
							<input type='hidden' name='role' value='{$user["role"]}' />
							<input type='hidden' name='idRole' value='{$user["idRole"]}' />
							{if $user['idRole'] == 1}
								<button>Revoke admin</button>
							{else}
								<button>Grant admin</button>
							{/if}
						</form>
						<form action='{$conf->action_root}adminPanelRemove' method='post'>
							<input type='hidden' name='idUser' value='{$user["idUser"]}' />
							<input type='hidden' name='login' value='{$user["login"]}' />
							<input type='hidden' name='email' value='{$user["email"]}' />
							<button>Remove</button>
						</form>
					</td>
				</tr>
			{/foreach}
		</tbody>
	</table>
	<hr />
{/block}