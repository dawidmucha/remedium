{$comments = \core\App::getDB()->select('comment', array('idArticle'), array('idArticle' => $article['idArticle']))}

<div class='card m-2 p-4'>
	<h2>{$article["title"]}</h2>
	<h5>
		by 
		<form style="display: inline-block" action='{$conf->action_root}user' method='post'> <!-- https://stackoverflow.com/questions/6210900/how-can-i-pass-post-parameters-in-a-url -->
			<input type='hidden' name='user' value='{$article["login"]}' />
			<button class='btn badge bg-light'><b><u style='text-decoration: none; color: black; font-weight: 500;'>{$article["login"]}</u></b></button> 
		</form>
		at {$article["createdAt"]} #{$article["name"]}</h5>
	<p>{substr($article["content"], 0, 150)}...</p>
	<form action='{$conf->action_root}articlePage' method='post'>
		<input type='hidden' name='idArticle' value='{$article["idArticle"]}' />
		<input type='hidden' name='idUser' value='{\core\SessionUtils::load("idUser", true)}' />
		<button class='btn btn-primary'>Continue</button> {count($comments)} Comments
	</form>
</div>