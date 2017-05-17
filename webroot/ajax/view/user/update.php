<?php
/*
if(!defined("_BASE_URL")) die("Ressource interdite!");

include("app/view/layout/header.inc.php"); ?>

<?php notification("Informations personnelles modifiées.", "Erreur lors de la mofidifaction de vos informations personnelles.");

    notificationForm("Tous les champs obligatoires doivent être renseignés.");*/ ?>


<div class="main">
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
                        <!-- <div>
                            Modifier photo ?
                        </div> -->
                        <div class="row">
                            <div>Genre : </div>
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
</div>

<script type="text/javascript">
var envoi=0;
    $("#form_post").submit(function(e){
        envoi=1;
        e.preventDefault();
        // $.post("webroot/ajax/controller/user/update.php", $("#form_post").serialize(), function(msg){

            // var e=document.getElementById('user_fname').value;
            // if(e=='tess')
            // console.log($("#form_post").serialize());
            // else
            // console.log("ok");
            // if(msg!=0){ // login réussi

            //     var inner = '<ul class="nav-mobile"><li><a href="?module=user&action=logout" data-toggle="tooltip" data-placement="bottom" title="Modifier">Deconnexion</a></li></ul>';
            //     if(msg == "admin")
            //         inner += "<br><a href='?module=user&action=users#dispformuser'>AJOUTER UN UTILISATEUR</a>";
            //     // $(".nav"    ).html(inner);

            //     $('.menu').append(inner)
            // } else {
            //     $("#error").html("Mauvaise identification, réessayez");
            // }
        // });
        // console.log("e");
        // $(".popup").hide();
        // $(".popup-bg").hide();
        // console.log(envoi);
        console.log($('#user_lname').val());
        $.ajax({
            url: "webroot/ajax/controller/user/update.php",
            method: "POST",
            data: "user_fname="+$('#user_fname').val()+"&user_lname="+$('#user_lname').val()+"&user_mail="+$('#user_mail').val()+"&user_newsletter="+$('#user_newsletter').val()+"&user_tel="+$('#user_tel').val()+"&user_gender="+$('#user_gender').val()+"&user_crea_desc="+$('#user_crea_desc').val()
        })

        return false; // ne pas recharger la page

    });
    console.log(envoi);
</script>


<?php /* include("app/view/layout/footer.inc.php");*/ ?>