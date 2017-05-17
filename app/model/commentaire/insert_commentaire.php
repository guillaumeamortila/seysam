<?php

if(!defined("_BASE_URL")) die("Ressource interdite!");

function insert_commentaire($commentaire, $user_id){
    global $pdo;
    try {

        $req="INSERT into blog_comments
          (comment_post_ID, comment_author, comment_content)
        values
          (:comment_post_ID, :comment_author, :comment_content)";
        $query = $pdo->prepare($req);

        $query->bindValue(':comment_post_ID', $commentaire["post_ID"], PDO::PARAM_INT);
        $query->bindValue(':comment_author', $user_id, PDO::PARAM_INT);
        $query->bindValue(':comment_content', $commentaire["contenu"], PDO::PARAM_STR);

        // on execute la requête
        $query->execute();

        return true;

    }

    catch (Exception $e){
        return false;
    }
}