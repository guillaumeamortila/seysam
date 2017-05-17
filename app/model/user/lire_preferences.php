<?php

if(!defined("_BASE_URL")) die("Ressource interdite!");

function lire_likes($id){
	global $pdo;

	try{

        $query = $pdo->prepare('SELECT *
                                FROM seysam_likes, seysam_users
                                WHERE like_user_ID=:id');

        $query->bindParam(':id', $id, PDO::PARAM_INT);

        $query->execute();

        // fetch req
        $user_likes = $query->fetchAll();

        // sup cursor
        $query->closeCursor();

        return $user_likes;
    }

    catch (Exception $e) {
        die("Connexion à MySQL impossible : " . $e->getMessage());
    }
}

function lire_follows($id){
    global $pdo;

    try{

        $query = $pdo->prepare('SELECT *
                                FROM seysam_follow
                                WHERE follower_ID=:id');

        $query->bindParam(':id', $id, PDO::PARAM_INT);

        $query->execute();

        // fetch req
        $user_follows = $query->fetchAll();

        // sup cursor
        $query->closeCursor();

        return $user_follows;
    }

    catch (Exception $e) {
        die("Connexion à MySQL impossible : " . $e->getMessage());
    }
}
