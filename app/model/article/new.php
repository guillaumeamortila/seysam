<?php

if(!defined("_BASE_URL")) die("Ressource interdite!");

function insert_article($post, $user_id){
	global $pdo;

	try {
		$sql = "INSERT INTO seysam_articles
			(art_name, art_desc, art_price, art_scat_ID, art_user_ID)
		values 
			(:name, :art_desc, :price, :scat, :user_id)";

		$query = $pdo->prepare($sql);

		$query->bindValue(':name', $post["name"], PDO::PARAM_STR);
        $query->bindValue(':art_desc', $post["desc"], PDO::PARAM_STR);
        $query->bindValue(':price', $post["price"], PDO::PARAM_STR);
        $query->bindValue(':scat', $post["scat"], PDO::PARAM_INT);
        $query->bindValue(':user_id', $user_id, PDO::PARAM_INT);

        // On execute la requête

        $query->execute();

        // Return de l'id
        return $pdo->lastInsertId();

	}

	catch (Exception $e){
       return false;
    }	
}


function insert_art_img($imgurl, $art_id){
	global $pdo;

	try {
		$sql = "INSERT INTO seysam_art_images
			(img_url, img_art_ID)
		values 
			(:imgurl, :art_id)";

		$query = $pdo->prepare($sql);

		$query->bindValue(':imgurl', $imgurl, PDO::PARAM_STR);
        $query->bindValue(':art_id', $art_id, PDO::PARAM_INT);

        // On execute la requête
        $query->execute();

        // Return de l'id
        return $pdo->lastInsertId();
	}

	catch (Exception $e){
       return false;
    }	
}