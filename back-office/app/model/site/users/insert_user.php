<?php
if(!defined(_BASE_URL)) die("Ressource interdite");

function insert_user()
{

	global $connexion;

	try{

		$req = "INSERT INTO seysam_admin_users
						(admin_fname, admin_lname, admin_mail, admin_login, admin_pass, admin_authority)
						VALUES
						(:fname, :lname, :mail, :login, :pass, 0)";

		$query = $connexion->prepare($req);

		$query->bindValue(":fname",$_POST["fname"],PDO::PARAM_STR);
		$query->bindValue(":lname",$_POST["lname"],PDO::PARAM_STR);
		$query->bindValue(":mail",$_POST["mail"],PDO::PARAM_STR);
		$query->bindValue(":login",$_POST["login"],PDO::PARAM_STR);
		$query->bindValue(":pass",$_POST["pass"],PDO::PARAM_STR);

		$query ->execute();

		return $connexion;
	}
	catch (Exception $e){
		return false;
	}

}

