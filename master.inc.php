<?php
require 'vendor/autoload.php';

$connection = [
    'driver' => 'mysqli',
    'host' => 'localhost',
    'username' => 'root',
    'password' => '',
    'database' => 'blog',
];

// v případě chyby vyhodí Dibi\Exception
$database = new Dibi\Connection($connection);