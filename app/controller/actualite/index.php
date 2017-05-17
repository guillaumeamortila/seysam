<?php

if(!defined("_BASE_URL")) die("Ressource interdite!");

include_once("app/model/actualite/lire_actualites.php");
$actualites = lire_actualites();

// Definir le titre de la page
define("PAGE_TITLE", "Actualités de Seysam");
include_once("app/view/actualite/index.php");