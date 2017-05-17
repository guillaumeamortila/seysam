<?php

	define("_BASE_URL", "true");
	
	include_once("../../app/config/config.inc.php");
    include_once("../../app/model/pdo.inc.php");

    $offset = ($_GET["page"] - 1) * PAGINATION_ARTICLES;

    include_once('../../app/model/site/articles/lire_articles.php');
    $articles = lire_articles($offset, PAGINATION_ARTICLES);

    include("../../app/view/site/articles/index_art.tpl.php");