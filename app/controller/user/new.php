<?php

if(!defined("_BASE_URL")) die("Ressource interdite!");

protection("user", "login", "user", USER_ADMIN);

if (!isset($_POST["email"])) {

    define("PAGE_TITLE", "Nouvel utilisateur");
    include_once("app/view/user/new.php");

} else {

    $valid = verification_form($_POST);

    if($valid === 1) {

        $token = "1";
        $_POST["user_pass"] = md5($_POST["user_pass"] . SALT);

        include_once("app/model/user/insert_user.php");
        $retour = insert_user($_POST, $token);

        if(!$retour) {

            location("user", "index", "notif=nok");

        } else {

            location("user", "index", "notif=ok");

        }

    } elseif ($valid === 0) {

        location("user", "new", "notifForm=nok");

    }

}