<?php
if(!defined(_BASE_URL)) die("Ressource interdite");
protection("user", "site", "users", "login", USER_LAMBDA);
	
include_once('app/model/prod/orders/orders.php');

$orders = disp_orders();
$order_crea = disp_order_crea();
define("PAGE_TITLE","Tous les utilisateurs");
include_once('app/view/prod/orders/orders.php');

