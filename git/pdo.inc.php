<?php

class connexion
{

	private static $instance;
	private $type = 'mysql';
	private $host = 'localhost';
	private $dbname = 'webdev';
	private $username = 'root';
	private $password = 'root';

	private $dbh;

	private function __construct()
	{
		try {
			$this->dbh = new PDO(
			$this->type.':host='.$this->host.'; dbname='.$this->dbname,
			$this->username,
			$this->password,
			array(PDO::ATTR_PERSISTENT => true)
			);

			$this->dbh->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
			$this->dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		} catch(PDOException $e) {
			echo "<div class=\"error\">Erreur !: ".$e->getMessage()."</div>";
			die();
		}
	}

	public static function getInstance() {
		if (!self::$instance instanceof self) {
			self::$instance = new self;
		}
		return self::$instance->dbh;
	}
}

$db = connexion::getInstance();