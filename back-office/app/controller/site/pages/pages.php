<?php
if(!defined(_BASE_URL)) die("Ressource interdite");
protection("user", "site", "users", "login", USER_LAMBDA);

// appel du modèle pour obtenir un article
$pages = selecttable("seysam_common_pages", array("orderby" => "page_title"));

// appel de la vue correspondante
define("PAGE_TITLE", "Pages statiques du blog");
include_once("app/view/site/pages/pages.php");