<?php include("app/view/layout/header.php"); ?>

<div class="bloc">
	<p><i>Cliquez sur le titre ou le contenu pour les modifier</i></p><br><br>
	<ul id="art-caract">
		<li id="title" onclick="inputMod(<?= $_GET['id'] ?>, 'title', 'title', 'art_title_update', true)" class="modif">
			<h1><?= $article["blog_art_title"] ?></h1>
		</li>
		<li id="author">Rédigé par <a href="?pt=site&module=users&action=user&id=<?=$article['admin_ID']?> "><?= $article["admin_fname"]." ".$article["admin_lname"]?></a>, le <?=$article["blog_art_date"]?></li>
		<li id="content" class="modif" onclick="textareaMod(<?= $_GET['id'] ?>, 'content', 'content', 'art_content_update')">
			<p id="art-content" class="pagecontent"><?= nl2br($article["blog_art_content"]) ?></p>
		</li>
		<li>
			<a href="?pt=site&module=articles&action=delete&id=<?= $_GET['id'] ?>" onclick="return confirm('Supprimer définitivement cet article ?') "><button class="boutonsuppr" id="supprart">supprimer l'article</button></a>
		</li>
	</ul>
	<br>
	<p id="retourlist"><a href="index.php">« retour à la liste</a></p>
</div>

<script type="text/javascript">
	

// Variables
var clicCat = false;
var txt = "";
var h3txt = "";



// TPL

function modif(txt, elem, name, ajax, h1){
	clicCat = false;
	console.log($(elem).find("form").serialize());
	$.post("webroot/ajax/"+ajax+".php", $(elem).find("form").serialize(), function(text){
		if (!h1)
			$(elem).html("<p>"+text+"</p>");
		else
			$(elem).html("<h1>"+text+"</h1>");
	});
}


function textareaMod(id, elem, name, ajax, h1){
	
	elem = "#"+elem;

	if (clicCat == false) {
		
		clicCat = true;
		id = id.toString();

		txt = $(elem).find("p").text();
		console.log(txt);

		$(elem).html('<form method="post" class="ctform"><input class="hidden" type="text" name="id" value="'+id+'"><textarea name="'+name+'" required>'+txt+'</textarea><input class="bouton" type="submit" value="OK"></form>');

		$(elem).find("textarea").focus();

		$(elem).find("textarea").focusout(function(){
			txt = $(elem).find("textarea").val();
			modif(txt, elem, name, ajax, h1);
		});

		$(document).on("keydown", function(evt){
			if(evt.keyCode === 27) {
				txt = $(elem).find("textarea").val();
				modif(txt, elem, name, ajax, h1);
			}
		});
	}
}


function inputMod(id, elem, name, ajax, h1){
	
	elem = "#"+elem;

	if (clicCat == false) {
		
		clicCat = true;
		id = id.toString();

		txt = $(elem).find("h1").text();
		console.log(txt);

		$(elem).html('<form method="post" class="ctform"><input class="hidden" type="text" name="id" value="'+id+'"><input type="text" name="'+name+'" value="'+txt+'" id="inputmod" required></form>');

		$(elem).find("#inputmod").focus();

		$(elem).find("#inputmod").focusout(function(){
			txt = $(elem).find("#inputmod").val();
			modif(txt, elem, name, ajax, h1);
		});

		$(document).on("keydown", function(evt){
			if((evt.keyCode === 13) || (evt.keyCode === 27)) {
				txt = $(elem).find("#inputmod").val();
				modif(txt, elem, name, ajax, h1);
			}
		});
	}
}


</script>

<?php include("app/view/layout/footer.php"); ?>

