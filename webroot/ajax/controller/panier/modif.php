<?php

Define("_BASE_URL", true);

include_once("../../../../lib/session.php");
if(!secu_session_start()) {
    die("Tentative de corruption de la session");
}

include_once("../../../../core/corecontroller.php");
include_once("../../../../app/config/config.inc.php");
include_once("../../../../app/model/pdo.inc.php");

if (isset($_POST['delete'])){

	supprimerArticle($_POST['delete']);

	echo MontantGlobal();

}
