<?php

namespace TelefonoEroticoX;

use TelefonoEroticoX\Database\Database;


require '../vendor/autoload.php';

$database = ( new Database )->get_connection();
$result   = $database->query( "HOLAAAA", array() );

echo $result;