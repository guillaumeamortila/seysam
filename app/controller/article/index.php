<?php

if (!defined("_BASE_URL")) die ("Ressource interdite !");

// if (!isset($_GET["page"])) {
//     $page = 1;
// } else {
//     $page = $_GET["page"];
// }

// $offset = ($page - 1) * PAGINATION_ARTICLES;

// include_once("app/model/article/lire_nb_articles.php");
// $nb_articles = counttable("seysam_articles");

include_once("app/model/article/lire_articles.php");
$articles = lire_articles();

include_once("app/model/categorie/lire_categories.php");
$sub_categories = lire_sub_categories();
$categories = lire_categories();

include_once("app/model/commentaire/lire_nb_commentaires_article.php");

// foreach ($articles as $cle => $article){
// 	$articles[$cle]["art_date"] = "Publié le : " . $article["art_date"];
// 	$articles[$cle]["art_name"] = htmlspecialchars($article["art_name"]);
// }

// Définir le titre de la page
define("PAGE_TITLE", "Seysam - Accueil");
include_once("app/view/article/index.php");