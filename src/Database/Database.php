<?php

namespace TelefonoEroticoX\Database;

final class Database
{
	public function get_connection(): DatabaseConnection {
		static $connection = null;

		$connection = $this->getDatabaseConnection($connection);

		return $connection;
	}

	private function getDatabaseConnection($connection)
	{
		if ( null === $connection ) {
			if ($connection instanceof MySQLDatabaseConnection)
			// You can have arbitrary logic in here to decide what
			// implementation to use.
			$connection = new MySQLDatabaseConnection();
		}

		return $connection;
	}
}

 /***PARA CONSUMIR EL CODIGO DE ARRIBA
 * $database = ( new Database )->get_connection();
 * $result   = $database->query( $query );
 ****************************************/


/*
class Database
{
	private $connection;
	private static $instance;
	private $dbhost = "localhost"; // Ip Address of database if external connection.
	private $dbuser = "root"; // Username for DB
	private $dbpass = ""; // Password for DB
	private $dbname = "telefonoeroticox"; // DB Name


	public static function getInstance()
	{
		if(!self::$instance) {
			self::$instance = new self();
		}
		return self::$instance;
	}

	private function __construct()
	{
		try {
			$this->connection = new PDO('mysql:host='.$this->dbhost.';dbname='.$this->dbname, $this->dbuser, $this->dbpass);
			$this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

			// Error handling
		} catch(PDOException $e) {
			die("Failed to connect to DB: ". $e->getMessage());
		}
	}
	// Magic method clone is empty to prevent duplication of connection
	private function __clone() {}

	// Get the connection
	public function getConnection() {
		return $this->connection;
	}
}
*/