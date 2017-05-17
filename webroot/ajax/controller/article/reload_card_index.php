<?php

Define("_BASE_URL", true);

include_once("../../../../app/config/config.inc.php");
include_once("../../../../app/model/pdo.inc.php");

include_once("../../../../app/model/article/lire_articles.php");
$articles = lire_articles();

include_once("../../../../app/model/categorie/lire_categories.php");
$sub_categories = lire_sub_categories();
$categories = lire_categories();

include_once("../../../../app/model/commentaire/lire_nb_commentaires_article.php");

include_once("../../view/article/index_ajax.php");