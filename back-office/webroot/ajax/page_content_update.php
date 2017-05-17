<?php 
define("_BASE_URL", "true");
include_once("../../app/config/config.inc.php");
include_once("../../app/model/pdo.inc.php");


try{
	$query = $connexion->prepare(
		'UPDATE seysam_common_pages
			SET page_content = :content
			WHERE page_ID = :id');

	$query->bindParam(":content", $_POST["content"], PDO::PARAM_STR);
	$query->bindParam(":id", $_POST["id"], PDO::PARAM_INT);
	$query->execute();

	$query->closeCursor();

	echo nl2br($_POST["content"]);

}
catch (Exception $e){
	return false; 
}



	