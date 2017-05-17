<?php
if(!defined(_BASE_URL)) die("Ressource interdite");
protection("user", "site", "users", "login", USER_LAMBDA);

include_once('app/model/prod/produits/produits.php');
$articles = disp_articles(0, PAGINATION_PRODUITS, "art_date", "DESC");

define("PAGE_TITLE","Derniers articles ajoutés par les créateurs");
include_once('app/view/prod/produits/produits.php');


