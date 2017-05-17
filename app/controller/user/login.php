<?php

//if(!defined("_BASE_URL")) die("Ressource interdite!");

if (!isset($_POST["email"])) {

    define("PAGE_TITLE", "Connexion");
    include_once("app/view/user/login.php");

} else {

    // $_POST["password"] = md5($_POST["password"] . SALT);

    // Appel du modele pour chercher un user
    include_once("app/model/user/verif_login.php");

    $return = verif_login($_POST);

    if(!$return) {

        header("Location:?module=user&action=login&notif=nok");
        exit;

    } else {

        $_SESSION["user"] = $return;

        if($return["ID"] == 1) {

            $_SESSION["level"] = USER_ADMIN;
            header("Location:?module=article&action=admin");
            exit;

        } else {

            $_SESSION["level"] = USER_LAMBDA;
            header("Location:?");
            exit;

        }

        header("Location:?module=article&action=admin");
        exit;

    }

}