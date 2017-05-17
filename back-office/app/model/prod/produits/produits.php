<?php 
if(!defined(_BASE_URL)) die("Ressource interdite");


function disp_articles($offset, $limite, $orderby, $orderway)
{
	global $connexion;
	
	try {
		// préparation de la requète
		$sql = "SELECT *
				FROM seysam_articles, seysam_users, seysam_art_images, seysam_sub_categories, seysam_categories
				WHERE ID = art_user_ID
				AND img_art_ID = art_ID
				AND img_order = 1
				AND art_scat_ID = scat_ID
				AND cat_ID = scat_cat_ID ";
		$sql .= "ORDER BY ".$orderby." ".$orderway." ";
		$sql .= "LIMIT :offset, :limite";

		$query = $connexion->prepare($sql);

		$query->bindParam(':offset', $offset, PDO::PARAM_INT);
		$query->bindParam(':limite', $limite, PDO::PARAM_INT);
		$query->execute();
		$articles = $query->fetchAll();
		$query->closeCursor();

		return $articles;
	}

	catch ( Exception $e ) {
		die("Connection impossible à MySQL : ".$e->getMessage());
	}
}

