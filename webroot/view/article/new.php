<?php

if(!defined("_BASE_URL")) die("Ressource interdite!");

include("app/view/layout/header.inc.php"); ?>




<div class="wishlist">
    <?php include("app/view/user/aside.php"); ?>

    <!-- <div class="aside">
        
        <div class="intitule">
            <div>Devenir créateur ?</div>
            <div>V</div>
        </div>
        <div class="mode">
            <div class="close-mode">X</div>
            <div>
                <input type="checkbox" id="switch1" name="switch1" class="switch" />
                <label for="switch1">Mode créateur désactivé</label>
            </div>
            <div class="explication">En activant le mode vendeur, votre profil devient visible par la communauté et vos créations peuvent être proposées à la vente</div>
        </div>
        <div class="info">
            <div class="user section">
                <div class="user-photo">
                </div>
                <div class="user-info">
                    <div class="title username">Utilisateur<span class="red">.</span></div>
                    <div>12 produits vendus</div>
                </div>
            </div>
            <div class="section">
                <div class="title">
                    Commandes en cours<span class="red">.</span>
                </div>
                <div class="commande">
                    <div class="add img"></div>
                    <div>
                        <div>Nom du produit</div>
                        <div class="etat grey-13">
                            <div><img src="img/icons/success.svg" /></div>
                            <div>Confirmation en cours</div>
                        </div>
                        <div class="etat grey-13">
                            <div><img src="img/icons/not-yet.svg" /></div>
                            <div>Livraison en cours</div>
                        </div>
                        <div class="etat grey-13">
                            <div><img src="img/icons/not-yet.svg" /></div>
                            <div>Colis réceptionné</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="section">
                <div class="title">
                    Commandes réceptionnées<span class="red">.</span>
                </div>
                <div class="commande">
                    <div class="add img"></div>
                    <div>
                        <div><a class="body-text lets-grade" href="#"> Je note mon expérience</a></div>
                        <div class="etat grey-13">
                            <div>Nom du produit</div>
                        </div>
                    </div>
                </div>
                <div>
                    <a class="dark-grey" href="#">Commandes antérieures</a>
                </div>
            </div>
        </div>
    </div> -->
    <div class="main">
        <div class="section">
            <div class="big title">J'ajoute un produit à ma boutique virtuelle<span class="red">.</span></div>
            <div class="row form">
                <div>
                    <div>Renseignez les informations concernant votre produit. Gardez en tête que les produits les plus vendus sont ceux dont les informations sont les plus complètes.</div>
                        
                    <form action="?module=article&action=new" method="post" enctype="multipart/form-data">
                        <div class="row">
                            <input autofocus class="champ" type="text" placeholder="Nom du produit" id="product-name" name="name" required />&nbsp;
                            <input class="champ" type="number" step="any" placeholder="Prix du produit" id="product-price" name="price" required /><div style="position: relative; left: -27px; color: #AAA; font-size: 0.9em; font-weight: 300;">€</div>
                        </div>
                        <div class="row">
                            <textarea name="desc" rows="6" cols="48 px" maxlength="300" required="required" placeholder="Description de votre produit"></textarea>
                        </div>
                        <div id="newprodcat" style="padding-bottom: 10px" class="row">
                            <div>Catégorie : &nbsp;</div>
                            <select required="required">
                                <?php
                                foreach ($categories as $cat) {
                                    echo "<option value='".$cat['cat_ID']."'>".$cat['cat_name']."</option>";
                                }
                                ?>
                            </select>
                        </div>
                        <div id="newprodscat"  style="padding-top: 10px; padding-bottom: 20px;" class="row">
                        </div>
                        <div class="row">
                            <div>Photo : &nbsp;</div><input type="file" name="image">
                        </div>
                        <input type="submit" value="PROPOSER MON PRODUIT À LA VENTE">
                    </form>
                </div>
                
            </div>
        </div>
    </div>
</div>

<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){

    $("#newprodcat").find("select").on("change", dispScat);

    function dispScat(){
        id = $("#newprodcat").find("select").val();
        console.log(id);
        $.post("webroot/ajax/controller/article/new_disp_scat.php", { cat : id }, function(texte){
            $("#newprodscat").html(texte);
        });
    }

    dispScat();

});

</script>

<?php include("app/view/layout/footer.inc.php"); ?>