<?php
if(!defined(_BASE_URL)) die("Ressource interdite");

function modify_user($id)
{

	global $connexion;

	try{

		$req = "UPDATE seysam_admin_users
						SET
						admin_fname = :fname,
						admin_lname = :lname,
						admin_mail = :mail,
						admin_login = :login,
						admin_pass = :pass
						WHERE
						admin_ID = :id";

		$query = $connexion->prepare($req);

		$query->bindValue(":fname",$_POST["fname"],PDO::PARAM_STR);
		$query->bindValue(":lname",$_POST["lname"],PDO::PARAM_STR);
		$query->bindValue(":mail",$_POST["mail"],PDO::PARAM_STR);
		$query->bindValue(":login",$_POST["login"],PDO::PARAM_STR);
		$query->bindValue(":pass",$_POST["pass"],PDO::PARAM_STR);
		$query->bindValue(":id",$_GET["id"],PDO::PARAM_INT);

		$query -> execute();

		$query -> closeCursor();

		return $connexion;
	}
	catch (Exception $e){
		return false;
	}
}

