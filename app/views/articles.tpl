{extends file='layout.tpl'}

{block name='content'}
	<form action='{$conf->action_root}articles' method='post'>
		<label for='filter'>Filter by: </label>
		<select name='filter' id='filter'>
			<option value="-">-</option>
			{foreach $categories as $category}
				{if $category == $curr_category}
					<option value='{$category}' selected>{$category}</option>
				{else}
					<option value='{$category}'>{$category}</option>
				{/if}
			{/foreach}
		</select>
		<input type='submit' value='filter' />
		{if $curr_category != "-" && $curr_category != ""}
			Currently filtering by: {$curr_category}
		{/if}
	</form>
	{foreach $articles as $article}
		{include 'article.tpl' article=$article}
	{/foreach}
{/block}