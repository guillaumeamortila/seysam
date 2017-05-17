<?php 
define("_BASE_URL", "true");
include_once("../../app/config/config.inc.php");
include_once("../../app/model/pdo.inc.php");

try{
	$query = $connexion->prepare(
		'UPDATE seysam_orders
			SET order_state = :state
			WHERE order_ID = :id');

	$query->bindParam(":state", $_POST["state"], PDO::PARAM_INT);
	$query->bindParam(":id", $_POST["id"], PDO::PARAM_INT);
	$query->execute();

	$query->closeCursor();

}
catch (Exception $e){
	return false; 
}