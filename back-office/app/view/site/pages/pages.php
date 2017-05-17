<?php include("app/view/layout/header.php"); ?>

<div class="bloc">
	<h1>Pages statiques du site</h1>
	<p><i>Cliquez pour modifier</i></p>
	

	<?php foreach ($pages as $page) { ?>

		<ul class="pageul">
			<li class="user modif" id="title<?= $page['page_ID'] ?>" onclick="inputMod(<?= $page['page_ID'] ?>, 'title<?= $page['page_ID'] ?>', 'title', 'page_title_update', true)">
				<h3><p><?= $page['page_title'] ?></p></h3>
			</li>
			<li class="legend">contenu :</li>
			<li class="catuldcat pagecontent modif" id="content<?= $page['page_ID'] ?>" onclick="textareaMod(<?= $page['page_ID'] ?>, 'content<?= $page['page_ID'] ?>', 'content', 'page_content_update')">
				<p><?= nl2br($page['page_content']) ?></p>
			</li>
			<li class="legend">meta title :</li>
			<li class="catuldcat modif" id="meta_title<?= $page['page_ID'] ?>" onclick="inputMod(<?= $page['page_ID'] ?>, 'meta_title<?= $page['page_ID'] ?>', 'meta_title', 'page_meta_title_update')">
				<p><?= $page['page_meta_title'] ?></p>
			</li>
			<li class="legend">meta desc :</li>
			<li class="catuldcat modif" id="meta_desc<?= $page['page_ID'] ?>" onclick="inputMod(<?= $page['page_ID'] ?>, 'meta_desc<?= $page['page_ID'] ?>', 'meta_desc', 'page_meta_desc_update')">
				<p><?= $page['page_meta_desc'] ?></p>
			</li>
		</ul>

	<?php } ?>
	<br>
	<?php
	if ($_SESSION["user"]["admin_ID"] == USER_ADMIN) {
	?>
		<form method="post" action="?pt=site&module=pages&action=new" class="ctform addcat" id="addpage">
			<label for="newtitle" required>NOUVELLE PAGE :</label>
			<input id="newtitle" type="text" name="title" placeholder="titre (affiché dans le menu)" required>
			<textarea name="content" placeholder="contenu" required></textarea>
			<input type="text" name="meta_title" placeholder="meta title" maxlength="100" required>
			<input type="text" name="meta_desc" placeholder="meta description" maxlength="250" required>
			<input type="submit" class="bouton" value="AJOUTER">
		</form>
	<?php } ?>

</div>


<script type="text/javascript">

// Variables
var clicCat = false;
var txt = "";
var h3txt = "";



// TPL

function modif(txt, elem, name, ajax, h3){
	clicCat = false;
	console.log($(elem).find("form").serialize());
	$.post("webroot/ajax/"+ajax+".php", $(elem).find("form").serialize(), function(text){
		if (!h3)
			$(elem).html("<p>"+text+"</p>");
		else
			$(elem).html("<h3><p>"+text+"</p></h3>");
	});
}


function textareaMod(id, elem, name, ajax, h3){
	
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
			modif(txt, elem, name, ajax, h3);
		});

		$(document).on("keydown", function(evt){
			if((evt.keyCode === 13) || (evt.keyCode === 27)) {
				txt = $(elem).find("textarea").val();
				modif(txt, elem, name, ajax, h3);
			}
		});
	}
}


function inputMod(id, elem, name, ajax, h3){
	
	elem = "#"+elem;

	if (clicCat == false) {
		
		clicCat = true;
		id = id.toString();

		txt = $(elem).find("p").text();
		console.log(txt);

		$(elem).html('<form method="post" class="ctform"><input class="hidden" type="text" name="id" value="'+id+'"><input type="text" name="'+name+'" value="'+txt+'" id="inputmod" required></form>');

		$(elem).find("#inputmod").focus();

		$(elem).find("#inputmod").focusout(function(){
			txt = $(elem).find("#inputmod").val();
			modif(txt, elem, name, ajax, h3);
		});

		$(document).on("keydown", function(evt){
			if((evt.keyCode === 13) || (evt.keyCode === 27)) {
				txt = $(elem).find("#inputmod").val();
				modif(txt, elem, name, ajax, h3);
			}
		});
	}
}




</script>

<?php include("app/view/layout/footer.php"); ?>


