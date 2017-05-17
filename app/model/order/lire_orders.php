<?php

if(!defined("_BASE_URL")) die("Ressource interdite!");

function lire_orders_buyer($id){
	global $pdo;

	try{

		$query = $pdo->prepare('SELECT order_buying_date, order_sending_date, order_reception_date, order_state, order_art_ID, art_name, img_url
                                FROM seysam_orders, seysam_articles, seysam_art_images
                                WHERE order_art_ID=art_ID
                                AND img_art_ID=art_ID
                                AND img_order=1
                                AND order_buyer_ID=:id
                                ORDER BY order_buying_date DESC');

		$query->bindParam(':id', $id, PDO::PARAM_INT);

		$query->execute();

        // fetch req
        $orders_buyer = $query->fetchAll();

        // sup cursor
        $query->closeCursor();

        return $orders_buyer;
    }

    catch (Exception $e) {
        die("Connexion à MySQL impossible : " . $e->getMessage());
    }
}


function lire_orders_creator($id){
    global $pdo;

    try{

        $query = $pdo->prepare('SELECT *
                                FROM seysam_orders, seysam_articles, seysam_art_images, seysam_users
                                WHERE order_art_ID=art_ID
                                AND img_art_ID=art_ID
                                AND img_order=1
                                AND art_user_ID=:id
                                ORDER BY order_buying_date DESC');

        $query->bindParam(':id', $id, PDO::PARAM_INT);

        $query->execute();

        // fetch req
        $orders_creator = $query->fetchAll();

        // sup cursor
        $query->closeCursor();

        return $orders_creator;
    }

    catch (Exception $e) {
        die("Connexion à MySQL impossible : " . $e->getMessage());
    }
}