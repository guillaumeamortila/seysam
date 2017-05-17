
<div class='card'>
  <a href='?module=article&action=detail&id=<?= $art['art_ID']; ?>'>
  <?= "<img src='webroot/img/produits/".$art['img_url']."' alt='".$art['art_name']."' title='".$art['art_name']."' >";
  ?>
  </a>
  <div class="row stats">
    <div><img class="icon" src="webroot/img/icons/star.svg" alt="Number of stars"></div>
    <div class="grey-13">4 /5</div>
    <div><img class="icon" src="webroot/img/icons/likes.svg" alt="Number of stars"></div>
    <div class="grey-13">5</div>
    <div><img class="icon" src="webroot/img/icons/comments.svg" alt="Number of stars"></div>
    <div class="grey-13">
    <?php
      $nb_comments_art = lire_nb_commentaires_article($art['art_ID']);
      echo $nb_comments_art;
    ?>
    </div>
  </div>
  <div>
    <h3><?= $art['art_name'];?></h3>
    <div class="createur">Création par <a href="?module=user&action=profil&id=<?=$art['ID'];?>"><?php echo $art['user_fname']." ".$art['user_lname'];?></a></div>
    <div class="description"><?php echo $art['art_desc'];?></div>
  </div>
  <div class="cta">
    <div class="price btn"><?php echo $art['art_price'];?> €</div>
    <div class="add btn" onclick="toCard(<?= $art['art_ID'] ?>, <?= $art['art_price'] ?>);"></div>
  </div>
</div>