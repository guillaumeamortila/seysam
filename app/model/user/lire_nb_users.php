<?php

if(!defined("_BASE_URL")) die("Ressource interdite!");

function lire_nb_users() {

    global $pdo;

    try {
        // send req
        $query = $pdo->prepare('SELECT count(ID) as nb_users FROM seysam_users');

        // execute req
        $query->execute();

        // fetch req
        $nb_users = $query->fetch();

        // sup cursor
        $query->closeCursor();

        return $nb_users["nb_users"];
    }

    catch (Exception $e) {
        die("Connection à MySQL impossible : " . $e->getMessage());
    }
}