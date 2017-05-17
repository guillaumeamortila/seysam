<?php 
if(!defined(_BASE_URL)) die("Ressource interdite");
	function lire_articles($offset, $limite)
	{
			global $connexion;
			try {
			// On envoie la requête
			$query = $connexion->prepare('SELECT blog_art_ID, blog_art_title, blog_art_date,
											left(blog_art_content, 300) as contenu
										FROM seysam_blog_articles
										ORDER by blog_art_date DESC
										LIMIT :offset, :limite');

			// On initialise les paramètres
			$query->bindParam('offset', $offset, PDO::PARAM_INT);
			$query->bindParam('limite', $limite, PDO::PARAM_INT);
			// On exécute la requête
			$query->execute();
			// On récupère tous les résultats
			$articles = $query->fetchAll();
			$query->closeCursor();
			// On retourne tous les articles sélectionnés
			return $articles;
			}
		
		catch ( Exception $e ) {
			die("Connection impossible à MySQL : ".$e->getMessage());
		}
	}

