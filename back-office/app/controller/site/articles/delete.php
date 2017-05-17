<?php
if(!defined(_BASE_URL)) die("Ressource interdite");
protection("user", "site", "users", "login", USER_LAMBDA);


if(isset($_GET["id"]))
{
	// coremodel
	deletetable("seysam_blog_articles", array("idcolumn" => "blog_art_ID", "idvalue" => $_GET['id']));
	
	location("site","articles","index","notif=ok");

} else {
	location("site", "articles", "index", "notif=nok");
}