<?php

if(!defined("_BASE_URL")) die("Ressource interdite!");

include("app/view/layout/header.inc.php"); ?>

<div class="profile">
    <div class="rounded-nav"></div>
    <div class="card-container first">
        <div class="who">
            <div class="row">
                    <div class="user-photo"></div>
                    <div>
                        <div class="username title">
                        Nom user<span class="red">.</span></div>
                        <div>Créateur depuis date</div>
                        <div>X articles vendus</div>
                    </div>
            </div>
            <div class="user_crea_desc">
                <div class="bold">Description du créateur :</div>
                <div>If it smells like fish eat as much as you wish plan steps for world domination but step on your keyboard while you're gaming and then turn in a circle and paw at your fat belly and annoy owner until he gives you food say meow repeatedly until belly rubs, feels good.</div>
            </div>
        </div>
        <div>
            <div>
                <div class="row">
                    <div class="card">
                        <a href="product.php">
                            <img src="./img/plante-en-suspension-margot-rateuil-seysam.jpg"></a>
                        <div>
                            <h3>Plante en suspension</h3>
                            <div class="description">Habillez votre intérieur par touches de vert pour le faire respirer.</div>
                        </div>
                        <div class="cta">
                            <div class="add btn"></div>
                        </div>
                    </div>
                    <div class="card">
                        <img src="./img/plante-en-suspension-margot-rateuil-seysam.jpg">
                        <div>
                            <h3>Plante en suspension</h3>
                            <div class="description">Habillez votre intérieur par touches de vert pour le faire respirer.</div>
                        </div>
                        <div class="cta">
                            <div class="price btn">24,90€</div>
                            <div class="add btn"></div>
                        </div>
                    </div>
                    <div class="card">
                        <img src="./img/plante-en-suspension-margot-rateuil-seysam.jpg">
                        <div>
                            <h3>Plante en suspension</h3>
                            <div class="description">Habillez votre intérieur par touches de vert pour le faire respirer.</div>
                        </div>
                        <div class="cta">
                            <div class="price btn">24,90€</div>
                            <div class="add btn"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include("app/view/layout/footer.inc.php"); ?>
