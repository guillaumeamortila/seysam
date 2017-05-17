<?php

if(!defined("_BASE_URL")) die("Ressource interdite!");

function counttable($table, $options=array()) {

    global $pdo;

    try {

        $sql = "SELECT count(*) as nb FROM " . $table;

        if ((isset($options["wherecolumn"])) && (isset($options["wherevalue"]))) {

            $sql .= ' WHERE ' . $options["wherecolumn"] . '=' . $options["wherevalue"];

        }

        // send req
        $query = $pdo->prepare($sql);

        // execute req
        $query->execute();

        // fetch req
        $result = $query->fetch();

        // sup cursor
        $query->closeCursor();

        return $result["nb"];
    }

    catch (Exception $e) {
        die("Connection à MySQL impossible : " . $e->getMessage());
    }
}

function readAllTable($table, $options=array()) {

    global $pdo;

    try {

        $sql = 'SELECT * FROM ' . $table;

        if ((isset($options["wherecolumn"])) && (isset($options["wherevalue"]))) {

            $sql .= ' WHERE ' . $options["wherecolumn"] . '=' . $options["wherevalue"];

        }

        if (isset($options["orderby"])) {

            $sql .= ' ORDER BY ' . $options["orderby"];

            if (isset($options["order"])) {

                $sql .= ' ' . $options["order"];

            }

        }

        if (isset($options["limit"])) {

            $sql .= ' LIMIT ';

            if (isset($options["offset"])) {

                $sql .= $options["offset"] . ', ';

            }

            $sql .= $options["limit"];

        }

        // send req
        $query = $pdo->query($sql);

        // fetch req
        $result = $query->fetchAll();

        // sup cursor
        $query->closeCursor();

        return $result;
    }

    catch (Exception $e) {
        die("Connection à MySQL impossible : " . $e->getMessage());
    }
}

function deletetable($table, $options=array()) {

    global $pdo;

    try {

        $sql = 'DELETE FROM ' .$table;

        if ((isset($options["idcolumn"])) & (isset($options["idvalue"]))) {

            $sql .= ' WHERE ' . $options["idcolumn"] . "=" . $options["idvalue"];

        }

        $pdo->exec($sql);

    }

    catch (Exception $e) {
        die("Connection à MySQL impossible : " . $e->getMessage());
    }
}