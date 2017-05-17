<?php

if(!defined("_BASE_URL")) die("Ressource interdite!");

function read_user($id){

    global $pdo;

    try {

        $query = $pdo->prepare('SELECT *
                                FROM seysam_users
                                WHERE ID =:id');

        // init param
        $query->bindParam(':id', $id, PDO::PARAM_INT);

        // execute req
        $query->execute();

        // fetch req
        $user = $query->fetch();

        // sup cursor
        $query->closeCursor();

        return $user;

    }


    catch (Exception $e){
        die("Connection à MySQL impossible : " . $e->getMessage());
    }
}

function read_user_address($id){

    global $pdo;

    try {

        $query = $pdo->prepare('SELECT address_num_road, address_city, address_code
                                FROM  seysam_addresses
                                WHERE address_user_ID=:id');

        // init param
        $query->bindParam(':id', $id, PDO::PARAM_INT);

        // execute req
        $query->execute();

        // fetch req
        $user_address = $query->fetch();

        // sup cursor
        $query->closeCursor();

        return $user_address;

    }


    catch (Exception $e){
        die("Connection à MySQL impossible : " . $e->getMessage());
    }
}

function update_user($idUser){

    global $pdo;

    try {

        $sql = "UPDATE seysam_users
                SET user_pass=:user_pass, user_fname=:user_fname, user_lname=:user_lname, user_mail=:user_mail, user_newsletter=:user_newsletter, user_tel=:user_tel, user_gender=:user_gender, user_image_url=:user_image_url, user_crea_desc=:user_crea_desc
                WHERE ID=:id_user";

        $query = $pdo->prepare($sql);

        $query->bindValue(':user_pass', $_POST["user_pass"], PDO::PARAM_STR);
        $query->bindValue(':user_fname', $_POST["user_fname"], PDO::PARAM_STR);
        $query->bindValue(':user_lname', $_POST["user_lname"], PDO::PARAM_STR);
        $query->bindValue(':user_mail', $_POST["user_mail"], PDO::PARAM_STR);
        $query->bindValue(':user_newsletter', $_POST["user_newsletter"], PDO::PARAM_BOOL);
        $query->bindValue(':user_tel', $_POST["user_tel"], PDO::PARAM_INT);
        $query->bindValue(':user_gender', $_POST["user_gender"], PDO::PARAM_BOOL);
        $query->bindValue(':user_image_url', $_POST["user_image_url"], PDO::PARAM_STR);
        $query->bindValue(':user_crea_desc', $_POST["user_crea_desc"], PDO::PARAM_STR);

        $query->bindValue(':id_user', $idUser, PDO::PARAM_INT);

        // On execute la requête
        $query->execute();

        // Return de l'id
        return true;

    }

    catch (Exception $e){
        return false;
    }
}

// function update_user_token($token) {

//     global $pdo;

//     try {

//         $sql = "UPDATE blog_users SET user_verif=:user_verif WHERE user_verif=:user_verif_token";

//         $query = $pdo->prepare($sql);

//         $query->bindValue(':user_verif', "1", PDO::PARAM_INT);
//         $query->bindValue(':user_verif_token', $token, PDO::PARAM_STR);

//         // On execute la requête
//         $query->execute();

//         // Return de l'id
//         return true;

//     }

//     catch (Exception $e){
//         return false;
//     }

// }