<?php 
define("_BASE_URL", "true");
include_once("../../app/config/config.inc.php");
include_once("../../app/model/pdo.inc.php");


$_POST["title"] = $_POST["title"];

try{
	$query = $connexion->prepare(
		'UPDATE seysam_blog_articles
			SET blog_art_title = :title
			WHERE blog_art_ID = :id');

	$query->bindParam(":title", $_POST["title"], PDO::PARAM_STR);
	$query->bindParam(":id", $_POST["id"], PDO::PARAM_INT);
	$query->execute();

	$query->closeCursor();

	echo $_POST["title"];

}
catch (Exception $e){
	return false; 
}



	