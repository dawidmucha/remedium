{extends file='layout.tpl'}

{$categories = core\App::getDB()->select("category", "*")}

{block name='content'}
	<form class='d-flex m-3 justify-content-around' action='{$conf->action_root}newarticle' method='post'>
		<div>
			<div class='m-3'>
				<label for='login'>Title</label>
				<input type='text' id='title' name='title' /><br />
			</div>
			
			<fieldset class='form-check'>
				{foreach $categories as $category}
					<input class='m-1 form-check-input' type='radio' name='idCategory' value={$category['idCategory']} />
					<label class='m-1 form-check-label'>{$category['name']}</label> <br />
				{/foreach}
		</fieldset>
		</div>

		<div class='d-flex flex-column'>
			<textarea class='m-3' rows='20' cols='120' id='content' name='content'></textarea>
			<input class='btn btn-primary p-3 m-3' type='submit' value='submit' />
		</div>
	</form>
{/block}