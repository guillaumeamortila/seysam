<?php
if(!defined(_BASE_URL)) die("Ressource interdite");
protection("user", "site", "users", "login", USER_LAMBDA);


if(isset($_GET["id"]))
{
	// coremodel
	deletetable("seysam_sub_categories", array("idcolumn" => "scat_ID", "idvalue" => $_GET['id']));
	
	location("site","categories","categories","notif=ok");

} else {
	location("site", "categories", "categories", "notif=nok");
}