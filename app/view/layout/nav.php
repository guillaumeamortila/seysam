<div class="nav">
      <div class="logo"><a href="?module=article&action=index"><img src="webroot/img/seysam-row.png"></a></div>


      <div class="menu">
        <div class="nav-link">
            <a href="?module=actualite&action=index">Actualités</a>
        </div>
        <div class="nav-link">
            <a href="#">Idées cadeaux</a>
        </div>
        <?php if (!isset($_SESSION["user"])) { ?>
          <div class="show connexion-btn nav-link" id="a_connexion">
              <a href="">Connexion</a>
          </div>
          <div class="show inscription-btn nav-link" id="a_inscription">
              <a href="">Inscription</a>
          </div>
        <?php }
        if (isset($_SESSION["user"])) {?>
          <div class="nav-link">
              <a href="?module=user&action=detail">Espace perso</a>
          </div>
        <?php } ?>
        <div class="appear">
            <input class="searchbar" type="text" name="search" placeholder="Tapez votre recherche">
        </div>
        <div class="nav-link loupe">
            <a href="#"><div class="search"></div></a>
        </div>
        <div class="nav-link">
            <a href="?module=panier&action=index"><div class="cart"></div></a>
        </div>
        <?php
        if (isset($_SESSION['panier']) && (count($_SESSION['panier']['id']) > 0))
            echo "<div class='notif'>".count($_SESSION['panier']['id'])."</div>";
        else
            echo "<div class='notif' style='display: none'></div>";
        ?>
      </div>



</div>

<?php
include("app/view/user/popup-sign.php");
?>

<div class="comble-top"></div> <!-- pour occuper l'espace de la nav catégories quand on scroll -->
<div class="categories">
    <div class="category habillement">
        <a href="?module=article&action=index#content1" class="lightblue">
            <div><img src="webroot/img/icons/shirt.png"></div>
            <div>Habillement</div>
            <i class="material-icons">keyboard_arrow_right</i>
        </a>
    </div>
    <div class="category maroquinerie">
        <a href="?module=article&action=index#content2" class="darkblue">
            <div><img src="webroot/img/icons/bag.png"></div>
            <div>Maroquinerie</div>
            <i class="material-icons">keyboard_arrow_right</i>
        </a>
    </div>
    <div class="category loisirs">
        <a href="?module=article&action=index#content3" class="lightblue">
            <div><img src="webroot/img/icons/games.png"></div>
            <div>Loisirs</div>
            <i class="material-icons">keyboard_arrow_right</i>
        </a>
    </div>
    <div class="category deco">
        <a href="?module=article&action=index#content4" class="darkblue">
            <div><img src="webroot/img/icons/lamp.png"></div>
            <div>Décoration</div>
            <i class="material-icons">keyboard_arrow_right</i>
        </a>
    </div>
    <div class="category bijoux">
        <a href="?module=article&action=index#content5" class="lightblue">
            <div><img src="webroot/img/icons/diamond.png"></div>
            <div>Bijoux</div>
            <i class="material-icons">keyboard_arrow_right</i>
        </a>
    </div>
    <div class="category art">
        <a href="?module=article&action=index#content6" class="darkblue">
            <div><img src="webroot/img/icons/pen.png"></div>
            <div>Art</div>
            <i class="material-icons">keyboard_arrow_right</i>
        </a>
    </div>
    <div class="category accessoires">
        <a href="?module=article&action=index#content7" class="lightblue">
            <div><img src="webroot/img/icons/accessory.png"></div>
            <div>Accessoires</div>
            <i class="material-icons">keyboard_arrow_right</i>
        </a>
    </div>
</div>

<!-- </div>
 -->