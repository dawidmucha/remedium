{extends file='layout.tpl'}

{block name='content'}
	<div class='p-5'>
		<div class='p-2'>
			<h1>{$user["login"]}</h1>
			<div>member since {$user["createdAt"]}</div>
		</div>
		<div class='p-2'>
			<h3>All of {$user["login"]}'s posts</h3>
			{foreach $userArticles as $userArticle}
				{include 'article.tpl' article=$userArticle}
			{/foreach}
		</div>
	</div>
{/block}