<?php

function counttable($table, $options=array())
{
	global $connexion;

	try{

		$sql = 'SELECT count(*) as nb FROM '.$table;

		if((isset($options["wherecolumn"])) && (isset($options["wherevalue"]))){
			$sql .= " WHERE ".$options["wherecolumn"]." = ".$options["wherevalue"];
		}


		$query = $connexion->query($sql);

		$result = $query->fetch();

		$query->closeCursor();
		
		return $result["nb"];
	}
	catch(Exception $e){
		die("Erreur counttable SQL : ".$e->getMessage());
	}
}


function selecttable($table, $options=array())
{
	global $connexion;

	try{
		$sql = 'SELECT * FROM '.$table;
		// paramètre option : array("orderby" => "cat_id", ...)
		if ((isset($options["wherecolumn"])) && (isset($options["wherevalue"]))){
			$sql .= ' WHERE ' .$options["wherecolumn"]." = ".$options['wherevalue'];
		}
		if (isset($options["and"])){
			$sql .= ' AND ' .$options["and"];
		}
		if (isset($options["or"])){
			$sql .= ' OR ' .$options["or"];
		}
		if (isset($options["orderby"])){
			$sql .= ' ORDER BY ' .$options["orderby"];
			if (isset($options["order"])){
				$sql .= ' ' .$options["order"];
			}
		}
		if (isset($options["limit"])){
			$sql .= ' LIMIT ' .$options["limit"];
			if (isset($options["offset"])){
				$sql .= ' OFFSET ' .$options["offset"];
			}
		}
		

		$query = $connexion->query($sql);

		$data = $query->fetchAll();

		$query->closeCursor();

		return $data;
	}
	catch(Exception $e){
		die("Erreur selecttable SQL : ".$e->getMessage());
	}
}


function deletetable($table, $options=array()){

	global $connexion;

	try{

		if ((isset($options["idcolumn"])) && (isset($options["idvalue"]))){
			$sql = 'DELETE FROM '.$table;
            $sql .= ' WHERE ' .$options["idcolumn"] . " = " .$options["idvalue"];
        }
        $query = $connexion->exec($sql);
	}

	catch(Exception $e){
		die("Erreur suppr SQL : ".$e->getMessage());
	}

}




