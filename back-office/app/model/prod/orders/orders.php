<?php 
if(!defined(_BASE_URL)) die("Ressource interdite");


function disp_orders()
{
	global $connexion;
	
	try {
		// préparation de la requète
		$sql = "SELECT order_ID, order_buying_date, order_sending_date, order_reception_date, order_state, order_art_ID, order_buyer_ID, art_ID, art_name, art_price, art_user_ID, ID, user_fname, user_lname, user_mail, user_image_url
				FROM seysam_orders, seysam_articles, seysam_users
				WHERE order_art_ID = art_ID
				AND ID = order_buyer_ID
				ORDER BY order_buying_date DESC";

		$query = $connexion->prepare($sql);

		$query->execute();
		$orders = $query->fetchAll();
		$query->closeCursor();

		return $orders;
	}

	catch ( Exception $e ) {
		die("Connection impossible à MySQL : ".$e->getMessage());
	}
}


function disp_order_crea()
{
	global $connexion;
	
	try {
		// préparation de la requète
		$sql = "SELECT order_ID, order_buying_date, order_art_ID, art_ID, art_user_ID, ID, user_fname, user_lname, user_mail
				FROM seysam_orders, seysam_articles, seysam_users
				WHERE order_art_ID = art_ID
				AND ID = art_user_ID
				ORDER BY order_buying_date DESC";

		$query = $connexion->prepare($sql);

		$query->execute();
		$orders = $query->fetchAll();
		$query->closeCursor();

		return $orders;
	}

	catch ( Exception $e ) {
		die("Connection impossible à MySQL : ".$e->getMessage());
	}
}

