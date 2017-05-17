<?php

if(!defined("_BASE_URL")) die("Ressource interdite!");

include("app/view/layout/header.inc.php"); ?>

<?php notification("Le nouvel utilisateur a bien été ajouté.", "Erreur lors de l'ajout du nouvel utilisateur."); ?>

    <div class="row">
        <div class="col-md-12 art">
            <h1>Utilisateurs du blog</h1>
        </div>
    </div>

    <div class="row flat-card">
        <div class="col-md-12">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>Nom</th>
                        <th>Email</th>
<!--                        <th>Action</th>-->
                    </tr>
                </thead>
                <tbody>
                <?php foreach ($users as $row) { ?>
                    <tr data-mod-id="<?php echo $row["ID"] ?>">
                        <td><?php echo $row["display_name"]; ?></td>
                        <td><?php echo $row["user_email"]; ?></td>
<!--                        <td>-->
<!--                            <a href="#" class="ajax-update" data-toggle="tooltip" data-placement="bottom" title="Supprimer"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>-->
<!--                            <a href="#" class="ajax-update" data-toggle="tooltip" data-placement="bottom" data-mod="--><?php //echo $row["ID"] ?><!--" title="Modifier"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a>-->
<!--                        </td>-->
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>

<?php if ($nb_users > PAGINATION_USERS) { pagination($nb_users, PAGINATION_USERS, "user", "index"); } ?>


<?php include("app/view/layout/footer.inc.php"); ?>