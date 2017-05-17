<?php

	define("_BASE_URL", "true");
	
	include_once("../../app/config/config.inc.php");
    include_once("../../app/model/pdo.inc.php");

    $offset = ($_GET["page"] - 1) * PAGINATION_PRODUITS;

    include_once('../../app/model/prod/produits/produits.php');
    $articles = disp_articles($offset, PAGINATION_PRODUITS, $_POST["orderby"], $_POST["orderway"]);

    include("../../app/view/prod/produits/produits.tpl.php");