<?php

if(!defined("_BASE_URL")) die("Ressource interdite!");

function lire_nb_commentaires_article($id) {

    global $pdo;

    try {
        // send req
        $query = $pdo->prepare('SELECT count(com_ID) as nb_commentaires FROM seysam_comments_rankings , seysam_users
                                  WHERE com_user_ID=ID
                                  AND com_art_ID =:id');

        // init param
        $query->bindParam(':id', $id, PDO::PARAM_INT);

        // execute req
        $query->execute();

        // fetch req
        $nb_comments_art = $query->fetch();

        // sup cursor
        $query->closeCursor();

        return $nb_comments_art["nb_commentaires"];
    }

    catch (Exception $e) {
        die("Connection à MySQL impossible : " . $e->getMessage());
    }
}