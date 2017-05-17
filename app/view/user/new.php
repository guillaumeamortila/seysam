<?php

if(!defined("_BASE_URL")) die("Ressource interdite!");

include("app/view/layout/header.inc.php"); ?>

<?php notificationForm("Tous les champs obligatoires doivent être renseignés."); ?>

    <div class="row">
        <div class="col-md-12 art">
            <h1>Ajouter un utilisateur</h1>
        </div>
    </div>

    <div class="row flat-card">
        <div class="col-md-12">
            <form id="form_post" method="post" action="?module=user&action=new">
                <div class="form-group">
                    <label for="userLogin">Login <span class="reqLgd">*</span></label>
                    <input id="userLogin" type="text" class="form-control" name="user_login">
                </div>
                <div class="form-group">
                    <label for="userPass">Mot de passe <span class="reqLgd">*</span></label>
                    <input id="userPass" type="text" class="form-control" name="user_pass">
                </div>
                <div class="form-group">
                    <label for="userEmail">Email <span class="reqLgd">*</span></label>
                    <input id="userEmail" type="email" class="form-control" name="user_email">
                </div>
                <div class="form-group">
                    <label for="userDisplayName">Nom affiché <span class="reqLgd">*</span></label>
                    <input id="userDisplayName" type="text" class="form-control" name="user_display_name">
                </div>
                <button type="submit" class="btn btn-primary">Ajouter</button><p class="lgd">* champs obligatoires</p>
            </form>
        </div>
    </div>

<?php include("app/view/layout/footer.inc.php"); ?>