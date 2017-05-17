<?php 
define("_BASE_URL", "true");
include_once("../../app/config/config.inc.php");
include_once("../../app/model/pdo.inc.php");

$_POST["scat"] = $_POST["scat"];

try{
	$query = $connexion->prepare(
		'UPDATE seysam_sub_categories
			SET scat_name = :scat
			WHERE scat_ID = :id');

	$query->bindParam(":scat", $_POST["scat"], PDO::PARAM_STR);
	$query->bindParam(":id", $_POST["id"], PDO::PARAM_STR);
	$query->execute();

	$query->closeCursor();

	echo $_POST["scat"];

}
catch (Exception $e){
	return false; 
}