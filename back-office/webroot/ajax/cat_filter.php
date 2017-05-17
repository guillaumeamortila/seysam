<?php 
	
	Define("_BASE_URL", true);
	
	include_once("../../app/config/config.inc.php");
    include_once("../..app/model/pdo.inc.php");

    try {
        // send req
        $query = $pdo->prepare('SELECT distinct(cat_id), cat_descr
        						FROM blog_categories, blog_users, blog_posts
        						WHERE post_category=cat_id
        						AND post_author=ID
        						AND ID=:user_id');

        // init param
        $query->bindParam(':user_id', $_GET["user_id"], PDO::PARAM_INT);

        // execute req
        $query->execute();

        // fetch req
        $categories = $query->fetchAll();

        // sup cursor
        $query->closeCursor();

        // vue
        foreach($categories as $categorie){
        	echo "<option value='" .$categorie["cat_id"] ."'";
        	echo">";
        	echo $categorie["cat_descr"];
        	echo "</option>";
        }
    }

    catch (Exception $e) {

        error($e, "Connexion à MySQL impossible");

    }
}

?>
