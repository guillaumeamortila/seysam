<?php

if(!defined("_BASE_URL")) die("Ressource interdite!");

function lire_users($offset, $limite) {

    global $pdo;

    try {
        // send req
        $query = $pdo->prepare('SELECT *  FROM seysam_users ORDER BY ID DESC LIMIT :offset, :limite');

        // init param
        $query->bindParam(':offset', $offset, PDO::PARAM_INT);
        $query->bindParam(':limite', $limite, PDO::PARAM_INT);

        // execute req
        $query->execute();

        // fetch req
        $users = $query->fetchAll();

        // sup cursor
        $query->closeCursor();

        return $users;
    }

    catch (Exception $e) {
        die("Connection à MySQL impossible : " . $e->getMessage());
    }
}