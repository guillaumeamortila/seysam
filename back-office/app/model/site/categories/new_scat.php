<?php
if(!defined(_BASE_URL)) die("Ressource interdite");

function new_cat()
{

	global $connexion;

	try{

		$req = "INSERT INTO seysam_sub_categories
						(scat_name, scat_desc, scat_cat_ID)
						VALUES
						(:scat_name, :scat_desc, :id)";

		$query = $connexion->prepare($req);

		$query->bindValue(":scat_name",$_POST["scat_name"],PDO::PARAM_STR);
		$query->bindValue(":scat_desc",$_POST["scat_desc"],PDO::PARAM_STR);
		$query->bindValue(":id",$_GET["id"],PDO::PARAM_INT);

		$query ->execute();

		return $connexion->lastInsertId();

	}
	catch (Exception $e){
		return false;
	}
}


