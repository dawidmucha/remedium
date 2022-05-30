{extends file='layout.tpl'}

{block name='content'}
	<div class='p-5'>
		<h2>{$article["title"]}</h2>
		<h5>
			by 
			<form style="display: inline-block" action='{$conf->action_root}user' method='post'> <!-- https://stackoverflow.com/questions/6210900/how-can-i-pass-post-parameters-in-a-url -->
				<input type='hidden' name='user' value='{$article["login"]}' />
				<button class='btn badge bg-light'><b><u style='text-decoration: none; color: black; font-weight: 500;'>{$article["login"]}</u></b></button> 
			</form>
			at {$article["createdAt"]} #{$article["name"]}</h5>
		<p>{$article["content"]}</p>
		{if (\core\RoleUtils::inRole('user') || \core\RoleUtils::inRole('admin'))}
			<div>
				<!-- remove article -->
				{if ($article['idUser'] == \core\SessionUtils::load('id', true)) || (\core\RoleUtils::inRole('admin'))}
					<form action={$conf->action_root}removeArticle method='post'>
						<input type='hidden' name='idUser' value='{\core\SessionUtils::load("idUser", true)}' />
						<input type='hidden' name='idArticle' value='{$article["idArticle"]}' />
						<h4><button class='btn btn-danger'>REMOVE ARTICLE</button></h4>
					</form>
				{/if}
				
				<!-- upvote -->
				<form action='{$conf->action_root}upvote' method='post'>
					<input type='hidden' name='idUser' value='{\core\SessionUtils::load("idUser", true)}' />
					<input type='hidden' name='idArticle' value='{$article["idArticle"]}' />
					<h4><button class='btn btn-primary'>{$upvoteButtonText}</button> <span class='badge bg-secondary'>+{$upvotesNumber}</span></h4>
				</form>

				<!-- comment -->
				<form action='{$conf->action_root}comment' method='post' class='d-flex flex-column align-items-center'>
					<textarea rows='5' cols='60' id='comment' name='comment' class='m-3 p-1'></textarea>
					<input type='hidden' name='idUser' value='{\core\SessionUtils::load("idUser", true)}' />
					<input type='hidden' name='idArticle' value='{$article["idArticle"]}' />
					<button class='btn btn-primary m-3 p-4'>COMMENT</button>
				</form>
			</div>
		{else}
			<h4>
				<span>Log in to upvote</span> <div class='badge bg-secondary'>+{$upvotesNumber}</div>
			</h4>
		{/if}

		<div>
			<h3>{count($comments)} Comments</h3>
			{foreach $comments as $comment}
				<div class='m-2'>
					<b>{$comment['login']}</b>:  {$comment['content']} <i style='color: grey;'>at {$comment['createdAt']}</i>
					{if ($comment['idUser'] == \core\SessionUtils::load('id', true)) || (\core\RoleUtils::inRole('admin'))}
						<form action='{$conf->action_root}removeComment' method='post' style='display: inline-block'>
							<input type='hidden' name='idComment' value='{$comment['idComment']}' />
							<input type='hidden' name='idArticle' value='{$article["idArticle"]}' />
							<button class='btn btn-danger'>x</button>
						</form>
					{/if}
				</div>
			{/foreach}
		</div>
	</div>
{/block}