<div class="popup grade">
    <div class="close"><img src="img/icons/close.svg"></div>
    <div class="title">
        Notez votre expérience Seysam<span class="dot">.</span>
    </div>
    <div class="undertitle">Prenez quelques secondes pour évaluer le(s) produit(s) que vous avez acheté(s) afin de nous permettre de vous offrir le service le plus qualitatif possible.
    </div>
    <div>
        <form action="verif.php" method="post">
            <input type="hidden" name="note" value="" id="note"/>
              <img src="design/star_clear.gif" id="clear_stars" title="Sans intérêt c'est trop nul">
              <img src="design/star_out.gif" id="star_1" class="star"/>
              <img src="design/star_out.gif" id="star_2" class="star"/>
              <img src="design/star_out.gif" id="star_3" class="star"/>
              <img src="design/star_out.gif" id="star_4" class="star"/>
              <img src="design/star_out.gif" id="star_5" class="star"/>
            <div class="row">
                <div>Note:</div>
                <img src="img/icons/star-empty.svg"><img src="img/icons/star-empty.svg"><img src="img/icons/star-empty.svg"><img src="img/icons/star-empty.svg"><img src="img/icons/star-empty.svg">
            </div>
            <textarea name="comment" rows="6" cols="48 px" maxlength="1000" required="required"></textarea>
            <input id="btn" value="J'ENVOIE MON AVIS" type="submit" name="inscription" />
        </form>
    </div>
</div>

<div class="popup become-crea">
    <div class="close"><img src="img/icons/close.svg"></div>
    <div class="title">
        Devenir créateur<span class="dot">.</span>
    </div>
    <div class="undertitle">Pour devenir créateur, renseignez votre description et postez votre première annonce.
    </div>
    <div>
        <form action="verif.php" method="post">
            <textarea name="user_crea_desc" rows="6" cols="48 px" maxlength="1000" required="required" placeholder="Qui êtes-vous ? Décrivez votre profil en quelques caractères."></textarea>
            <input autofocus class="champ" type="text" placeholder="Nom du produit ?" id="product-name" name="product-name" required />
            <textarea name="product_desc" rows="6" cols="48 px" maxlength="1000" required="required" placeholder="Décrivez votre produit en quelques phrases."></textarea>
            <input class="champ" type="number" placeholder="Prix ?" name="price" id="price" maxlength="5" required autofocus />
            <p>Tenez compte du fait que les frais de livraison seront à votre charge</p>
            <!-- // @todo : faire en sorte que ce champ n'accepte que des prix - 5 chiffres max -->
            <input id="btn" value="JE PARTAGE MON PRODUIT" type="submit" name="inscription" />
        </form>
    </div>
</div>
<div class="popup-bg">
</div>