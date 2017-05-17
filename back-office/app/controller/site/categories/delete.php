<?php
if(!defined(_BASE_URL)) die("Ressource interdite");
protection("user", "site", "users", "login", USER_LAMBDA);


if(isset($_GET["id"]))
{
	// cascade => delete sub cat
	deletetable("seysam_categories", array("idcolumn" => "cat_ID", "idvalue" => $_GET['id']));
	
	location("site","categories","categories","notif=ok");

} else {
	location("site", "categories", "categories", "notif=nok");
}