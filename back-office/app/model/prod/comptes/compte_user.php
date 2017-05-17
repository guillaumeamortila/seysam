<?php 
if(!defined(_BASE_URL)) die("Ressource interdite");

function disp_user($id)
{
	global $connexion;
	
	try {
		// préparation de la requète
		$sql = "SELECT *
				FROM seysam_users
				WHERE ID = :id";

		$query = $connexion->prepare($sql);

		$query->bindParam(':id', $id, PDO::PARAM_INT);
		$query->execute();
		$user_infos = $query->fetchAll();
		$query->closeCursor();

		$user_info = $user_infos[0];
		return $user_info;
	}
	
	catch ( Exception $e ) {
		die("Connection impossible à MySQL : ".$e->getMessage());
	}
}


function disp_user_addresses($id)
{
	global $connexion;
	
	try {

		$sql = "SELECT *
				FROM seysam_addresses
				WHERE address_user_ID = :id
				ORDER BY address_order";

		$query = $connexion->prepare($sql);

		$query->bindParam(':id', $id, PDO::PARAM_INT);
		$query->execute();
		$user_addresses = $query->fetchAll();
		$query->closeCursor();

		return $user_addresses;
	}
	
	catch ( Exception $e ) {
		die("Connection impossible à MySQL : ".$e->getMessage());
	}
}



function disp_user_likes($id)
{
	global $connexion;
	
	try {
		// préparation de la requète
		$sql = "SELECT DISTINCT *
				FROM seysam_users, seysam_likes, seysam_articles, seysam_art_images, seysam_sub_categories, seysam_categories
				WHERE like_user_ID = :id
				AND art_ID = like_art_ID
				AND art_user_ID = ID
				AND img_art_ID = art_ID
				AND img_order = 1
				AND art_scat_ID = scat_ID
				AND cat_ID = scat_cat_ID";

		$query = $connexion->prepare($sql);

		$query->bindParam(':id', $id, PDO::PARAM_INT);
		$query->execute();
		$user_likes = $query->fetchAll();
		$query->closeCursor();

		return $user_likes;
	}
	
	catch ( Exception $e ) {
		die("Connection impossible à MySQL : ".$e->getMessage());
	}
}

