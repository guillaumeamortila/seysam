
<?php include("app/view/layout/header.php"); ?>
	<script type="text/javascript">
		$(document).ready(function(){
			$("#saisie").keyup(function(car){
				if($("#saisie").val().length > 2){	
					console.log(car)
					$.post("webroot/ajax/ajaxAuto1.php",$("#formsearch").serialize(), function(texte){
						$("#titres").html(texte);
					});
				}
			});
			/*$(".lien").click(function(){
				console.log("clic");
				return false;
			});*/

			$(document).on('click', '.lien', function(){
				$("#article").load("webroot/ajax/ajaxAuto2.php?id=" + $(this).attr("title"));
				return false;
			});
		});
</script>
<div class="bloc">
	<h1> Recherche d'articles </h1>
	<div id="ctform">
		<form id="formsearch"> 
			<input type="text" name="saisie" id="saisie" placeholder="Votre requète ici" />
			<i class="material-icons">youtube_searched_for</i>
		</form>
	</div>
	<div id="titres">

	</div>
	<br>
	<div id="article">

	</div>
</div>
<?php include("app/view/layout/footer.php"); ?>
