<?php

if(!defined("_BASE_URL")) die("Ressource interdite!");

function lire_actualites(){
	global $pdo;

	try{

		$query = $pdo->prepare('SELECT blog_art_ID, blog_art_title, left(blog_art_content, 300) as contenu, blog_art_date, admin_fname, admin_lname
                                FROM seysam_admin_users, seysam_blog_articles
                                WHERE blog_art_author=admin_ID');

		$query->bindParam(':id', $id, PDO::PARAM_INT);

		$query->execute();

        // fetch req
        $actualites = $query->fetchAll();

        // sup cursor
        $query->closeCursor();

        return $actualites;
    }

    catch (Exception $e) {
        die("Connexion à MySQL impossible : " . $e->getMessage());
    }
}