<?php
if(!defined(_BASE_URL)) die("Ressource interdite");
protection("user", "site", "users", "login", USER_ADMIN);


if(!isset($_POST["login"])){

	location("site","users","users","notif=nok");

} else {

	$_POST["pass"] = md5($_POST["pass"].SALT);
	//appel du modele pr inserer le pass
	include_once('app/model/site/users/insert_user.php');
	$retour_user = insert_user();

	if(!$retour_user)
		location("site","users","users","notif=nok");
	else
		location("site","users","users","notif=ok");
}