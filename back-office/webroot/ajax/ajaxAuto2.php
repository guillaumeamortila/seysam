<?php 
define("_BASE_URL", "true");
include_once("../../app/config/config.inc.php");
include_once("../../app/model/pdo.inc.php");


try{
	$query = $connexion->prepare(
		'SELECT *
			FROM seysam_articles
			WHERE art_ID = :id');

	$query->bindParam(":id", $_GET["id"], PDO::PARAM_INT);
	$query->execute();
	$posts = $query->fetchAll(); 
	$query->closeCursor();

	foreach($posts as $post){
		echo "<h2>" . utf8_encode($post["post_title"])."</h2><p>" . utf8_encode($post["post_content"])."</p>";
	}
}
catch (Exception $e){
	return false; 
}