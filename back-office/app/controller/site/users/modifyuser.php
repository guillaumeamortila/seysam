<?php
if(!defined(_BASE_URL)) die("Ressource interdite");
protection("user", "site", "users", "login", USER_LAMBDA);


if( isset($_POST["login"]) && (($_SESSION["user"]["admin_login"] == $_POST["login"]) || ($_SESSION["level"] == USER_ADMIN)))
{

	$_POST["pass"] = md5($_POST["pass"].SALT);

	//appel du modele pr inserer le com
	include_once('app/model/site/users/modify_user.php');
	$modif = modify_user($_GET['id']);

	if(!$modif)
		location("site","users","users","notif=nok#formuser".$_GET["id"]);
	else
		location("site","users","users","notif=ok#formuser".$_GET["id"]);

} else {
	location("site", "users", "users", "notif=nok");
}