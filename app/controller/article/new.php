<?php 

if(!defined("_BASE_URL")) die("Ressource interdite!");

protection("user", "login", "user", USER_LAMBDA);

if (!isset($_POST["name"]) || !isset($_POST["price"])) {

    $categories = readAllTable("seysam_categories", array("orderby" => "cat_name", "order" => "ASC"));

    define("PAGE_TITLE", "Nouvel article");
    include_once("app/view/article/new.php");

} else {

    include_once("app/model/article/new.php");
    $retourart = insert_article($_POST, $_SESSION["user"]["ID"]);

    if(!$retourart) {

        location("article", "new", "notif=nok");

    } else {


        // UPLOAD DE L'IMAGE

        $url = md5(uniqid(rand(), true));
        // echo "Nouveau nom : {$url}<br>";
        if (move_uploaded_file($_FILES["image"]["tmp_name"], "webroot/img/produits/".$url.".jpg")) {
            $imgurl = $url.".jpg";
            // echo "Le fichier est bien enregistré :)";
        } else {
            die("le fichier n'est pas déplacé :(");
        }


    // Redimension

        $image = ImageCreateFromJPEG("webroot/img/produits/".$url.".jpg");
        $width = imagesx($image);
        $height = imagesy($image);

        if ($width>$height){
            //format horizontal
            $new_width = 500;
            $new_height = ($new_width * $height) / $width;
        } else {
            //format vertical
            $new_height = 500;
            $new_width = ($new_height * $width) / $height;      
        }
        $thumb = imagecreatetruecolor($new_width,$new_height);
        imagecopyresized($thumb, $image, 0, 0, 0, 0, $new_width, $new_height, $width, $height);
        ImageJPEG($thumb, "webroot/img/produits/".$url.".jpg");
        // chmod
        imagedestroy($image);



        $retourimg = insert_art_img($imgurl, $retourart);

        if(!$retourimg) {
            location("article", "new", "notif=nok");
        } else {
            location("article", "detail", "id=" . $retourart . "&notif=ok");
        }
    }
}
