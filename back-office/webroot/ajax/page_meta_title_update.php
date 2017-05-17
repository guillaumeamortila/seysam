<?php 
define("_BASE_URL", "true");
include_once("../../app/config/config.inc.php");
include_once("../../app/model/pdo.inc.php");


$_POST["meta_title"] = $_POST["meta_title"];

try{
	$query = $connexion->prepare(
		'UPDATE seysam_common_pages
			SET page_meta_title = :meta_title
			WHERE page_ID = :id');

	$query->bindParam(":meta_title", $_POST["meta_title"], PDO::PARAM_STR);
	$query->bindParam(":id", $_POST["id"], PDO::PARAM_INT);
	$query->execute();

	$query->closeCursor();

	echo $_POST["meta_title"];

}
catch (Exception $e){
	return false; 
}



