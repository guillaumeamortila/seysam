<div class="aside">
	<div class="intitule">
		<div>
			<?php
			if ($user["user_creator"]==0)
				echo "Devenir créateur ?";
			else
				echo "Prendre des vacances ?";
			?>
		</div>

        <div>V</div>
    </div>

    <div class="mode">
        <div class="close-mode">X</div>
        <div id="a_creator">
            <input type="checkbox" id="switch1" name="switch1" class="switch" <?php if($user["user_creator"]==1){echo"checked";}?> />
            <label for="switch1">
            	<?php
				if ($user["user_creator"]==0)
					echo "Mode créateur désactivé";
				else
					echo "Mode créateur activé";
				?>
            </label>
        </div>
        <div class="explication">
        	<?php
			if ($user["user_creator"]==0)
				echo "En activant le mode créateur, votre profil devient visible par la communauté et vos créations peuvent être proposées à la vente.";
			else
				echo "En désactivant le mode créateur, votre profil redeviendra invisible par la communauté et vos créations ne seront plus visibles sur la plateforme.";
			?>
        </div>
    </div>



	<div class="info">

		<div class="user section">
			<div class="user-photo">
				<?php
				echo "<img src='webroot/img/profils/".$user['user_image_url']."' alt='".$user['user_fname']."-".$user['user_lname']."' title='".$user['user_fname']."-".$user['user_lname']."' >";
				?>
			</div>
			<div class="user-info">
				<div class="title username">
					<?php echo $user['user_fname']." ".$user['user_lname'];?>
					<span class="red">.</span>
				</div>

				<div>
			        <div class="grey" onclick="changement_page('update_profil');">Réglages</div> -
			        <a href="?module=user&action=logout" class="grey">Déconnexion</a>
			    </div>
<!-- 					<div>Acheteur | Vendeur</div> -->
				<?php
				if ($nb_orders_buyer==1)
					echo "<div  onclick='changement_page(\"orders_buyer\");'>".$nb_orders_buyer." produit acheté <i class='material-icons'>keyboard_arrow_right</i></div>";
				if ($nb_orders_buyer>1)
					echo "<div  onclick='changement_page(\"orders_buyer\");'>".$nb_orders_buyer." produits achetés <i class='material-icons'>keyboard_arrow_right</i></div>";
				if ($nb_orders_creator==1)
					echo "<div  onclick='changement_page(\"orders_creator\");'>".$nb_orders_creator." produit vendu <i class='material-icons'>keyboard_arrow_right</i></div>";
				if ($nb_orders_creator>1)
					echo "<div  onclick='changement_page(\"orders_creator\");'>".$nb_orders_creator." produits vendus <i class='material-icons'>keyboard_arrow_right</i></div>";
				?>
<!-- 					<div>12 produits vendus</div>
-->			</div>
		</div>
		<a href="?module=article&action=new" class="section border row">
            <div class="size-3em">+</div>
            <div>J'ajoute un article à ma boutique</div>
        </a>

