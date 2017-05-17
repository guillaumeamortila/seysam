<?php

if(!defined("_BASE_URL")) die("Ressource interdite!");

if (isset($_POST["art_ID"])){

    //Appel du modèle pour insérer le commentaire

    include_once('app/model/commentaire/insert_commentaire.php');
    $articles =  insert_commentaire($_POST, $_SESSION["user"]["ID"]);

    if ($articles) {

        header("location:?module=article&action=detail&id=".$_POST["art_ID"]."&notif=ok");

    } else {

        header("location:?module=article&action=detail&id=".$_POST["art_ID"]."&notif=nok");

    }
}

else {
    die("post absent !");
}