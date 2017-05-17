<?php
if(!defined(_BASE_URL)) die("Ressource interdite");
protection("user", "site", "users", "login", USER_LAMBDA);

//appel du modèle pour obtenir les user
$users = selecttable("seysam_admin_users", array("orderby" => "admin_ID"));

//appel de la vue correspondante
define("PAGE_TITLE", "Liste des utilisateurs");
include_once("app/view/site/users/users.php");