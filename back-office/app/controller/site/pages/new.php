<?php
if(!defined(_BASE_URL)) die("Ressource interdite");
protection("user", "site", "users", "login", USER_LAMBDA);


// NEW CATÉGORIE
if(isset($_POST["title"]) && isset($_POST["content"])){

	//appel du modele pour inserer la catégorie
	include_once('app/model/site/pages/new_page.php');

	$retour = new_page();

	if(!$retour)
		location("site","pages","pages","notif=reqNok");
	else
		location("site","pages","pages","notif=ok");

} else {
	location("site","pages","pages","notif=nok");
}


