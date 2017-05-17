<?php

if(!defined("_BASE_URL")) die("Ressource interdite!");

function lire_articles_user($id) {

    global $pdo;

    try {
        // send req
        $query = $pdo->prepare('SELECT art_ID, art_name, user_fname, user_lname, ID, art_desc, art_price, img_url, img_art_ID, cat_name
                                FROM seysam_articles, seysam_users, seysam_art_images, seysam_categories, seysam_sub_categories
                                WHERE art_user_ID=:id
                                AND ID=:id
                                AND img_art_ID=art_ID
                                AND img_order=1
                                AND art_scat_ID=scat_ID
                                AND scat_cat_ID=cat_ID
                                ORDER BY art_date DESC');

        $query->bindParam(':id', $id, PDO::PARAM_INT);

        // execute req
        $query->execute();

        // fetch req
        $articles_user = $query->fetchAll();

        // sup cursor
        $query->closeCursor();

        return $articles_user;
    }

    catch (Exception $e) {

        error($e, "Connexion à MySQL impossible");

    }
}
