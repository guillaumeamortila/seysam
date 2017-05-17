<?php
if(!defined(_BASE_URL)) die("Ressource interdite");

	function verif_login($form)
	{
		global $connexion;

		try {

			// On envoie la requête
			$query = $connexion->prepare('SELECT *
											FROM seysam_admin_users
											where admin_login=:login
											and admin_pass=:pass');

			$query->bindParam(':login', $form["login"], PDO::PARAM_STR);
			$query->bindParam(':pass', $form["pass"], PDO::PARAM_STR);

			$query->execute();

			$user_account = $query->fetchAll();
			
			$query->closeCursor();
			
			// Analyse et vérif des résultats obtenus
			if ( (empty($user_account)) || (sizeof($user_account)>1) )
				return false;
			else
				return $user_account[0];
		}

		catch ( Exception $e ) {
			die("Erreur SQL : ".$e->getMessage());
		}
	}

