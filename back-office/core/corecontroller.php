<?php

function protection($session, $pt, $module, $action, $level){

	if(!isset($_SESSION[$session])){
		header("Location:?pt=".$pt."&module=".$module."&action=".$action."&notif=protect");
		exit;
	}

	if(!isset($_SESSION["level"])){
		header("Location:?pt=".$pt."&module=".$module."&action=".$action."&notif=protect");
		exit;
	}

	if($_SESSION["level"] < $level){
		header("Location:?pt=".$pt."&module=".$module."&action=".$action."&notif=protect");
		exit;
	}

}

function location($pt, $module, $action, $get=""){
	$url = "?pt=".$pt."&module=".$module."&action=".$action;
	if($get!="")
		$url .= "&".$get;
	header("Location:".$url);
	exit;
}

/*
function erreur($e){
	
}*/





