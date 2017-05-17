<?php
if(!defined(_BASE_URL)) die("Ressource interdite");
protection("user", "site", "users", "login", USER_LAMBDA);


if(isset($_GET["id"]))
{
	// delete cascade => likes, coms, img
	deletetable("seysam_articles", array("idcolumn" => "art_ID", "idvalue" => $_GET['id']));
	
	location("site","produits","produits","notif=ok");

} else {
	location("site", "produits", "produits", "notif=nok");
}