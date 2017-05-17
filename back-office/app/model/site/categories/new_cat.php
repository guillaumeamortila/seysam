<?php
if(!defined(_BASE_URL)) die("Ressource interdite");

function new_cat()
{

	global $connexion;

	try{

		$req = "INSERT INTO seysam_categories
						(cat_name, cat_desc)
						VALUES
						(:cat_name, :cat_desc)";

		$query = $connexion->prepare($req);

		$query->bindValue(":cat_name",$_POST["cat_name"],PDO::PARAM_STR);
		$query->bindValue(":cat_desc",$_POST["cat_desc"],PDO::PARAM_STR);

		$query ->execute();

		return $connexion->lastInsertId();

	}
	catch (Exception $e){
		return false;
	}
}


