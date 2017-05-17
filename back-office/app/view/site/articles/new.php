<?php
include("app/view/layout/header.php");
// Notif NOK
if(isset($_GET['notif']) && $_GET['notif'] == 'nok')
		{
			echo "<div id='notifnok'><span>Un problème a eu lieu lors de la création de l'article<br></span>
				Nous sommes désolés et allons règler ce problème dans les plus brefs délais.<br>
				<a href='index.php'>Retour aux articles</a><div id='close_notif'> x </div></div>";
		}
?>
<div class="bloc">
	<h1>Fiche article</h1>
	<form id="form_post" method="post" action="?pt=site&module=articles&action=new">
		<div id="ctform">
			<div>
				<input name="post_title" id="post_title" type="text" size="100" maxlength="150" required="required">
				<label for="post_title">Titre</label>
			</div>
			<div>
				<textarea name="post_content" id="post_content" cols="99" rows="14" required="required"></textarea>
				<label for="post_content" id="label_content">Contenu</label>
			</div>
			<div>
				<input id="bouton" type="submit" value="AJOUTER">
			</div>
		</div>
	</form>
</div>

<script type="text/javascript">
	
$("#close_notif").on('click', function(){
	$('#notifnok').fadeOut();
})

</script>

<?php include("app/view/layout/footer.php"); ?>
