{extends file='layout.tpl'}

{block name='content'}
	<form action='{$conf->action_root}articles' method='post'>
		<label for='filter'>Filter by: </label>
		<select name='filter' id='filter'>
			{foreach $categories as $category}
				<option value='{$category}'>{$category}</option>
			{/foreach}
		</select>
		<input type='submit' value='filter' />
	</form>
	{foreach $articles as $article}
		<div style="border: 1px solid black">
			<h3>{$article["title"]}</h3>
			<h4>by {$article["login"]} at {$article["createdAt"]} #{$article["name"]}</h4>
			<p>{$article["content"]}</p>
		</div>
	{/foreach}
{/block}