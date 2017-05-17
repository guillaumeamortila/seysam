<?php

if(!defined("_BASE_URL")) die("Ressource interdite!");

function lire_categories() {

    global $pdo;

    try {
        // send req
        $query = $pdo->prepare('SELECT cat_name, cat_desc, cat_ID
                                FROM seysam_categories
                                ');

        // execute req
        $query->execute();

        // fetch req
        $categories = $query->fetchAll();

        // sup cursor
        $query->closeCursor();

        return $categories;
    }

    catch (Exception $e) {

        error($e, "Connexion à MySQL impossible");

    }
}


function lire_sub_categories() {

    global $pdo;

    try {
        // send req
        $query = $pdo->prepare('SELECT scat_cat_ID
                                FROM seysam_sub_categories, seysam_articles, seysam_users
                                WHERE  art_scat_ID=scat_ID
                                AND art_user_ID=ID
                                AND user_creator=1
                                ');

        // execute req
        $query->execute();

        // fetch req
        $sub_categories = $query->fetchAll();

        // sup cursor
        $query->closeCursor();

        return $sub_categories;
    }

    catch (Exception $e) {

        error($e, "Connexion à MySQL impossible");

    }
}
