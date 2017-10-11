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
//$res = $database->query('SELECT * FROM post');
$post = $database->query('SELECT * FROM post ORDER BY id');

require '@main.html.php';
