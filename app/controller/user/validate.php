<?php

if(isset($_GET["token"])) {

    include ("app/model/user/update.php");
    $retour = update_user_token($_GET["token"]);

    if($retour) {

        location("user", "login", "notif=validate_ok");

    } else {

        define("PAGE_TITLE", "Validation du compte");
        include("app/view/user/novalidate.php");

    }

} else {

    location(DEFAULT_MODULE, DEFAULT_ACTION, "notif=validate_nok");
}