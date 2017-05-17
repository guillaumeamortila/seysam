<?php include("app/view/layout/header.php"); ?>

<div class="bloc" id="pageorders">
	<div id="menu_arts">
		<h1>Dernières commandes effectuées</h1>
		<!--<div id="ctform">
			<form id="formsearch"> 
				<input type="text" name="saisie" id="saisie" placeholder="Rechercher rapide" />
				<i class="material-icons">youtube_searched_for</i>
			</form>
		</div>-->
	</div>

	<div id="search_result"></div>
	
	<?php
	// fct calc différence entre 2 dates
	
	$now = time();
	function dateDiff($date1, $date2){
	    $diff = abs($date1 - $date2);
	    $retour = array();
	 
	    $tmp = $diff;
	    $retour['second'] = $tmp % 60;
	 
	    $tmp = floor( ($tmp - $retour['second']) /60 );
	    $retour['minute'] = $tmp % 60;
	 
	    $tmp = floor( ($tmp - $retour['minute']) /60 );
	    $retour['hour'] = $tmp % 24;
	 
	    $tmp = floor( ($tmp - $retour['hour']) /24 );
	    $retour['day'] = $tmp;
	
	    return $retour;
	}

	$i = 0;
	foreach ($orders as $order)
	{
	$crea = $order_crea[$i];



	// Différence dates

	if (!$order['order_sending_date']){
		$date2 = strtotime($order['order_buying_date']);
		$date_diff = dateDiff($now, $date2);
	}
	else if (!$order['order_reception_date']) {
		$date2 = strtotime($order['order_sending_date']);
		$date_diff = dateDiff($now, $date2);
	} else {
		$date_diff = 0;
	}
	 


	if ($order['order_state'] == 0)
		echo "<div id='order".$order['order_ID']."' class='orderbloc archived'>";
	else
		echo "<div id='order".$order['order_ID']."' class='orderbloc'>";
	?>
		<ul class="userul orderctnr">
			<li>
				<p class="titleorder">Le <?= $order['order_buying_date'] ?>, <a href="?pt=prod&module=comptes&action=compte_user&id=<?= $order['ID'] ?>"><?= $order['user_fname']." ".$order['user_lname'] ?></a> à acheté le produit <a href="?pt=prod&module=produits&action=produits&search=<?= $order['art_name'] ?>"><?= $order['art_name'] ?></a> à <a href="?pt=prod&module=comptes&action=compte_crea&id=<?= $crea['ID'] ?>"><?= $crea['user_fname']." ".$crea['user_lname'] ?></a></p>
			</li>
			<li class="orderctt">
				<p id="porderctt<?= $order['order_ID'] ?>">ÉTAT DE LA COMMANDE : <span>
				<?php if ($order['order_state'] == 0)
					echo " <i class='red material-icons'>add_circle</i>abandonnée";
				else if ($order['order_state'] == 4)
					echo " <i class='green material-icons'>check_circle</i>terminée";
				else
					echo $order["order_state"]."/4";
				?>
				</span><br>
					<?php
					if ($order["order_state"] > 0)
						echo "<i class='green material-icons'>check_circle</i>";
					else
						echo "<i class='red material-icons'>add_circle</i>";
					echo "Commande passée le ". $order['order_buying_date'] .", non confirmée par le vendeur<br>";
					if ($order["order_state"] > 1)
						echo "<i class='green material-icons'>check_circle</i>";
					else
						echo "<i class='red material-icons'>add_circle</i>";
					echo "Commande confirmée par le vendeur, envoi imminent<br>";
					if ($order["order_state"] > 2){
						echo "<i class='green material-icons'>check_circle</i>";
						$date3 = " le ".$order['order_sending_date'];
					}
					else{
						echo "<i class='red material-icons'>add_circle</i>";
						$date3 = "";
					}
					echo "Produit envoyé".$date3." par le vendeur<br>";
					if ($order["order_state"] > 3){
						echo "<i class='green material-icons'>check_circle</i>";
						$date4 = " le ".$order['order_reception_date'];
					}
					else{
						echo "<i class='red material-icons'>add_circle</i>";
						$date4 = "";
					}
					echo "Produit bien réceptionné le".$date4." par l'acheteur";
					?>
				</p>
			</li>
		</ul>
		<?php
		$etape = ["", "ÉTAPE 2 : VALIDER LA COMMANDE", "ÉTAPE 3 : VALIDER L'ENVOI", "ÉTAPE 4 : VALIDER LA RÉCEPTION"];
		
		if (($order['order_state'] != 4) && ($order['order_state'] != 0)) { ?>
		<button class="boutonrd updateorder" onclick="updateOrder(<?= $order['order_ID'] ?>, <?= $order['order_state'] ?>)" ><i class="material-icons">add_circle_outline</i><?= $etape[$order["order_state"]] ?></button>
		<?php } ?>
		<a href="mailto:<?= $order['user_mail'] ?>"><button class="boutonrd">contacter l'acheteur</button></a>
		<a href="mailto:<?= $crea['user_mail'] ?>"><button class="boutonrd">contacter le vendeur</button></a>
		<?php if($date_diff['day'] > 13) $dateclass = "toarchive"; else $dateclass = ""; ?>
		<button class="boutonrd boutonsuppr <?=$dateclass?>" onclick="archiveOrder(<?= $order['order_ID'] ?>)">
			<?php
			if($date_diff['day'] > 13)
				echo "pas d'update depuis ".$date_diff['day']." jours<br>ARCHIVER LA COMMANDE";
			else
				echo "archiver la commande";
			?>
			
		</button>
	</div>

	<?php
	$i++;
	}
	?>

