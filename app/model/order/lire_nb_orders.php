<?php

if(!defined("_BASE_URL")) die("Ressource interdite!");

function lire_nb_orders_buyer($id) {

    global $pdo;

    try {
        // send req
        $query = $pdo->prepare('SELECT COUNT(order_ID)
        						AS nb_orders
        						FROM seysam_orders
        						WHERE order_buyer_ID=:id');

		$query->bindParam(':id', $id, PDO::PARAM_INT);

        // execute req
        $query->execute();

        // fetch req
        $nb_orders_buyer = $query->fetch();

        // sup cursor
        $query->closeCursor();

        return $nb_orders_buyer["nb_orders"];
    }

    catch (Exception $e) {

        error($e, "Connexion à MySQL impossible");

    }
}


function lire_nb_orders_creator($id) {

    global $pdo;

    try {
        // send req
        $query = $pdo->prepare('SELECT COUNT(order_ID)
        						AS nb_orders
        						FROM seysam_orders, seysam_articles
        						WHERE order_art_ID=art_ID
        						AND art_user_ID=:id');

		$query->bindParam(':id', $id, PDO::PARAM_INT);

        // execute req
        $query->execute();

        // fetch req
        $nb_orders_creator = $query->fetch();

        // sup cursor
        $query->closeCursor();

        return $nb_orders_creator["nb_orders"];
    }

    catch (Exception $e) {

        error($e, "Connexion à MySQL impossible");

    }
}