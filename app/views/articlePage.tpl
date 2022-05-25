{extends file='layout.tpl'}

{block name='content'}
	<h3>{$article["title"]}</h3>
	<h4>
		by 
		<form style="display: inline-block" action='{$conf->action_root}user' method='post'> <!-- https://stackoverflow.com/questions/6210900/how-can-i-pass-post-parameters-in-a-url -->
			<input type='hidden' name='user' value='{$article["login"]}' />
			<button><b><u>{$article["login"]}</u></b></button> 
		</form>
		at {$article["createdAt"]} #{$article["name"]}</h4>
	<p>{$article["content"]}</p>
	{if (\core\RoleUtils::inRole('user') || \core\RoleUtils::inRole('admin'))}
		<div>
			<form action='{$conf->action_root}upvote' method='post'>
				<input type='hidden' name='idUser' value='{\core\SessionUtils::load("idUser", true)}' />
				<input type='hidden' name='idArticle' value='{$article["idArticle"]}' />
				<button>{$upvoteButtonText}</button> +{$upvotesNumber}
			</form>
			<form action='{$conf->action_root}comment' method='post'>
				<textarea rows='4' columns='20' id='comment' name='comment'></textarea>
				<button>COMMENT</button>
			</form>
		</div>
	{else}
		<div>
			<p>Log in to upvote</p> <p>+{$upvotesNumber}</p>
		</div>
	{/if}
{/block}