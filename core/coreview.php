<?php

if(!defined("_BASE_URL")) die("Ressource interdite!");

function pagination($nb_enregistrements, $nb_par_pages, $module, $action, $options = "") {

    $nb_pages = ceil($nb_enregistrements / $nb_par_pages);

    echo "<div class='row'>";

    echo "<nav class='center' aria-label='Page navigation'>";

    echo "<ul class='pagination'>";

    for($i = 1; $i <= $nb_pages; $i++){

        echo "<li><a href=\"?module=" . $module . "&action=" . $action . "&page=" . $i . $options . "\">$i</a></li>";

    }

    echo "</ul>";

    echo "</nav>";

    echo "</div>";

}

function scrolllist($selectname, $classname, $idname, $data, $idcolumn, $valuecolumn, $options = array())   {

    echo "<select name='" . $selectname ."' class='" . $classname . "' id='" . $idname . "'>";

    if (isset($options["default"])) {
        echo "<option value='0'>" . $options["default"] . "</option>";
    }

    foreach ($data as $rec) {
        echo "<option value='" . $rec[$idcolumn] . "'";
        if ((isset($options["selected"])) && ($rec[$idcolumn] == $options["selected"])) {
            echo " selected";
        }
        echo ">";
        echo $rec[$valuecolumn];
        echo "</option>";
    }
    echo "</select>";
}

function html_select($selectName, $idSelect, $classSelect, $data, $idCol, $valueCol, $options=array()) {

    echo '<div class="form-group">';

        echo '<select ';

        if ($idSelect != "") {

            echo 'id="' . $idSelect . '" ';

        }

        if ($classSelect != "") {

            echo 'class="' . $classSelect . '" ';

        }

        echo 'name="' . $selectName . '">';

            if (isset($options["default"])) {

                echo '<option value="0">' . $options["default"] . '</option>';

            }

            foreach ($data as $row) {

                echo '<option value="' . $row[$idCol] . '"';

                if(isset($options["selected"]) && ($options["selected"] == $row[$idCol])) {
                    echo ' selected';
                }

                echo '>' . $row[$valueCol] . '</option>';

            }

        echo '</select>';

    echo '</div>';

}

function notification($succes, $error) {

    if(isset($_GET["notif"])) {

        echo '<div class="row">';

        if($_GET["notif"] === "ok") {

            echo '<div class="col-md-12 notif succes">';
            echo '<p>' . $succes . '</p>';
            echo '<span class="glyphicon glyphicon-remove" aria-hidden="true"></span>';
            echo '</div>';

        }

        if($_GET["notif"] === "nok") {

            echo '<div class="col-md-12 notif error">';
            echo '<p>' . $error . '</p>';
            echo '<span class="glyphicon glyphicon-remove" aria-hidden="true"></span>';
            echo '</div>';

        }

        echo '</div>';

    }

}

function notificationValidate($succes, $error) {

    if(isset($_GET["notif"])) {

        echo '<div class="row">';

        if($_GET["notif"] === "validate_ok") {

            echo '<div class="col-md-12 notif succes">';
            echo '<p>' . $succes . '</p>';
            echo '<span class="glyphicon glyphicon-remove" aria-hidden="true"></span>';
            echo '</div>';

        }

        if($_GET["notif"] === "validate_nok") {

            echo '<div class="col-md-12 notif error">';
            echo '<p>' . $error . '</p>';
            echo '<span class="glyphicon glyphicon-remove" aria-hidden="true"></span>';
            echo '</div>';

        }

        echo '</div>';

    }

}

function notificationForm($error) {

    if(isset($_GET["notifForm"])) {

        echo '<div class="row">';

        if($_GET["notifForm"] === "nok") {

            echo '<div class="col-md-12 notif error">';
            echo '<p>' . $error . '</p>';
            echo '<span class="glyphicon glyphicon-remove" aria-hidden="true"></span>';
            echo '</div>';

        }

        echo '</div>';

    }

}