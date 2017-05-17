<?php
if(!defined(_BASE_URL)) die("Ressource interdite");
protection("user", "site", "users", "login", USER_LAMBDA);


// NEW CATÉGORIE
if(isset($_POST["cat_name"]) && isset($_POST["cat_desc"])){

	//appel du modele pour inserer la catégorie
	include_once('app/model/site/categories/new_cat.php');

	$retour = new_cat();

	if(!$retour)
		location("site","categories","categories","notif=reqNok");
	else
		location("site","categories","categories","notif=ok");

} else {
	location("site","categories","categories","notif=nok");
}


