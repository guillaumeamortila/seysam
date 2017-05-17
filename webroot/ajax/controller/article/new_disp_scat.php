<?php

Define("_BASE_URL", true);

include_once("../../../../app/config/config.inc.php");
include_once("../../../../app/model/pdo.inc.php");

	include_once('../../model/article/new_disp_scat.php');
    $sub_categories = disp_scat($_POST['cat']);
    // $sub_categories = readAllTable("seysam_sub_categories", array("wherecolumn" => "scat_cat_ID", "wherevalue" => $_POST['id'] ,"orderby" => "scat_name", "order" => "ASC"));

    include("../../view/article/new_disp_scat.php");
