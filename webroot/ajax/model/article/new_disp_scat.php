<?php

function disp_scat($id)
{
	global $pdo;
	
	try {
		// préparation de la requète
		$sql = "SELECT *
				FROM seysam_sub_categories
				WHERE scat_cat_ID = :id
				ORDER BY scat_name ASC";

		$query = $pdo->prepare($sql);

		$query->bindParam(':id', $id, PDO::PARAM_INT);
		$query->execute();
		$sub_categories = $query->fetchAll();
		$query->closeCursor();

		return $sub_categories;
	}

	catch ( Exception $e ) {
		die("Connection impossible à MySQL : ".$e->getMessage());
	}
}
