<?php
if(!defined(_BASE_URL)) die("Ressource interdite");
protection("user", "site", "users", "login", USER_LAMBDA);

	$users = selecttable("seysam_users", array("orderby" => "ID", "order" => "desc"));

	define("PAGE_TITLE","Tous les utilisateurs");
	include_once('app/view/prod/comptes/comptes.php');




