{extends file='layout.tpl'}

{block name='content'}
	<form action='{$conf->action_root}newpost' method='post'>
		<label for='login'>Title</label>
		<input type='text' id='title' name='title' /><br />

		<textarea rows='20' cols='120' id='content' name='content'></textarea>
		
		<input type='submit' value='submit' />
	</form>
{/block}