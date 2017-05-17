<?php 
define("_BASE_URL", "true");
include_once("../../app/config/config.inc.php");
include_once("../../app/model/pdo.inc.php");

$_POST["cat"] = $_POST["cat"];

try{
	$query = $connexion->prepare(
		'UPDATE seysam_categories
			SET cat_name = :cat
			WHERE cat_ID = :id');

	$query->bindParam(":cat", $_POST["cat"], PDO::PARAM_STR);
	$query->bindParam(":id", $_POST["id"], PDO::PARAM_STR);
	$query->execute();

	$query->closeCursor();

	echo $_POST["cat"];

}
catch (Exception $e){
	return false; 
}