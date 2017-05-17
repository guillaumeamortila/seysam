<?php 
define("_BASE_URL", "true");
include_once("../../app/config/config.inc.php");
include_once("../../app/model/pdo.inc.php");


try{
	$query = $connexion->prepare(
		'SELECT blog_art_ID, blog_art_title, blog_art_date, left(blog_art_content, 300) as contenu
			FROM seysam_blog_articles
			WHERE blog_art_content LIKE :clause
			OR blog_art_title LIKE :clause');

	$saisie = '%' . trim($_POST["saisie"]) . '%';

	$query->bindParam(":clause", $saisie, PDO::PARAM_STR);
	$query->execute();
	$posts = $query->fetchAll(); 
	$query->closeCursor();

	if (sizeof($posts) == 0)
		echo "Pas de résultat à votre requète :(";

	foreach($posts as $post){
	?>
		<ul class="index_art">
			<li class="ind_title">
				<h3><a href="?pt=site&module=articles&action=detail&id=<?=$post['blog_art_ID']?>"><?= utf8_encode($post['blog_art_title']); ?></a></h3>
			</li>
			<li class="ind_date">
				Écrit le <?php echo $post['blog_art_date']; ?>
			</li>
			<li class="ind_content">
				<?php echo utf8_encode($post['contenu']); ?>
			</li>
		</ul>
	<?php
	}
}
catch (Exception $e){
	return false; 
}