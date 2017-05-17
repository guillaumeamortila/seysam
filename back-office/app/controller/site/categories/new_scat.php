<?php
if(!defined(_BASE_URL)) die("Ressource interdite");
protection("user", "site", "users", "login", USER_LAMBDA);


// NEW CATÉGORIE
if(isset($_POST["scat_name"]) && isset($_POST["scat_desc"]) && isset($_GET["id"])){

	//appel du modele pour inserer la catégorie
	include_once('app/model/site/categories/new_scat.php');

	$retour = new_cat();

	if(!$retour)
		location("site","categories","categories","notif=reqNok");
	else
		location("site","categories","categories","notif=ok");

} else {
	location("site","categories","categories","notif=nok");
}


