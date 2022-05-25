{extends file='layout.tpl'}

{block name='content'}
	<div>
		<h1>{$user["login"]}</h1>
		<div>member since {$user["createdAt"]}</div>
	</div>
	<div>
		<h3>All of {$user["login"]}'s posts...</h3>
		{foreach $userArticles as $userArticle}
			{include 'article.tpl' article=$userArticle}
		{/foreach}
	</div>
{/block}