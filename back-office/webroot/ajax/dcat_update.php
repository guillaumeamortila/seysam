<?php 
define("_BASE_URL", "true");
include_once("../../app/config/config.inc.php");
include_once("../../app/model/pdo.inc.php");

$_POST["dcat"] = $_POST["dcat"];

try{
	$query = $connexion->prepare(
		'UPDATE seysam_categories
			SET cat_desc = :dcat
			WHERE cat_ID = :id');

	$query->bindParam(":dcat", $_POST["dcat"], PDO::PARAM_STR);
	$query->bindParam(":id", $_POST["id"], PDO::PARAM_STR);
	$query->execute();

	$query->closeCursor();

	echo $_POST["dcat"];

}
catch (Exception $e){
	return false; 
}