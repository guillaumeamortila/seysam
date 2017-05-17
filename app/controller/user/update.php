<?php

if(!defined("_BASE_URL")) die("Ressource interdite!");

if (!isset($_POST["email"])) {

    include_once("app/model/user/update.php");
    $user = read_user($_SESSION["user"]["ID"]);

    // Definir le titre de la page
    define("PAGE_TITLE", "Modification informations personnelles");
    include_once("app/view/user/update.php");

} else {


    if($valid === 1) {

        $_POST["user_pass"] = md5($_POST["user_pass"] . SALT);

        include_once("app/model/user/update.php");
        $retour = update_user($_SESSION["user"]["ID"]);

        if(!$retour) {

            location("user", "update", "notif=nok");

        } else {

            location("user", "update", "notif=ok");

        }

    } elseif ($valid === 0) {

        location("user", "update", "notifForm=nok");

    }

}

