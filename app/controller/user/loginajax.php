<?php

if(!defined("_BASE_URL")) die("Ressource interdite!");

if(isset($_SESSION["user"]))
    location(DEFAULT_MODULE, DEFAULT_ACTION, "");


if(isset($_POST["email"])) {
     if(isset($_POST["password"])) {

        $_POST["password"] = md5($_POST["password"] . SALT);

        include_once("app/model/user/verif_login.php");
        $return = verif_login($_POST);

        if(!$return) {
            // location(DEFAULT_MODULE, DEFAULT_ACTION, "");
            // exit;
            echo 0;
        } else {

            $_SESSION["user"] = $return;

            // if($return["ID"] == 1) {

            //     $_SESSION["level"] = USER_ADMIN;

            // } else {

            //     $_SESSION["level"] = USER_LAMBDA;

            // }
            // location(DEFAULT_MODULE, DEFAULT_ACTION, "");
            // exit;
            echo $_SESSION["user"]["user_fname"];
        }

        // include_once("app/view/layout/nav.php");

    }
}