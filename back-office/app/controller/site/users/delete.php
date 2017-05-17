<?php
if(!defined(_BASE_URL)) die("Ressource interdite");
protection("user", "site", "users", "login", USER_LAMBDA);


if( isset($_GET["id"]) && ($_SESSION["level"] == USER_ADMIN))
{
	// coremodel
	$delete = deletetable("seysam_admin_users", array("idcolumn" => "admin_ID", "idvalue" => $_GET['id']));
	
	location("site","users","users","notif=ok");

} else {
	location("site", "users", "users", "notif=nok");
}