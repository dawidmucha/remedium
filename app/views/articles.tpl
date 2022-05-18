{extends file='layout.tpl'}

{block name='content'}
	{foreach $articles as $article}
		<div>
			<h3>{$article["title"]}</h3>
			<h4>by {$article["login"]} at {$article["createdAt"]} #{$article["name"]}</h4>
			<p>{$article["content"]}</p>
		</div>
	{/foreach}
{/block}