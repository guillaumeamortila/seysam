<?php
if(!defined(_BASE_URL)) die("Ressource interdite");
protection("user", "site", "users", "login", USER_LAMBDA);

if(!isset($_POST["post_title"])){
	// Appel du modele pour obtenir les catégories
	// include_once('app/model/categories/lire_categories.php'); -> DANS COREMODEL

	define("PAGE_TITLE","Nouvel article");
	include("app/view/site/articles/new.php");

} else {
	// test
	/*$tab = array('post_category' => '2',
			'post_content' => 'Test du contenu',
			'post_title' => 'Test du titre');
	*/

	//appel du modele pr inserer article
	include_once('app/model/site/articles/insert_post.php');
	$retour = insert_article($_POST, $_SESSION["user"]["admin_ID"]);

	if(!$retour)
		location("site","articles","new","notif=nok");
	else
		location("site","articles","detail","id=".$retour."&notif=ok");
}