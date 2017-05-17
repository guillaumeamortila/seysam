<?php

if(!defined("_BASE_URL")) die("Ressource interdite!");

function panier_articles($id){
	global $pdo;

	try{

		$query = $pdo->prepare('SELECT *
                                FROM seysam_articles, seysam_art_images
                                WHERE art_ID = :id
                                AND img_art_ID = art_ID
                                AND img_order = 1
                                ORDER BY art_name DESC');

		$query->bindParam(':id', $id, PDO::PARAM_INT);

		$query->execute();

        // fetch req
        $panier_arts = $query->fetchAll();

        // sup cursor
        $query->closeCursor();

        return $panier_arts;
    }

    catch (Exception $e) {
        die("Connexion à MySQL impossible : " . $e->getMessage());
    }
}
