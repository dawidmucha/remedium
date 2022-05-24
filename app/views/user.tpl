{extends file='layout.tpl'}

{block name='content'}
	<div>
		<h1>{$user["login"]}</h1>
		<h3>member since {$user["createdAt"]}</h3>
	</div>
	<div>
		All of {$user["login"]}'s posts...
		{foreach $userArticles as $userArticle}
			<div style="border: 1px solid black">
				<h3>{$userArticle["title"]}</h3>
				<h4>
					by 
					<form style="display: inline-block" action='{$conf->action_root}user' method='post'> <!-- https://stackoverflow.com/questions/6210900/how-can-i-pass-post-parameters-in-a-url -->
						<input type='hidden' name='user' value='{$userArticle["login"]}' />
						<button><b><u>{$userArticle["login"]}</u></b></button> 
					</form>
					at {$userArticle["createdAt"]} #{$userArticle["name"]}</h4>
				<p>{$userArticle["content"]}</p>
			</div>
		{/foreach}
	</div>
{/block}