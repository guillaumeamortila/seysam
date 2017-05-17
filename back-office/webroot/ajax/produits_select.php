<?php

	define("_BASE_URL", "true");
	
	include_once("../../app/config/config.inc.php");
    include_once("../../app/model/pdo.inc.php");

	include_once('../../app/model/prod/produits/produits.php');
	$articles = disp_articles(0, PAGINATION_PRODUITS, $_POST['orderby'], $_POST['orderway']);

    include("../../app/view/prod/produits/produits.tpl.php");
