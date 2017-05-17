<?php

if(!defined("_BASE_URL")) die("Ressource interdite!");

include("app/view/layout/header.inc.php"); ?>

<?php notification("", "Mauvais identifiants !"); ?>
<?php notificationValidate("Votre compte a bien été validé, vous pouvez maintenant vous identifier !", "otre compte n'a pas étét validé !"); ?>

<?php if(isset($_GET["mailVerif"]) && $_GET["mailVerif"] == "ok") { ?>
    <p>Un mail vous a été envoyé, Cliquer dessus pour valider le mail !</p>
<?php } ?>

<div class="col-xs-12 col-sm-4 col-sm-offset-4">
    <h3>Sign in</h3>
    <form id="signinForm" method="post" action="?module=user&action=login" class="form-horizontal">
        <div class="form-group">
            <div class="input-group">
                <span class="input-group-addon"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></span>
                <input name="email" type="text" class="form-control" id="email" placeholder="Email">
            </div>
        </div>
        <div class="form-group">
            <div class="input-group">
                <span class="input-group-addon"><span class="glyphicon glyphicon-lock" aria-hidden="true"></span></span>
                <input name="password" type="password" class="form-control" id="password" placeholder="Password">
            </div>
        </div>
        <div class="form-group">
            <div class="checkbox">
                <label>
                    <input name="autoConnect" type="checkbox"> Connexion automatique
                </label>
            </div>
        </div>
        <div class="form-group">
            <div class="input-group">
                <button type="submit" class="btn btn-primary">Sign in</button>
            </div>
        </div>
    </form>
</div>

<?php include("app/view/layout/footer.inc.php"); ?>