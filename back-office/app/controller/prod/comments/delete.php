<?php
if(!defined(_BASE_URL)) die("Ressource interdite");
protection("user", "site", "users", "login", USER_LAMBDA);


if(isset($_GET["id"]))
{
	// coremodel
	deletetable("seysam_comments_rankings", array("idcolumn" => "com_ID", "idvalue" => $_GET['id']));
	
	location("prod","comments","comments","notif=ok");

} else {
	location("prod", "comments", "comments", "notif=nok");
}