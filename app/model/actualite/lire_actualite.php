<?php

if(!defined("_BASE_URL")) die("Ressource interdite!");

function lire_actualite($id){
	global $pdo;

	try{

		$query = $pdo->prepare('SELECT blog_art_ID, blog_art_title, blog_art_content, blog_art_date, admin_fname, admin_lname
                                FROM seysam_admin_users, seysam_blog_articles
                                WHERE blog_art_author=admin_ID
								AND blog_art_ID=:id');

		$query->bindParam(':id', $id, PDO::PARAM_INT);

		$query->execute();

        // fetch req
        $actualite = $query->fetchAll();

        // sup cursor
        $query->closeCursor();

        return $actualite[0];
    }

    catch (Exception $e) {
        die("Connexion à MySQL impossible : " . $e->getMessage());
    }
}