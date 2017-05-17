<?php

define("_BASE_URL", true);

include_once("../../../../app/config/config.inc.php");
include_once("../../../../app/model/pdo.inc.php");

$offset = (($_GET["page"] - 1) * PAGINATION_COMMENTS);
echo $offset;

include_once('../../../../app/model/commentaire/lire_commentaires_article.php');
$comments = lire_commentaires_article($_GET["id"], $offset, PAGINATION_COMMENTS);

include("../../view/commentaire/commentaires_ajax.php");