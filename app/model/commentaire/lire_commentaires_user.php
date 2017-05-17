<?php

if(!defined("_BASE_URL")) die("Ressource interdite!");

function lire_commentaires_user($id) {

    global $pdo;

    try {
        // send req
        $query = $pdo->prepare('SELECT com_content, com_ranking, com_art_ID, order_ID
                                FROM seysam_comments_rankings, seysam_orders
                                WHERE com_art_ID=order_art_ID
                                AND com_user_ID =:id');

        // init param
        $query->bindParam(':id', $id, PDO::PARAM_INT);

        // execute req
        $query->execute();

        // fetch req
        $comments_user = $query->fetchAll();

        // sup cursor
        $query->closeCursor();

        return $comments_user;
    }

    catch (Exception $e) {
        die("Connection à MySQL impossible : " . $e->getMessage());
    }
}