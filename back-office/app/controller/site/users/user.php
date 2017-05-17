<?php
if(!defined(_BASE_URL)) die("Ressource interdite");
protection("user", "site", "users", "login", USER_LAMBDA);

// Test du parametre
if(isset($_GET['id'])){

	//appel du modèle pour obtenir un article
	//include_once("app/model/site/users/disp_user.php");

	$usertable = selecttable('seysam_admin_users', array("wherecolumn" => "admin_ID", "wherevalue" => $_GET['id']));
	$user = $usertable[0];
	$user_arts = selecttable('seysam_blog_articles', array("wherecolumn" => "blog_art_author", "wherevalue" => $user["admin_ID"]));
	//$user_arts = disp_user_articles($_GET['id']);

	//appel de la vue correspondante
	define("PAGE_TITLE", "Liste des articles de ".$user['admin_fname']." ".$user['admin_lname']);
	include_once("app/view/site/users/user.php");
} else {
	include_once('app/view/error.php');
}