<?php
if(!defined(_BASE_URL)) die("Ressource interdite");
try
	{
		$dns = 'mysql:host=localhost;port=3306;dbname=seysam';
		$utilisateur = 'root';
		$motDePasse = 'root';
		$connexion = new PDO( $dns, $utilisateur, $motDePasse);
	}
	catch ( Exception $e )
	{
		die("La connexion a échoué : ".$e->getMessage());
	}