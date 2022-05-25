<div style="border: 1px solid black">
	<h3>{$article["title"]}</h3>
	<h4>
		by 
		<form style="display: inline-block" action='{$conf->action_root}user' method='post'> <!-- https://stackoverflow.com/questions/6210900/how-can-i-pass-post-parameters-in-a-url -->
			<input type='hidden' name='user' value='{$article["login"]}' />
			<button><b><u>{$article["login"]}</u></b></button> 
		</form>
		at {$article["createdAt"]} #{$article["name"]}</h4>
	<p>{substr($article["content"], 0, 150)}...</p>
	<form action='{$conf->action_root}articlePage' method='post'>
		<input type='hidden' name='idArticle' value='{$article["idArticle"]}' />
		<input type='hidden' name='idUser' value='{\core\SessionUtils::load("idUser", true)}' />
		<button>Continue</button>
	</form>
</div>