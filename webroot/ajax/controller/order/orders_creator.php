<?php

// if (!defined("_BASE_URL")) die ("Ressource interdite !");
Define("_BASE_URL", true);

include_once("../../../../lib/session.php");
if(!secu_session_start()) {

    die("Tentative de corruption de la session");

}

include_once("../../../../app/config/config.inc.php");
include_once("../../../../app/model/pdo.inc.php");

// protection(DEFAULT_MODULE, DEFAULT_ACTION, "user");

// include_once("app/model/article/lire_articles.php");
// $articles = lire_articles();

$session_id = $_SESSION["user"]["ID"];

include_once("../../../../app/model/user/lire_user.php");
$user = lire_user($session_id);

include_once("../../../../app/model/order/lire_orders.php");
$orders_buyer = lire_orders_buyer($session_id);

include_once("../../../../app/model/order/lire_nb_orders.php");
$nb_orders_buyer = lire_nb_orders_buyer($session_id);
$nb_orders_creator = lire_nb_orders_creator($session_id);

include_once("../../../../app/model/commentaire/lire_commentaires_user.php");
$comments_user = lire_commentaires_user($session_id);

// Définir le titre de la page
// define("PAGE_TITLE", "Seysam - Mes achats");
include_once("../../view/order/orders_creator.php");