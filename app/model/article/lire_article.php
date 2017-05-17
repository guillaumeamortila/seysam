<?php

if(!defined("_BASE_URL")) die("Ressource interdite!");

function lire_article($id){
	global $pdo;

	try{

		$query = $pdo->prepare('SELECT art_ID, art_name, art_desc, art_date, art_price, cat_name, img_url, user_fname, user_lname
                                FROM seysam_articles, seysam_users, seysam_categories, seysam_sub_categories, seysam_art_images
                                WHERE art_user_ID=ID
								AND art_scat_ID=scat_ID
                                AND scat_cat_ID=cat_ID
                                AND img_art_ID=art_ID
                                AND img_order=1
								AND art_ID=:id');

		$query->bindParam(':id', $id, PDO::PARAM_INT);

		$query->execute();

        // fetch req
        $article = $query->fetchAll();

        // sup cursor
        $query->closeCursor();

        return $article[0];
    }

    catch (Exception $e) {
        die("Connexion à MySQL impossible : " . $e->getMessage());
    }
}