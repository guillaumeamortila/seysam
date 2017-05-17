<?php
if(!defined(_BASE_URL)) die("Ressource interdite");
protection("user", "site", "users", "login", USER_LAMBDA);


if(isset($_GET["id"]))
{
	// delete en cascade => articles, comments, likes, art_images, addresses
	deletetable("seysam_users", array("idcolumn" => "ID", "idvalue" => $_GET['id']));


	location("prod","comptes","comptes","notif=ok");

} else {
	location("prod", "comptes", "comptes", "notif=nok");
}