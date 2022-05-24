{extends file='layout.tpl'}

{block name='content'}
	<form action='{$conf->action_root}articles' method='post'>
		<label for='filter'>Filter by: </label>
		<select name='filter' id='filter'>
			<option value="EVERYTHING">EVERYTHING</option>
			{foreach $categories as $category}
				{if $category == $curr_category}
					<option value='{$category}' selected>{$category}</option>
				{else}
					<option value='{$category}'>{$category}</option>
				{/if}
			{/foreach}
		</select>
		<input type='submit' value='filter' />
		Currently filtering by: {$curr_category}
	</form>
	{foreach $articles as $article}
		<div style="border: 1px solid black">
			<h3>{$article["title"]}</h3>
			<h4>by {$article["login"]} at {$article["createdAt"]} #{$article["name"]}</h4>
			<p>{$article["content"]}</p>
		</div>
	{/foreach}
{/block}