<?php

namespace TelefonoEroticoX;

use TelefonoEroticoX\Database\Database;


require '../vendor/autoload.php';

$database = ( new Database )->get_connection();
$result   = $database->query( "SELECT * FROM users WHERE id = :id", array(':id' => 1) );

var_dump($result);