<?php
if(!defined(_BASE_URL)) die("Ressource interdite");

	function lire_article($id)
	{
		global $connexion;

		try {

			// On envoie la requête
			$query = $connexion->prepare('SELECT blog_art_ID, blog_art_title, blog_art_date,
											blog_art_content, admin_ID, admin_fname, admin_lname
											FROM seysam_blog_articles, seysam_admin_users
											where blog_art_author=admin_ID
											and blog_art_ID=:id
											LIMIT 1');

			// On initialise les paramètres
			$query->bindParam(':id', $id, PDO::PARAM_INT);
			// On exécute la requête
			$query->execute();
			// On récupère tous les résultats
			$articles = $query->fetchAll();
			// Supprime le curseur
			$query->closeCursor();
			// On sélectionne le premier article
			$article = $articles[0];

			return $article;
		}

		catch ( Exception $e ) {
			die("Erreur SQL : ".$e->getMessage());
		}
	}


