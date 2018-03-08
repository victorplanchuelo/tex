<?php

namespace TelefonoEroticoX\Database;

use \PDO;
use \PDOException;

// The implementation we're currently using.
final class MySQLDatabaseConnection implements DatabaseConnection
{
    private $connection;
    private $dbhost = "localhost"; // Ip Address of database if external connection.
    private $dbuser = "root"; // Username for DB
    private $dbpass = ""; // Password for DB
    private $dbname = "telefonoeroticox"; // DB Name

    public function __construct()
    {
        try {
            $this->connection = new PDO('mysql:host='.$this->dbhost.';dbname='.$this->dbname, $this->dbuser, $this->dbpass);
            $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            // Error handling
        } catch(PDOException $e) {
            die("Failed to connect to DB: ". $e->getMessage());
        }
    }

    public function query ($query, array $params)
    {
       // $statement = $this->connection->prepare('SELECT * FROM users WHERE id = :id');
       // $statement->bindValue(":id", 1,PDO::PARAM_INT );
       // $statement->execute();

        //return json_encode($statement->fetchAll());

        $results = false;
        if ($query = $this->connection->prepare($query)) {
            foreach ($params as $key => $value) {
                $query->bindValue($key, $value);
            }
            if ($query->execute()) {
                // You can PDO::FETCH_OBJ instad of assoc, or whatever you like
                $results = $query->fetchAll(PDO::FETCH_ASSOC);
                //$this->count = $query->rowCount();
                //$this->lastId = $query->lastInsertId();
            }
        }

        return $results;
    }

}