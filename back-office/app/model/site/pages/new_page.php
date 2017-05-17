<?php
if(!defined(_BASE_URL)) die("Ressource interdite");

function new_page()
{

	global $connexion;

	try{

		$req = "INSERT INTO seysam_common_pages
						(page_title, page_content, page_meta_desc, page_meta_title)
						VALUES
						(:title, :content, :meta_desc, :meta_title)";

		$query = $connexion->prepare($req);

		$query->bindValue(":title",$_POST["title"],PDO::PARAM_STR);
		$query->bindValue(":content",$_POST["content"],PDO::PARAM_STR);
		$query->bindValue(":meta_desc",$_POST["meta_desc"],PDO::PARAM_STR);
		$query->bindValue(":meta_title",$_POST["meta_title"],PDO::PARAM_STR);

		$query ->execute();

		return $connexion->lastInsertId();

	}
	catch (Exception $e){
		return false;
	}
}


