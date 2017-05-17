<?php

/*if(!defined("_BASE_URL")) die("Ressource interdite!");

include("app/view/layout/header.inc.php");*/ ?>

<!-- <div class="wishlist">
 -->
	<?php /*include("app/view/user/aside.php"); */?>

	<div class="main">
	<?php
	// var_dump($orders_buyer);
	// var_dump($comments_user);
	// foreach ($comments_user as $com) {
	// 	# code...
	// }
	?>
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
				// var_dump($order_buyer);

				if ($order_buyer["order_state"]<4) {
			?>
					<div class="card">
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


		 //    $art_comment = array();
			// // var_dump($nb_orders_buyer_received);
			// for($i=0;$i<sizeof($orders_buyer);$i++){
			// 	// $art_comment = 0;
			// 	var_dump($comments_user);
			//     foreach ($comments_user as $com) {
			// 		if($orders_buyer[$i]["order_state"]==4 && $com["com_ranking"]!=null) {
			// 			$art_comment=1;
			// 			// echo $art_comment;
			// 	    }
			// 	    echo $art_comment;
			// 	}

			//     // if($orders_buyer[$i]["order_art_ID"]==4){
			//     // 	$nb_orders_buyer_received[$i] = $orders_buyer[$i]["order_state"];
			//     // }
		 //    }
		    // echo $art_comment;


		    if (!empty($nb_orders_buyer_received)) {
			?>
				<div class="section">
					<div class="title">
						<?php
						if (count($nb_orders_buyer_received)==1)
							echo "Commande à évaluer";
						if (count($nb_orders_buyer_received)>1)
							echo "Commandes à évaluer";
						?>
						<span class="red">.</span>
					</div>
			<?php
			}
			foreach ($orders_buyer as $order_buyer) {
				$art_comment=0;
				foreach ($comments_user as $com) {
					if ($com["com_art_ID"]==$order_buyer["order_art_ID"] && $com["com_ranking"]!=null) {
						$art_comment=1;
						// echo $art_comment;
					}
					echo $art_comment;
				}
				// echo $art_comment;
				// var_dump($order_buyer);
				if ($order_buyer["order_state"]==4 && $art_comment==0) {
			?>
					<div class="card">
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
		                        <div>
		                        	<a class="body-text" href="#"> Je note mon expérience</a>
		                        </div>
		                    </div>
		                </div>
<!-- 		                <div>
		                    <a class="dark-grey" href="#">Commandes antérieures</a>
		                </div> -->
		            </div>

<?php
            	}
            }
            if (!empty($nb_orders_buyer_received))
            	echo "</div>";
        }


		    if (!empty($nb_orders_buyer_received)) {
			?>
				<div class="section">
					<div class="title">
						<?php
						if (count($nb_orders_buyer_received)==1)
							echo "Commande évaluée";
						if (count($nb_orders_buyer_received)>1)
							echo "Commandes évaluées";
						?>
						<span class="red">.</span>
					</div>
			<?php
			}
			foreach ($orders_buyer as $order_buyer) {
				$art_comment=0;
				foreach ($comments_user as $com) {
					if ($com["com_art_ID"]==$order_buyer["order_art_ID"] && $com["com_ranking"]!=null) {
						$art_comment=1;
						// echo $art_comment;
					}
					// echo $art_comment;
				}
				echo $art_comment;
				// var_dump($order_buyer);
				if ($order_buyer["order_state"]==4 && $art_comment==1) {
			?>
					<div class="card">
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
		                        <div>
		                        	<a class="body-text" href="#"> Je note mon expérience</a>
		                        </div>
		                    </div>
		                </div>
<!-- 		                <div>
		                    <a class="dark-grey" href="#">Commandes antérieures</a>
		                </div> -->
		            </div>

<?php
            	}
            }
            if (!empty($nb_orders_buyer_received))
            	echo "</div>";
?>

	</div>
<!-- </div>
 -->

<?php /*include("app/view/layout/footer.inc.php");*/ ?>
