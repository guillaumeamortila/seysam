<?php

if(!defined("_BASE_URL")) die("Ressource interdite!");

function lire_user($id){
	global $pdo;

	try{

		$query = $pdo->prepare('SELECT *
                                FROM seysam_users
                                WHERE ID=:id');

		$query->bindParam(':id', $id, PDO::PARAM_INT);

		$query->execute();

        // fetch req
        $user = $query->fetchAll();

        // sup cursor
        $query->closeCursor();

        return $user["0"];
    }

    catch (Exception $e) {
        die("Connexion à MySQL impossible : " . $e->getMessage());
    }
}
