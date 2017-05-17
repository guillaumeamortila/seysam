<?php 
define("_BASE_URL", "true");
include_once("../../app/config/config.inc.php");
include_once("../../app/model/pdo.inc.php");


$_POST["content"] = $_POST["content"];

try{
	$query = $connexion->prepare(
		'UPDATE seysam_blog_articles
			SET blog_art_content = :content
			WHERE blog_art_ID = :id');

	$query->bindParam(":content", $_POST["content"], PDO::PARAM_STR);
	$query->bindParam(":id", $_POST["id"], PDO::PARAM_INT);
	$query->execute();

	$query->closeCursor();

	echo nl2br($_POST["content"]);

}
catch (Exception $e){
	return false; 
}



	