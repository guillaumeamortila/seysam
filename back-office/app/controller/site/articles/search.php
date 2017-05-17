<?php
if(!defined("_BASE_URL")) die("Ressource interdite!");

$users = selecttable("blog_users", $options=array());

define("PAGE_TITLE", "Recherche articles");
include("app/view/article/search.php");
?>