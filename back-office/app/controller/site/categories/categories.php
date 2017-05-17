<?php
if(!defined(_BASE_URL)) die("Ressource interdite");
protection("user", "site", "users", "login", USER_LAMBDA);

// appel du modèle pour obtenir un article
// include_once("app/model/categories/lire_categories.php"); -> DANS COREMODEL
$categories = selecttable("seysam_categories", array("orderby" => "cat_name"));

$scats = selecttable("seysam_sub_categories", array("orderby" => "scat_name"));

// appel de la vue correspondante
define("PAGE_TITLE", "Liste des catégories");
include_once("app/view/site/categories/categories.php");