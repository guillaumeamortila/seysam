<?php 

if(!defined("_BASE_URL")) die("Ressource interdite!");

include_once("app/model/actualite/lire_actualite.php");
$actualite = lire_actualite($_GET["id"]);

// include_once("app/model/commentaire/lire_nb_commentaires.php");
// $nb_comments = lire_nb_commentaires($_GET["id"]);

// include_once("app/model/commentaire/lire_commentaires_article.php");
// $comments_art = lire_commentaires_article($_GET["id"], 0, PAGINATION_COMMENTS);

// Definir le titre de la page
define("PAGE_TITLE", "Actualité détaillée");
include_once("app/view/actualite/detail.php");