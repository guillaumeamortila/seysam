<?php

function paginate($nb_enregistrements, $nb_par_page, $module, $action, $options = ""){

	$nb_pages = ceil($nb_enregistrements/$nb_par_page);

	if (!isset($_GET["page"]))
		$page = 1;
	else
		$page = $_GET["page"];

	echo "<ul class='paginate'><li>";

	// Flèche vers la page précédente
	if(!($page == 1)) { echo "<a href='?module=".$module."&action=".$action.$options."&page=".($page - 1)."'>«</a>"; }
	echo "</li>";
	// Boucle des pages, séparateurs entre liens, sélection de la page concernée
	$btw_pages = " • ";

	for($i=1; $i<$nb_pages+1; $i++){
		// Séparateur
		if($i>($nb_pages-1)) {$btw_pages = "";}
		// Sélection page concernée
		if($i == $page) {$current_page = "id='current-page' ";} else{$current_page = "";}
		// Echo de la boucle
		echo "<li><a ".$current_page."href='?module=".$module."&action=".$action.$options."&page=".$i."'>".$i."</a>".$btw_pages."</li>";
	}

	// Flèche vers la page suivante
	echo "<li>";
	if(!($page == $nb_pages)){echo "&nbsp;<a href='?module=".$module."&action=".$action.$options."&page=".($page + 1)."'>»</a>";}
	echo "</li></ul>";
}


function scroll_list($selectname, $classname, $idname, $data, $idcolumn, $valuecolumn, $options = array()){
	echo "<select name='".$selectname."' class='".$classname."' id='".$idname."'>";
	echo "<option value='all'>Tous les ".$selectname."</option>";
	foreach($data as $rec){
		echo "<option value='".$rec[$idcolumn]."'";
		if(isset($options["selected"]) && ($rec[$idcolumn] == $options["selected"])){
			echo " selected";
		}
		echo ">".$rec[$valuecolumn]."</option>";
	}
	echo "</select>";
}