</div>

<script type="text/javascript">

var etape = ["", "ÉTAPE 2 : VALIDER LA COMMANDE", "ÉTAPE 3 : VALIDER L'ENVOI", "ÉTAPE 4 : VALIDER LA RÉCEPTION"];
var stateinc = 0;

function updateOrder(id, state){
	if (stateinc == 0)
		stateinc = state;
	stateinc++;
	$.post("webroot/ajax/update_order.php", { id: id , state: stateinc }, function(){
		$("#order"+id).find(".updateorder").html("<i class='material-icons'>add_circle_outline</i>"+etape[stateinc]);
		$("#porderctt"+id).find("i:contains(add_circle):first").removeClass("red");
		$("#porderctt"+id).find("i:contains(add_circle):first").addClass("green");
		$("#porderctt"+id).find("i:contains(add_circle):first").html("check_circle");
		$("p#porderctt"+id+" span:first").html(stateinc+"/4");
		if (stateinc == 4){
			$("#order"+id).find(".updateorder").hide();
			$("p#porderctt"+id+" span:first").html("<i class='green material-icons'>check_circle</i>terminée");

		}
	});
}

function archiveOrder(id){
	$.post("webroot/ajax/update_order.php", { id: id , state: 0 }, function(){
		$("#order"+id).find(".updateorder").html("<i class='material-icons'>add_circle_outline</i>"+etape[stateinc]);
		$("#porderctt"+id).find("i:contains(check_circle)").removeClass("green");
		$("#porderctt"+id).find("i:contains(check_circle)").addClass("red");
		$("#porderctt"+id).find("i:contains(check_circle)").html("add_circle");
		$("#order"+id).find(".updateorder").hide();
		$("p#porderctt"+id+" span:first").html("<i class='red material-icons'>add_circle</i>abandonnée");
		$("#order"+id).addClass("archived");
	});
}


$(document).ready(function(){
/*
	$("#saisie").keyup(function(){
		if($("#saisie").val().length > 1){
			console.log($("#formsearch").serialize());
			$.post("webroot/ajax/ajaxAutoComptes.php", $("#formsearch").serialize(), function(texte){
				$("#search_result").html(texte);
			});
		}
		else if($("#saisie").val().length < 1){
			$("#search_result").html("");
		}
	});
*/
});

</script>

<?php include("app/view/layout/footer.php"); ?>


