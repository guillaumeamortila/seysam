<?php

// if(!defined("_BASE_URL")) die("Ressource interdite!");

// function lire_nb_articles() {

//     global $pdo;

//     try {
//         // send req
//         $query = $pdo->prepare('SELECT count(art_ID) as nb_articles FROM seysam_articles');

//         // execute req
//         $query->execute();

//         // fetch req
//         $nb_articles = $query->fetch();

//         // sup cursor
//         $query->closeCursor();

//         return $nb_articles["nb_articles"];
//     }

//     catch (Exception $e) {

//         error($e, "Connexion à MySQL impossible");

//     }
// }