<?php

if (!defined("_BASE_URL")) die ("Ressource interdite !");

protection(DEFAULT_MODULE, DEFAULT_ACTION, "user");

// include_once("app/model/article/lire_articles.php");
// $articles = lire_articles();

$session_id = $_SESSION["user"]["ID"];

include_once("app/model/user/lire_user.php");
$user = lire_user($session_id);

include_once("app/model/order/lire_orders.php");
$orders_buyer = lire_orders_buyer($session_id);

include_once("app/model/order/lire_nb_orders.php");
$nb_orders_buyer = lire_nb_orders_buyer($session_id);
$nb_orders_creator = lire_nb_orders_creator($session_id);

include_once("app/model/user/lire_preferences.php");
$user_likes = lire_likes($session_id);
$user_follows = lire_follows($session_id);

// Définir le titre de la page
define("PAGE_TITLE", "Seysam - Compte");
include_once("app/view/user/detail.php");