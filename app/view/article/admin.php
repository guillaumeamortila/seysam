<?php

if(!defined("_BASE_URL")) die("Ressource interdite!");

include("app/view/layout/header.inc.php"); ?>

    <div class="row">
        <div class="col-md-12 art">
            <h1>Gestion des articles</h1>
        </div>
    </div>

    <div class="row flat-card">
        <div class="col-md-12">

            <table class="table table-hover right">

                <thead>

                    <tr>
                        <th>Titre</th>
                        <th>Auteur</th>
                        <th>Catégorie</th>
                        <th class="align-right">Nb com</th>
                    </tr>

                </thead>

                <tbody>

                    <?php

                    foreach ($articles as $row) {

                    $nb_com = lire_nb_commentaires($row["art_ID"]);

                    ?>

                        <tr class="accordeon">
                            <td><?php echo $row["art_name"]; ?></td>
                            <td><?php echo $row["art_crea_ID"]; ?></td>
                            <td><?php echo $row["art_scat_ID"]; ?></td>
                            <td class="flex-right"><?php echo $nb_com ?><i class="material-icons">chat</i></td>
                        </tr>

                        <tr>
                            <td colspan="4"><div class="flat-card-inv"><?php echo $row["art_desc"]; ?></div></td>
                        </tr>

                        <tr>

                            <?php

                            if ($nb_com != 0) { ?>

                                <td colspan="4">

                                    <div class="flat-card-inv">

                                    <table style="border: 1px solid #F2F2F2" class="table table-hover">

                                        <thead>

                                            <tr>
                                                <th>Auteur</th>
                                                <th>Commentaire</th>
                                                <th class="align-right">Action</th>
                                            </tr>

                                        </thead>

                                        <tbody>

                                        <?php

                                        for ($i=0;$i<$nb_com;$i++) {

                                            $com = $row[6][$i];

                                            ?>

                                                <tr>
                                                    <td><?php echo $com["user_fname"]; ?></td>
                                                    <td><?php echo $com["com_content"]; ?></td>
                                                    <td class="align-right"><a onclick="return confirm('Etes-vous certain ?')" href="?module=article&action=delete_com&page=1&id=<?php echo $com["com_ID"]; ?>">Supprimer</a></td>
                                                </tr>

                                            <?php

                                        }

                                        ?>

                                        </tbody>

                                    </table>

                                    </div>

                                </td>

                            <?php } else { ?>

                                <td colspan="4">

                                    <div class="flat-card-inv">Aucun commentaire</div>

                                </td>

                            <?php } ?>

                        </tr>

                    <?php } ?>

                </tbody>
            </table>

        </div>
    </div>

<?php include("app/view/layout/footer.inc.php"); ?>