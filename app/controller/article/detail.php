<?php 

if(!defined("_BASE_URL")) die("Ressource interdite!");

include_once("app/model/article/lire_article.php");
$article = lire_article($_GET["id"]);

// include_once("app/model/commentaire/lire_nb_commentaires.php");
// $nb_comments = lire_nb_commentaires($_GET["id"]);

include_once("app/model/commentaire/lire_commentaires_article.php");
$comments_art = lire_commentaires_article($_GET["id"]);

// Definir le titre de la page
define("PAGE_TITLE", "Detail d'un article");
include_once("app/view/article/detail.php");