<?php include("app/view/layout/header.php"); ?>

<div class="bloc">
	<h1>Catégories et sous-catégories d'articles</h1>
	<p><i>Cliquez pour modifier • Videz le champ pour supprimer</i></p>
	
	<form method="post" action="?pt=site&module=categories&action=new" class="ctform addcat" id="addcat">
		<label for="newcat">NOUVELLE CATÉGORIE :</label>
		<input id="newcat" type="text" name="cat_name" placeholder="nom" required>
		<textarea name="cat_desc" placeholder="description" required></textarea>
		<input type="submit" class="bouton" value="AJOUTER">
	</form>

	<?php foreach ($categories as $cat) { ?>
		<ul class="catul">			
			<li class="user" id="cat<?= $cat['cat_ID'] ?>" onclick="catModif(<?= $cat['cat_ID'] ?>)">
				<h3><p><?= $cat['cat_name'] ?></p></h3>
			</li>
			<li class="catuldcat" id="dcat<?= $cat['cat_ID'] ?>" onclick="dCatModif(<?= $cat['cat_ID'] ?>)">
				<p><?php
				if ($cat['cat_desc'] != "")
					echo $cat['cat_desc'];
				else
					echo "›› ajouter une description à cette catégorie ‹‹"
				
				?></p>
			</li>

			<?php foreach ($scats as $scat)
			{
				if ($scat["scat_cat_ID"] == $cat["cat_ID"]) { ?>
					<li class="catulscat" id="scat<?= $scat['scat_ID'] ?>" onclick="scatModif(<?= $scat['scat_ID'] ?>)">
						<p><?= $scat['scat_name'] ?></p>
					</li>
					<li class="catuldscat" id="dscat<?= $scat['scat_ID'] ?>" onclick="dScatModif(<?= $scat['scat_ID'] ?>)">
						<p><?php
						if ($scat['scat_desc'] != "")
							echo $scat['scat_desc'];
						else
							echo "›› ajouter une description à cette sous-catégorie ‹‹"
						
						?></p>
					</li>
			<?php }
			}
			?>
		</ul>

		<form method="post" action="?pt=site&module=categories&action=new_scat&id=<?= $cat['cat_ID'] ?>" class="ctform addcat">
			<label for="newscat<?= $cat['cat_ID'] ?>">NOUVELLE SOUS-CATÉGORIE :</label>
			<input id="newscat<?= $cat['cat_ID'] ?>" type="text" name="scat_name" placeholder="nom" required>
			<textarea name="scat_desc" placeholder="description" required></textarea>
			<input type="submit" class="bouton" value="AJOUTER">
		</form>
		
	<?php } ?>
	<br>
</div>

<script type="text/javascript">


// Variables
var clicCat = false;
var txt = "";


// CHANGE CAT NAME
function changeCat(id, txt){
	$.post("webroot/ajax/cat_update.php", { id: id , cat: txt } , function(text){
		$('#cat'+id).html("<h3><p>"+text+"</p></h3>");
	});
	clicCat = false;
}

// CHANGE CAT DESC
function changeDCat(id, txt){
	$.post("webroot/ajax/dcat_update.php", { id: id , dcat: txt } , function(text){
		$('#dcat'+id).html("<p>"+text+"</p>");
	});
	clicCat = false;
}


// CHANGE SS CAT NAME
function changeScat(id, txt){
	$.post("webroot/ajax/scat_update.php", { id: id , scat: txt } , function(text){
		$('#scat'+id).html("<p>"+text+"</p>");
	});
	clicCat = false;
}

// CHANGE SS CAT DESC
function changeDScat(id, txt){
	$.post("webroot/ajax/dscat_update.php", { id: id , dscat: txt } , function(text){
		$('#dscat'+id).html("<p>"+text+"</p>");
	});
	clicCat = false;
}




// ONCLICK // ONSUBMIT

