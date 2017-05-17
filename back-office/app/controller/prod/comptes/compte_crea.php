<?php
if(!defined(_BASE_URL)) die("Ressource interdite");
protection("user", "site", "users", "login", USER_LAMBDA);

if (isset($_GET['id'])){

	include_once('app/model/prod/comptes/compte_crea.php');
	$user = disp_user($_GET['id']);
	$articles = disp_user_arts($_GET['id']);
	$likes = disp_user_likes($_GET['id']);
	$addresses = disp_user_addresses($_GET['id']);

	define("PAGE_TITLE","Profil du créateur ".$user['user_fname']." ".$user['user_lname']);
	include_once('app/view/prod/comptes/compte_crea.php');

} else {
	include_once('app/view/error.php');
}




