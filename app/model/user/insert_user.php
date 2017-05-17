<?php

if(!defined("_BASE_URL")) die("Ressource interdite!");

function insert_user($post, $token){

    global $pdo;

    try {

        $sql = "INSERT INTO seysam_users
          (user_mail, user_fname, user_lname, user_pass, user_verif)
        values
          (:user_mail, :user_fname, :user_lname, :user_pass, :user_verif)";
        $query = $pdo->prepare($sql);

        $query->bindValue(':user_mail', $post["email"], PDO::PARAM_STR);
        $query->bindValue(':user_fname', $post["prenom"], PDO::PARAM_STR);
        $query->bindValue(':user_lname', $post["nom"], PDO::PARAM_STR);
        $query->bindValue(':user_pass', $post["password"], PDO::PARAM_STR);
        $query->bindValue(':user_verif', $token, PDO::PARAM_STR);



        // On execute la requête
        $query->execute();

        // Return de l'id
        return $pdo->lastInsertId();

    }

    catch (Exception $e){
        return false;
    }
}