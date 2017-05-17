<?php 
	
	Define("_BASE_URL", true);
	
	include_once("../../app/config/config.inc.php");
    include_once("../..app/model/pdo.inc.php");

    try {
        // send req
        $query = $pdo->prepare('SELECT *
        						FROM blog_categories, blog_users, blog_posts
        						WHERE post_category=cat_id
        						AND post_author=ID
        						AND ID=:user_id
                                AND cat_id=:cat_id');

        // init param
        $query->bindParam(':user_id', $_GET["user_id"], PDO::PARAM_INT);
        $query->bindParam(':cat_id', $_GET["cat_id"], PDO::PARAM_INT);

        // execute req
        $query->execute();

        // fetch req
        $posts = $query->fetchAll();

        // sup cursor
        $query->closeCursor();

        // vue
        foreach($posts as $post){
        	var_dump($post);
        }
    }

    catch (Exception $e) {

        error($e, "Connexion à MySQL impossible");

    }
}

?>
