<?php
if(!defined(_BASE_URL)) die("Ressource interdite");

function insert_article($article, $user_id)
{

	global $connexion;

	try{

		$req = "INSERT INTO seysam_blog_articles
						(blog_art_author, blog_art_content, blog_art_title)
						VALUES
						(:user_id, :post_content, :post_title)";

		$query = $connexion->prepare($req);

		$query->bindValue(":user_id",$user_id,PDO::PARAM_INT);
		$query->bindValue(":post_content",$article["post_content"],PDO::PARAM_STR);
		$query->bindValue(":post_title",$article["post_title"],PDO::PARAM_STR);

		$query ->execute();

		return $connexion->lastInsertId();
	}
	catch (Exception $e){
		return false;
	}

}

