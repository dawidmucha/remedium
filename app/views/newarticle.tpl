{extends file='layout.tpl'}

{$categories = core\App::getDB()->select("category", "*")}

{block name='content'}
	<form action='{$conf->action_root}newarticle' method='post'>
		<label for='login'>Title</label>
		<input type='text' id='title' name='title' /><br />
		
		<fieldset>
			{foreach $categories as $category}
				<label><input type='radio' name='idCategory' value={$category['idCategory']}>{$category['name']}</input></label>
			{/foreach}
		</fieldset>

		<textarea rows='20' cols='120' id='content' name='content'></textarea>
		
		<input type='submit' value='submit' />
	</form>
{/block}