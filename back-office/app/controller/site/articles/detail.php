<?php
if(!defined(_BASE_URL)) die("Ressource interdite");
protection("user", "site", "users", "login", USER_LAMBDA);


// Test du parametre
if(isset($_GET['id'])){

	$id = $_GET["id"];
	//appel du modèle pour obtenir un article
	include_once("app/model/site/articles/lire_article.php");
	$article = lire_article($id);

	//appel de la vue correspondante
	define("PAGE_TITLE", $article["blog_art_title"]);
	include_once("app/view/site/articles/detail.php");

} else {
	include_once('app/view/error.php');
}
