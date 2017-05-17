<?php

if(!defined("_BASE_URL")) die("Ressource interdite!");

function lire_commentaires_article($id) {

    global $pdo;

    try {
        // send req
        $query = $pdo->prepare('SELECT DISTINCT com_date, com_content, com_ranking, user_fname, user_lname
                                FROM seysam_comments_rankings, seysam_users, seysam_articles
                                WHERE com_user_ID=ID
                                AND com_art_ID =:id
                                ORDER BY com_date DESC');

        // init param
        $query->bindParam(':id', $id, PDO::PARAM_INT);

        // execute req
        $query->execute();

        // fetch req
        $comments_art = $query->fetchAll();

        // sup cursor
        $query->closeCursor();

        return $comments_art;
    }

    catch (Exception $e) {
        die("Connection à MySQL impossible : " . $e->getMessage());
    }
}