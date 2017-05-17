<?php

Define("_BASE_URL", true);

include_once("../../../../lib/session.php");
if(!secu_session_start()) {

    die("Tentative de corruption de la session");

}
// include_once("../../../../core/corecontroller.php.php");
include_once("../../../../app/config/config.inc.php");
include_once("../../../../app/model/pdo.inc.php");

$user1 = $_SESSION["user"];
// var_dump($user);


include_once("../../../../app/model/user/update.php");
$user = read_user($_SESSION["user"]["ID"]);
// var_dump($user);
$user_address = read_user_address($_SESSION["user"]["ID"]);
if(!empty($user_address))
var_dump($user_address);
    // var_dump($user1);

    // $user = $_SESSION["user"];
    // var_dump($user);

    // Definir le titre de la page
    // define("PAGE_TITLE", "Modification informations personnelles");

if (isset($_GET["user_fname"])){

    $valid = verification_form($_POST);

    if($valid === 1) {

        $_POST["user_pass"] = md5($_POST["user_pass"] . SALT);

        include_once("../../../../app/model/user/update.php");
        $retour = update_user($_SESSION["user"]["ID"]);

        if(!$retour) {

            location("user", "detail", "notif=nok");

        } else {

            location("user", "detail", "notif=ok");

        }

    } elseif ($valid === 0) {

        location("user", "detail", "notifForm=nok");

    }


}

include_once("../../view/user/update.php");
