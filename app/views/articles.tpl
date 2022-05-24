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
		<div style="border: 1px solid black">
			<h3>{$article["title"]}</h3>
			<h4>
				by 
				<form style="display: inline-block" action='{$conf->action_root}user' method='post'> <!-- https://stackoverflow.com/questions/6210900/how-can-i-pass-post-parameters-in-a-url -->
					<input type='hidden' name='user' value='{$article["login"]}' />
					<button><b><u>{$article["login"]}</u></b></button> 
				</form>
				at {$article["createdAt"]} #{$article["name"]}</h4>
			<p>{$article["content"]}</p>
		</div>
	{/foreach}
{/block}