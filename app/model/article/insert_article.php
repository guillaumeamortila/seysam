<?php

if(!defined("_BASE_URL")) die("Ressource interdite!");

function insert_article($article, $user_id){
	global $pdo;

	try {
		$sql = "INSERT INTO blog_posts
			(post_author, post_category, post_content, post_title)
		values 
			(:post_author, :post_category, :post_content, :post_title)";

		$query = $pdo->prepare($sql);

		$query->bindValue(':post_author', $user_id, PDO::PARAM_INT);
        $query->bindValue(':post_category', $article["post_category"], PDO::PARAM_INT);
        $query->bindValue(':post_content', $article["post_content"], PDO::PARAM_STR);
        $query->bindValue(':post_title', $article["post_title"], PDO::PARAM_STR);

        // On execute la requête

        $query->execute();

        // Return de l'id
        return $pdo->lastInsertId();

	}

	catch (Exception $e){
       return false;
    }	
}