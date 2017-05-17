<?php

if(!defined("_BASE_URL")) die("Ressource interdite!");

include("app/view/layout/header.inc.php"); ?>

<div class="panier">
    <div class="rounded-nav"></div>
    <div class="card-container first row">
        <div class="width-75">
            <div>
                <h1>Mon panier<span class="dot">.</span></h1>
            </div>
            <?php

            foreach ($panier_arts as $key => $art) {
                $art = $art[0]; ?>

            <div id="art<?= $art['art_ID'] ?>" class="added-product row">
                <img class="product" src="webroot/img/produits/<?= $art['img_url'] ?>" alt="#">
                <div class="infos">
                    <div onclick="deleteArt(<?= $art['art_ID'] ?>)" class="delete">
                        <img src="webroot/img/icons/close.svg">
                    </div>
                    <div class="bold-17"><?= $art['art_price'] ?> €</div>
                    <div><?= $art['art_name'] ?></div>
                    <div class="grey-13">Quantité : <?= $panier['qte'][$key] ?></div>
                </div>
            </div>

            <?php
            } ?>
            
        </div>
        <div class="width-25 panier-sticked">
            <div id="price1" class="bold-17">Total de <span class="dot"><?= $total ?></span> €</div>
            <div>
                <div id="price2">Sous-total : <?= $total ?> €</div>
                <div>Livraison : Standard (gratuit)</div>
                <div>Nous acceptons :</div>
                <div>
                    <img src="webroot/img/paiement.png" alt="#">
                </div>
                <div><button class="red">Accéder au paiement</button></div>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    
function deleteArt(id){
    $.post("webroot/ajax/controller/panier/modif.php", { delete : id }, function(texte){
        $("#art"+id).hide();
        $("#price1").html("Total de <span class='dot'>"+texte+"</span> €");
        $("#price2").html("Sous-total : "+texte+" €");
    });
}


</script>

<?php include("app/view/layout/footer.inc.php"); ?>
