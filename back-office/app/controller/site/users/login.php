<?php
if(!defined(_BASE_URL)) die("Ressource interdite");

if(isset($_SESSION["user"]))
	location("site", "articles", "index");

define("PAGE_TITLE","Login");

if(!isset($_POST["login"])){
	include("app/view/site/users/login.php");
} else {

	$_POST["pass"] = md5($_POST["pass"].SALT);
	// Appel du model pour chercher un user
	include_once("app/model/site/users/verif_login.php");
	$retour = verif_login($_POST);

	//var_dump($retour);

	if(!$retour){
		location("site", "users", "login", "notif=nok");
		//header("Location:?module=user&action=login&notif=nok");
		//exit;
	} else {
		$_SESSION["user"] = $retour;
		if($retour["admin_authority"] == 1){
			$_SESSION["level"] = 1;
			//location("site", "articles", "admin");
			location("site", "articles", "index");
		} else {
			$_SESSION["level"] = 0;
			// header("Location:?");
			// exit;
			location("site", "articles", "index");
		}
		location("site", "articles", "index");
	}
}