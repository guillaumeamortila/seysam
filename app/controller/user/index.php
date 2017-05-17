<?php

if(!defined("_BASE_URL")) die("Ressource interdite!");

if (!isset($_GET["page"])) {
    $page = 1;
} else {
    $page = $_GET["page"];
}

$nb_users_per_page = 10;

$offset = ($page - 1) * PAGINATION_USERS;

include_once("app/model/user/lire_nb_users.php");
$nb_users = counttable("seysam_users");

include_once("app/model/user/lire_users.php");
$users = lire_users($offset,$nb_users_per_page);

// Definir le titre de la page
define("PAGE_TITLE", "Liste des utilisateurs du blog");
include_once("app/view/user/index.php");