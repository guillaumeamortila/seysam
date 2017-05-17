<?php

if(!defined("_BASE_URL")) die("Ressource interdite!");

protection("user", "login", "user", USER_ADMIN);

$users = readAllTable('seysam_users', array(  "orderby" => "user_fname",
                                            "order" => "ASC"));

if (!isset($_GET["page"]))
    $page = 1;
else
    $page = $_GET["page"];

$offset = ($page - 1) * PAGINATION_COMMENTS;

$options = array(   "orderby" => "com_date",
                    "order" => "ASC",
                    "limit" => PAGINATION_COMMENTS,
                    "offset" => $offset);

// if (isset($_GET["user"])) {

//     $options['wherecolumn'] = "comment_author";
//     $options['wherevalue'] = $_GET["user"];

// }

$comments = readAllTable('seysam_comments_rankings', $options);

if (isset($_GET["user"])) {

    $options = array(   "wherecolumn" => "comment_author",
                        "wherevalue" => $_GET["user"]);

} else {

    $options = array();

}

$nb_comments = counttable("seysam_comments_rankings", $options);

echo $nb_comments;

define('PAGE_TITLE', 'Admin des commentaires');
include_once 'app/view/commentaire/admin.php';