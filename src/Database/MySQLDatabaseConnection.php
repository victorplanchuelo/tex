<?php

namespace TelefonoEroticoX\Database;

use \PDO;
use \PDOException;

// The implementation we're currently using.
final class MySQLDatabaseConnection implements DatabaseConnection
{

    private $dbhost = "localhost"; // Ip Address of database if external connection.
    private $dbuser = "root"; // Username for DB
    private $dbpass = ""; // Password for DB
    private $dbname = "telefonoeroticox"; // DB Name

    public function __construct()
    {
        try {
            $connection = new PDO('mysql:host='.$this->dbhost.';dbname='.$this->dbname, $this->dbuser, $this->dbpass);
            $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            // Error handling
        } catch(PDOException $e) {
            die("Failed to connect to DB: ". $e->getMessage());
        }
    }

    public function query ($query, array $params)
    {
        return $query;
    }
}