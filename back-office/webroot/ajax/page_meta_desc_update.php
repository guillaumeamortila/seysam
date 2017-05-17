<?php 
define("_BASE_URL", "true");
include_once("../../app/config/config.inc.php");
include_once("../../app/model/pdo.inc.php");


$_POST["meta_desc"] = $_POST["meta_desc"];

try{
	$query = $connexion->prepare(
		'UPDATE seysam_common_pages
			SET page_meta_desc = :meta_desc
			WHERE page_ID = :id');

	$query->bindParam(":meta_desc", $_POST["meta_desc"], PDO::PARAM_STR);
	$query->bindParam(":id", $_POST["id"], PDO::PARAM_INT);
	$query->execute();

	$query->closeCursor();

	echo $_POST["meta_desc"];

}
catch (Exception $e){
	return false; 
}