// CAT NAME
function catModif(id){
	
	if (clicCat == false) {
		
		clicCat = true;
		id = id.toString();

		txt = $("#cat"+id).find("p").html();
		$('#cat'+id).html('<form method="post" class="ctform"><input type="text" name="cat" value="'+txt+'"></form>');
		$("#cat"+id).find("input").focus();

		$("#cat"+id).find("input").focusout(function(){
			// Champ vide => Supprimer
			if ( !($("#cat"+id).find("input").val()) )
				window.location = "?pt=site&module=categories&action=delete&id="+id;
			txt = $("#cat"+id).find("input").val();
			changeCat(id, txt);
		});
		$("#cat"+id).find("form").submit(function(){
			event.preventDefault();
			// Champ vide => Supprimer
			if ( !($("#cat"+id).find("input").val()) )
				window.location = "?pt=site&module=categories&action=delete&id="+id;
			txt = $("#cat"+id).find("input").val();
			changeCat(id, txt);
		});
	}
}


// CAT DESC
function dCatModif(id){
	
	if (clicCat == false) {
		
		clicCat = true;
		id = id.toString();

		$("#dcat"+id).find("p:contains(›› ajouter une description)").html("");
		txt = $("#dcat"+id).find("p").text();
		
		$('#dcat'+id).html('<form method="post" class="ctform"><textarea name="dcat" required>'+txt+'</textarea><button onclick="event.preventDefault()" class="bouton">OK</button></form>');
		$("#dcat"+id).find("textarea").focus();

		$("#dcat"+id).find("textarea").focusout(function(){
			clicCat == false;
			txt = $("#dcat"+id).find("textarea").val();
			changeDCat(id, txt);
		});
		$("#dcat"+id).find("form").submit(function(){
			clicCat == false;
			event.preventDefault();
			txt = $("#dcat"+id).find("textarea").val();
			changeDCat(id, txt);
		});
	}
}



// SOUS CAT NAME
function scatModif(id){
	
	if (clicCat == false) {
		
		clicCat = true;
		id = id.toString();

		txt = $("#scat"+id).find("p").text();
		
		$('#scat'+id).html('<form method="post" class="ctform"><input type="text" name="scat" value="'+txt+'"></form>');
		$("#scat"+id).find("input").focus();

		$("#scat"+id).find("input").focusout(function(){
			// Champ vide => Supprimer
			if ( !($("#scat"+id).find("input").val()) )
				window.location = "?pt=site&module=categories&action=delete_scat&id="+id;
			txt = $("#scat"+id).find("input").val();
			changeScat(id, txt);
		});

		$("#scat"+id).find("form").submit(function(){
			event.preventDefault();
			// Champ vide => Supprimer
			if ( !($("#scat"+id).find("input").val()) )
				window.location = "?pt=site&module=categories&action=delete_scat&id="+id;
			txt = $("#scat"+id).find("input").val();
			changeScat(id, txt);
		});
	}
}


// SOUS CAT DESC
function dScatModif(id){
	
	if (clicCat == false) {
		
		clicCat = true;
		id = id.toString();

		$("#dscat"+id).find("p:contains(›› ajouter une description)").html("");
		txt = $("#dscat"+id).find("p").text();
		
		$('#dscat'+id).html('<form method="post" class="ctform"><textarea name="dscat">'+txt+'</textarea><input class="bouton" type="submit" value="OK"></form>');
		$("#dscat"+id).find("textarea").focus();

		$("#dscat"+id).find("textarea").focusout(function(){
			clicCat == false;
			txt = $("#dscat"+id).find("textarea").val();
			changeDScat(id, txt);
		});
		$("#dscat"+id).find("form").submit(function(){
			clicCat == false;
			event.preventDefault();
			txt = $("#dscat"+id).find("textarea").val();
			changeDScat(id, txt);
		});
	}
}



</script>

<?php include("app/view/layout/footer.php"); ?>


