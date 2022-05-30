{extends file='layout.tpl'}

{block name='content'}
	<form action='{$conf->action_root}articles' method='post' class='p-3'>
		<label for='filter'>Filter by: </label>
		<select name='filter' id='filter' class='btn btn-light dropdown-toggle'>
			<option value="-">-</option>
			{foreach $categories as $category}
				{if $category == $curr_category}
					<option value='{$category}' selected>{$category}</option>
				{else}
					<option value='{$category}'>{$category}</option>
				{/if}
			{/foreach}
		</select>
		<input type='submit' value='filter' class='btn btn-primary' />
		{if $curr_category != "-" && $curr_category != ""}
			Currently filtering by: {$curr_category}
		{/if}
	</form>
	{foreach $articles as $article}
		{include 'article.tpl' article=$article}
	{/foreach}
{/block}