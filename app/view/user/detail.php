<?php

if(!defined("_BASE_URL")) die("Ressource interdite!");

include("app/view/layout/header.inc.php"); ?>

<div class="wishlist">

	<?php include("app/view/user/aside.php"); ?>

	<div class="main" id="main_user">
		<div class="section">
        <div class="big title">Je modifie mon profil<span class="red">.</span></div>
        <div class="row form">
            <form id="form_post" method="post" action="#">
                <div>
                    <div class="bold-17">Identité</div>
                    <div>Vos données actuelles sont celles présentes dans les champs. Modifiez les à votre guise puis cliquez sur enregistrer.</div>
                    <!-- la variable se trouve dans le value -->
                    <div class="row">
                        <input autofocus class="champ" type="text" value="<?=$user["user_fname"]; ?>" placeholder="Prénom" id="user_fname" name="user_fname" required /><input placeholder="Nom" class="champ" type="text" value="<?=$user["user_lname"]; ?>" id="user_lname" name="user_lname" required />
                    </div>
                    <div class="row">
                        <input class="champ" type="text" value="<?=$user["user_mail"]; ?>" id="user_mail" name="user_mail" placeholder="E-mail" required /><input class="champ" type="text" maxlength="10" value="<?=$user["user_tel"]; ?>" placeholder="Numéro de téléphone" id="user_tel" name="user_tel" required />
                    </div>
                    <div class="row">
                        <div>
                            Modifier photo
                        </div>
                        <div class="row">
                            <div>Genre :&nbsp;</div>
                            <select >
                                    <option value=""> Séléctionnez </option>
                                    <option value="homme">Homme</option>
                                    <option value="femme">Femme</option>
                                </select>
                        </div>
                    </div>
                    <div class="bold-17">Adresse</div>
                    <div>Adresse à partir de laquelle vous lancez vos colis et où vous les recevez</div>
                    <div class="row">
                        <input class="champ" type="text" value="<?=$user_address["address_num_road"]; ?>" id="adresse" name="rue" placeholder="Adresse postale" required />
                        <input class="champ" type="text" value="<?=$user_address["address_code"]; ?>" id="code-postal" name="code-postal" placeholder="Code postal" required />
                        <input class="champ" type="text" value="<?=$user_address["address_city"]; ?>" id="ville" name="ville" placeholder="Ville" required />
                    </div>

                    <div class="bold-17">Description</div>
                    <div>Visible par la communauté</div>
                    <div class="row">
                        <textarea name="user_crea_desc" rows="6" cols="48 px" maxlength="1000" required="required" placeholder="Votre description"><?=$user["user_crea_desc"]; ?></textarea>
                    </div>

                    <button type="submit" class="btn btn-primary">Modifier</button><p class="lgd">* champs obligatoires</p>
                </div>
            </form>
        </div>
    </div>
		<!-- <div class="section">
			<div class="big title">Coups de coeur<span class="red">.</span></div>
			<div class="row">

				<div class="card">
					<img src="webroot/img/produits/plante-en-suspension-margot-rateuil-seysam.jpg">
					<div>
						<h3>Plante en suspension</h3>
						<div class="createur">Création par <a href="#">Margot Rateuil</a></div>
						<div class="description">Habillez votre intérieur par touches de vert pour le faire respirer.</div>
					</div>
					<div class="cta">
						<div class="price btn">24,90€</div>
						<div class="add btn"></div>
					</div>
				</div>

				<div class="card">
					<img src="webroot/img/produits/plante-en-suspension-margot-rateuil-seysam.jpg">
					<div>
						<h3>Plante en suspension</h3>
						<div class="createur">Création par <a href="#">Margot Rateuil</a></div>
						<div class="description">Habillez votre intérieur par touches de vert pour le faire respirer.</div>
					</div>
					<div class="cta">
						<div class="price btn">24,90€</div>
						<div class="add btn"></div>
					</div>
				</div>

				<div class="card">
					<img src="webroot/img/produits/plante-en-suspension-margot-rateuil-seysam.jpg">
					<div>
						<h3>Plante en suspension</h3>
						<div class="createur">Création par <a href="#">Margot Rateuil</a></div>
						<div class="description">Habillez votre intérieur par touches de vert pour le faire respirer.</div>
					</div>
					<div class="cta">
						<div class="price btn">24,90€</div>
						<div class="add btn"></div>
					</div>
				</div>
			</div>


		</div>
 -->
	</div>
</div>


<?php include("app/view/layout/footer.inc.php"); ?>
