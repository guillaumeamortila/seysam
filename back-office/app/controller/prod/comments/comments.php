<?php
if(!defined(_BASE_URL)) die("Ressource interdite");
protection("user", "site", "users", "login", USER_LAMBDA);


	$comments = selecttable("seysam_comments_rankings, seysam_articles, seysam_users", ["wherecolumn" => "art_ID", "wherevalue" => "com_art_ID", "and" => "ID = com_user_ID", "orderby" => "com_date", "order" => "desc"]);

	// $comments = selecttable("seysam_comments_rankings", ["orderby" => "com_date", "order" => "desc"]);

	// $articles = selecttable("seysam_articles");

	// $users = selecttable("seysam_users");


	// Appel de la vue correspondante | if sert à afficher le n° de page
	define("PAGE_TITLE","Derniers commentaires");
	include_once('app/view/prod/comments/comments.php');




