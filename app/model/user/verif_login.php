<?php

if(!defined("_BASE_URL")) die("Ressource interdite!");

function verif_login($form){

    global $pdo;

    try {

        $sql = "SELECT * FROM seysam_users WHERE user_mail=:mail AND user_pass=:mdp";

        $query = $pdo->prepare($sql);

        $query->bindParam(':mail', $form["email"], PDO::PARAM_STR);
        $query->bindParam(':mdp', $form["password"], PDO::PARAM_STR);

        // On execute la requête
        $query->execute();

        // On récupère tous les résultats
        $users = $query->fetchAll(PDO::FETCH_ASSOC);

        // Supprimer le curseur
        $query->closeCursor();

        // On recupere un user ou bien false
        if ((empty($users)) || (sizeof($users) > 1 ))
            return false;
        else
            return $users[0];

    }

    catch (Exception $e){
        die("Connection à MySQL impossible : " . $e->getMessage());
    }
}