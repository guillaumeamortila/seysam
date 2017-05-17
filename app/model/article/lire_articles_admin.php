<?php

if(!defined("_BASE_URL")) die("Ressource interdite!");

function lire_articles_admin() {

    global $pdo;

    try {

        $sql = 'SELECT art_ID, art_name, art_crea_ID, art_scat_ID, art_date, art_desc
                                  FROM seysam_articles
                                  ORDER BY art_date DESC';

        // send req
        $query = $pdo->prepare($sql);

        // execute req
        $query->execute();

        // fetch req
        $articlesAdmin = $query->fetchAll();

        // send req
        $query = $pdo->prepare('SELECT count(art_ID) as nb_articles FROM seysam_articles');

        // execute req
        $query->execute();

        // fetch req
        $nb_articles = $query->fetch();

        $nb_articles = $nb_articles["nb_articles"];

        for ($i = 0; $i < $nb_articles; $i++) {

            // Recherche de l'auteur du post

            $sql = 'SELECT user_fname FROM seysam_users WHERE ID=:idUser';

            $query = $pdo->prepare($sql);

            $query->bindParam(':idUser', $articlesAdmin[$i]["art_crea_ID"], PDO::PARAM_INT);

            $query->execute();

            $nameUsers = $query->fetch();

            $articlesAdmin[$i]["art_crea_ID"] = $nameUsers["user_fname"];

            // Recherche de la catégorie du post

            $sql = 'SELECT cat_name FROM seysam_categories WHERE cat_ID=:idCat';

            $query = $pdo->prepare($sql);

            $query->bindParam(':idCat', $articlesAdmin[$i]["art_scat_ID"], PDO::PARAM_INT);

            $query->execute();

            $nameCategori = $query->fetch();

            $articlesAdmin[$i]["art_scat_ID"] = $nameCategori["cat_name"];

            // Recherche des commentaires

            $query = $pdo->prepare('SELECT * FROM seysam_comments_rankings , seysam_users
                                      WHERE com_user_ID=ID
                                      AND com_art_ID =:id');

            $query->bindParam(':id', $articlesAdmin[$i]["art_ID"], PDO::PARAM_INT);

            $query->execute();

            $comments = $query->fetchAll();

            array_push($articlesAdmin[$i], $comments);

        }

        // sup cursor
        $query->closeCursor();

        return $articlesAdmin;

    }

    catch (Exception $e) {

        error($e, "Connexion à MySQL impossible");

    }
}