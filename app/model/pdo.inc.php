<?php

//if(!defined("_BASE_URL")) die("Ressource interdite!");

try {
    $dns = "mysql:host=localhost;port=3306;dbname=seysam";
    $user = "root";
    $mdp = "root"; //root sur mac
    // Options de connection
    $options = array (
        PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8",
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);

    $pdo = new PDO ($dns, $user, $mdp, $options);
}

catch (Exeption $e) {
    die("Connection à MySQL impossible : " . $e->getMessage());
}