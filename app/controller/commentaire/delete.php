<?php

if(!defined("_BASE_URL")) die("Ressource interdite!");

$retour = deletetable("seysam_comments_rankings", array(   "idcolumn" => "com_ID",
                                                "idvalue" => $_GET["id"]));

if ($retour){

    location($_GET["module"], "admin", "page=" . $_GET["page"] . "&notif=ok");

} else {

    location($_GET["module"], "admin", "page=" . $_GET["page"] . "&notif=nok");

}