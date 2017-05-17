<?php

if (!defined("_BASE_URL")) die ("Ressource interdite !");

// include_once("app/model/user/lire_user.php");
// $user = lire_user($session_id);

// include_once("app/model/order/lire_orders.php");
// $orders_buyer = lire_orders_buyer($session_id);

// include_once("app/model/order/lire_nb_orders.php");
// $nb_orders_buyer = lire_nb_orders_buyer($session_id);
// $nb_orders_creator = lire_nb_orders_creator($session_id);

// Définir le titre de la page
define("PAGE_TITLE", "Seysam - Boutique");
include_once("app/view/user/crea_profil.php");