<!-- 		<div>
	        <a href="" class="grey" onclick="changement_page('update_profil');">Réglages</a> -
	        <a href="?module=user&action=logout" class="grey">Déconnexion</a>
	    </div>
 -->
		<div class="section">
            <div class="title">
                Ventes en cours<span class="red">.</span>
            </div>
            <div class="commande top-5">
                <div class="add img"></div>
                <div>
                    <form method="post" action="#">
                        <div class="bold">Nom du produit<i class='material-icons'>keyboard_arrow_right</i></div>
                        <div class="top-5 small"><input type="radio" name="accepter-vente" value="Valider la vente" required="required" />Valider la vente
                        </div>
                        <div class="small"><input type="radio" name="refuser-vente" value="Refuser la vente" required="required" />Refuser la vente
                        </div>
                    </form>
                </div>
            </div>
        </div>


		<?php
		// var_dump($orders_buyer);
		// echo $orders_buyer[0]["art_name"];
		if ($nb_orders_buyer>=1) {

			$nb_orders_buyer_waiting = array();
			// var_dump($nb_orders_buyer_waiting);
			for($i=0;$i<sizeof($orders_buyer);$i++){
			    if($orders_buyer[$i]["order_state"]<4){
			    	$nb_orders_buyer_waiting[$i] = $orders_buyer[$i]["order_state"];
			    }
		    }
		    // if (empty($nb_orders_buyer_waiting)){
		    // var_dump($nb_orders_buyer_waiting);}


		    if (!empty($nb_orders_buyer_waiting)) {
			?>
				<div class="section">
					<div class="title">
						<?php
						if (count($nb_orders_buyer_waiting)==1)
							echo "Commande en cours";
						if (count($nb_orders_buyer_waiting)>1)
							echo "Commandes en cours";
						?>
						<span class="red">.</span>
					</div>
			<?php
			}
			foreach ($orders_buyer as $order_buyer) {
				if ($order_buyer["order_state"]<4) {
			?>
					<div class="commande">
	                    <div class="add img">
	                    	<?php
							echo "<img src='webroot/img/produits/".$order_buyer['img_url']."' alt='".$order_buyer['art_name']."' title='".$order_buyer['art_name']."' >";
							?>
	                    </div>
	                    <div>
	                        <div><?=$order_buyer["art_name"];?></div>
	                        <div class="etat grey-13">
	                            <div>
	                            <?php
	                            	if ($order_buyer['order_state']==1)
	                            		echo '<img src="webroot/img/icons/not-yet.svg" />';
	                            	else
	                            		echo '<img src="webroot/img/icons/success.svg" />';
	                            ?>
	                            </div>

	                            <div>
	                            <?php
	                            	if ($order_buyer['order_state']==1)
	                            		echo "Attente de confirmation";
	                            	else
	                            		echo "Confirmation de l'achat";
	                            ?>
	                            </div>
	                        </div>
	                        <div class="etat grey-13">
	                            <div>
	                            <?php
	                            	if ($order_buyer['order_state']<3)
	                            		echo '<img src="webroot/img/icons/not-yet.svg" />';
	                            	else
	                            		echo '<img src="webroot/img/icons/success.svg" />';
	                            ?>
	                            </div>
	                            <div>
	                            <?php
	                            	if ($order_buyer['order_state']<3)
	                            		echo "Attente de l'envoi";
	                            	else
	                            		echo "Livraison en cours";
	                            ?>
	                            </div>
	                        </div>
	                        <div class="etat grey-13">
	                            <div><img src="webroot/img/icons/not-yet.svg" /></div>
	                            <div>Colis réceptionné</div>
	                        </div>
	                    </div>
	                </div>

            <?php
            	}
            }
            if (!empty($nb_orders_buyer_waiting))
            	echo "</div>";




            $nb_orders_buyer_received = array();
			// var_dump($nb_orders_buyer_received);
			for($i=0;$i<sizeof($orders_buyer);$i++){
			    if($orders_buyer[$i]["order_state"]==4){
			    	$nb_orders_buyer_received[$i] = $orders_buyer[$i]["order_state"];
			    }
		    }

		    if (!empty($nb_orders_buyer_received)) {
			?>
				<div class="section">
					<div class="title">
						<?php
						if (count($nb_orders_buyer_received)==1)
							echo "Commande réceptionnée";
						if (count($nb_orders_buyer_received)>1)
							echo "Commandes réceptionnées";
						?>
						<span class="red">.</span>
					</div>
			<?php
			}
			foreach ($orders_buyer as $order_buyer) {
				if ($order_buyer["order_state"]==4) {
			?>
					<div class="commande">
	                    <div class="add img">
	                    	<?php
							echo "<img src='webroot/img/produits/".$order_buyer['img_url']."' alt='".$order_buyer['art_name']."' title='".$order_buyer['art_name']."' >";
							?>
	                    </div>
	                    <div>
	                        <div class="etat grey-13">
	                            <div><?=$order_buyer["art_name"];?></div>
	                        </div>
	                        <div class="a_grade">
	                        	<a class="body-text" href="#"> Je note mon expérience <i class='material-icons'>keyboard_arrow_right</i></a>
	                        </div>
	                    </div>
	                </div>
	                <!-- <div>
	                    <a class="dark-grey" href="#">Commandes antérieures</a>
	                </div> -->

<?php
            	}
            } ?>
            	<div>
                    <a class="dark-grey" href="#">Commandes antérieures</a>
                </div>
            <?php
            if (!empty($nb_orders_buyer_received))
            	echo "</div>";
        }
?>


		<?php
			// foreach ($orders_buyer as $order_buyer) {
			// 	echo $order_buyer["img_url"];
			// }
		?>


<!-- 
		<div class="section">
			<div class="title">
				Vos créateurs préférés<span class="red">.</span>
			</div>
			<div class="row fav-creator">
				<div class="img drn"></div>
				<div class="add description">
					<div>Nom du produit</div>
				</div>
			</div>
			<div class="row fav-creator">
				<div class="img drn"></div>
				<div class="add description">
					<div>Nom du produit</div>
				</div>
			</div>
			<div class="row fav-creator">
				<div class="img drn"></div>
				<div class="add description">
					<div>Nom du produit</div>
				</div>
			</div>
		</div> -->
	</div>
	<p class="test" onclick="changement_page('add_article');">add_article</p>
</div>

<!-- <div class="row flat-card">
        <div class="col-md-12">
            <form id="form_post" method="post" action="#">
                <div class="form-group">
                    <label for="userPass">Mot de passe <span class="reqLgd">*</span></label>
                    <input id="userPass" type="password" class="form-control" name="user_pass">
                </div>
                <div class="form-group">
                    <label for="userEmail">Email <span class="reqLgd">*</span></label>
                    <input id="userEmail" type="text" class="form-control" value="<?php echo $user["user_mail"]; ?>" name="user_mail">
                </div>
                <div class="form-group">
                    <label for="user_fname">Prénom <span class="reqLgd">*</span></label>
                    <input id="user_fname" type="text" class="form-control" value="<?php echo $user["user_fname"]; ?>" name="user_fname">
                </div>
                <button type="submit" class="btn btn-primary">Modifier</button><p class="lgd">* champs obligatoires</p>
            </form>
        </div>
    </div> -->

<?php
include("app/view/user/popup-aside.php");
?>

<script type="text/javascript">


function changement_page(page){
  // var content=document.getElementById('content'+nb);
  	// $("p.test").text('b');
  	if(page=="orders_buyer")
    	$("#main_user").load('webroot/ajax/controller/order/orders_buyer.php');

    if(page=="orders_creator")
    	$("#main_user").load('webroot/ajax/controller/order/orders_creator.php');

    if(page=="update_profil")
    	$("#main_user").load('webroot/ajax/controller/user/update.php');

    if(page=="add_article")
    	$("#main_user").load('webroot/ajax/controller/article/new.php');


    // else
    // 	$("#main_user").load('webroot/ajax/controller/article/reload_card_index.php');
}

</script>