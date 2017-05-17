<?php

if(!defined("_BASE_URL")) die("Ressource interdite!");

if (!isset($_POST["email"])) {

    location(DEFAULT_MODULE, DEFAULT_ACTION, "");

} else {

    $valid = verification_form($_POST);

    if($valid === 1) {

        $_POST["password"] = md5($_POST["password"] . SALT);
        $token = md5(uniqid(mt_rand()));

        include_once("app/model/user/insert_user.php");
        $retour = insert_user($_POST, $token);

        if(!$retour) {

            location("user", "confirm_inscription", "notif=nok");

        } else {

            include("lib/mail.php");

            $html = "<html><body>
                        <div>
                            <p>Bonjour <b>". $_POST["prenom"] . "</b> !</p>
                            <p>Merci de confirmer votre mail en cliquant <a href='http://localhost:8888/seysam/index.php?module=user&action=validate&token=".$token."'>ici</a> !</p>
                        </div>
                    </body></html>";

            $send_mail = send_mail(MAIL_EXP, NAME_EXP, MAIL_EXP, $_POST["email"], "", "Validation de votre mail", "", $html, "" );
            location("user", "confirm_inscription", "notif=ok");

        }

    } elseif ($valid === 0) {

        location("user", "confirm_inscription", "notif=nok");

    }

}