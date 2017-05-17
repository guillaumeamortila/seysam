<?php
if(!defined(_BASE_URL)) die("Ressource interdite");
protection("user", "site", "users", "login", USER_LAMBDA);


	// Appel du modèle pour obtenir les derniers articles
	//$nb_articles = counttable("blog_posts");
	//$nb_pages = ceil($nb_articles/PAGINATION_ARTICLES);


	// Appel du modèle pour obtenir les 4 derniers articles
	include_once('app/model/site/articles/lire_articles.php');
	$articles = lire_articles(0,PAGINATION_ARTICLES);

	//$articles = selecttable("blog_posts",array("limit" = $page + 3, "offset" = $page));

	foreach ($articles as $cle => $article) {
		$articles[$cle]['blog_art_date'] = $article['blog_art_date'];
		$articles[$cle]['blog_art_title'] = $article['blog_art_title'];
	}


	// Appel de la vue correspondante | if sert à afficher le n° de page
	define("PAGE_TITLE","Liste des articles");
	include_once('app/view/site/articles/index.php');




