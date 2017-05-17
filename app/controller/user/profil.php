<?php

if (!defined("_BASE_URL")) die ("Ressource interdite !");


// include_once("app/model/article/lire_articles.php");
// $articles = lire_articles();


include_once("app/model/user/lire_user.php");
$user = lire_user($_GET["id"]);

// include_once("app/model/order/lire_orders.php");
// $orders_buyer = lire_orders_buyer($session_id);

// include_once("app/model/order/lire_nb_orders.php");
// $nb_orders_buyer = lire_nb_orders_buyer($session_id);
// $nb_orders_creator = lire_nb_orders_creator($session_id);

// include_once("app/model/order/lire_orders.php");
// $orders_creator = lire_orders_creator($_GET["id"]);
include_once("app/model/article/lire_articles_user.php");
$articles_user = lire_articles_user($_GET["id"]);

include_once("app/model/order/lire_nb_orders.php");
// $nb_orders_buyer = lire_nb_orders_buyer($_GET["id"]);
$nb_orders_creator = lire_nb_orders_creator($_GET["id"]);

include_once("app/model/commentaire/lire_nb_commentaires_article.php");

// include_once("app/model/user/lire_preferences.php");
// $user_likes = lire_likes($session_id);
// $user_follows = lire_follows($session_id);


// Définir le titre de la page
define("PAGE_TITLE", "Seysam - Profil créateur");
include_once("app/view/user/profil.php");