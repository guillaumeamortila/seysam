<?php

if(!defined("_BASE_URL")) die("Ressource interdite!");

if(isset($_SESSION["user"])) { ?>


 <div class="row">
    <form class="col s12" method="post" action="?module=commentaire&action=new">

            <div>
                <p>Vous commentez en tant que <span class="session-display-name"><?php echo $_SESSION["user"]["user_lname"]; ?></span></p>
                <div class="row">
                    <div class="input-field col s12">
                        <textarea id="textarea1" class="materialize-textarea"></textarea>
                        <input name="post_ID" type="hidden" value="<?= $_GET["id"]?>" >
                         <label for="email">Commentaire</label>
                    </div>
                </div>
                
            </div>
             <button class="btn waves-effect waves-light" type="submit" name="action"> Ajouter
    <i class="material-icons right">send</i>
  </button>
        </form>
    </div>

<?php } else { ?>

    <div>
        <p>Connectez-vous pour commenter cet article</p>
        <a href="?module=user&action=login">Connexion</a>
    </div>

<?php } ?>