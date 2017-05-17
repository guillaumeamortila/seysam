<?php 
define("_BASE_URL", "true");
include_once("../../app/config/config.inc.php");
include_once("../../app/model/pdo.inc.php");

$_POST["dscat"] = $_POST["dscat"];

try{
	$query = $connexion->prepare(
		'UPDATE seysam_sub_categories
			SET scat_desc = :dscat
			WHERE scat_ID = :id');

	$query->bindParam(":dscat", $_POST["dscat"], PDO::PARAM_STR);
	$query->bindParam(":id", $_POST["id"], PDO::PARAM_STR);
	$query->execute();

	$query->closeCursor();

	echo $_POST["dscat"];

}
catch (Exception $e){
	return false; 
}