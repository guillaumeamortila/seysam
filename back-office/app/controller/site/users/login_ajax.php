<?php
if(!defined(_BASE_URL)) die("Ressource interdite");

if(isset($_SESSION["user"]))
	header("Location:?module=article&action=index");


if(isset($_POST["login"])){

	$_POST["pass"] = md5($_POST["pass"].SALT);

	// Appel du model pour chercher un user
	include_once("app/model/user/verif_login.php");
	$retour = verif_login($_POST);

	//var_dump($retour);

	if(!$retour){
		echo 0;
	} else {
		$_SESSION["user"] = $retour;
		if($retour["ID"] == 1){
			$_SESSION["level"] = 1;
		} else {
			$_SESSION["level"] = 0;
		}
		echo $_SESSION["user"]["display_name"];
	}
}

