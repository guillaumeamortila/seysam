<?php

if (!defined("_BASE_URL")) die ("Ressource interdite !");

include_once("app/model/panier/index.php");

$panier = $_SESSION['panier'];

$panier_arts = array();
for($i = 0; $i < count($_SESSION['panier']['id']); $i++)
{
	array_push( $panier_arts, panier_articles($_SESSION['panier']['id'][$i]));
}

$total = MontantGlobal();


// Définir le titre de la page
define("PAGE_TITLE", "Seysam - Panier");
include_once("app/view/panier/index.php");