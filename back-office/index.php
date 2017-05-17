<?php

define("_BASE_URL","true");

session_start();

include_once("app/model/pdo.inc.php");
include_once("core/coreview.php");
include_once("app/config/config.inc.php");
include_once("core/corecontroller.php");
include_once("core/coremodel.php");


if(!isset($_GET["pt"])){
	$pt = DEFAULT_PT;
} else {
	$pt = $_GET['pt'];
}

if(!isset($_GET["module"])){
	$module = DEFAULT_MODULE;
} else {
	$module = $_GET['module'];
}


if(!isset($_GET["action"])){
	$action = DEFAULT_ACTION;
} else {
	$action = $_GET['action'];
}


$url = "app/controller/".$pt."/".$module."/".$action.".php";

if(file_exists($url))
	include_once($url);
else
	include_once('app/view/error.php');


