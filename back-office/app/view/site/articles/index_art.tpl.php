<?php

	foreach($articles as $article)
	{
	?>
		<ul class="index_art">
			<li class="ind_title">
				<h3><a href="?pt=site&module=articles&action=detail&id=<?=$article['blog_art_ID']?>"><?= $article['blog_art_title']; ?></a></h3>
			</li>
			<li class="ind_date">
				Écrit le <?php echo $article['blog_art_date']; ?>
			</li>
			<li class="ind_content">
				<?php echo nl2br($article['contenu']); ?>
			</li>
		</ul>
	<?php
	}