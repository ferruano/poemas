<?php

$dbhost = "localhost";
$dbuser = "id12995457_admin_poemas";
$dbpass = "RRWgZ3q+\w-\W6|U";
$dbname = "id12995457_poemas";
try {
    $db = new PDO("mysql:host=$dbhost;dbname=$dbname", $dbuser, $dbpass,
        array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'UTF8'"));
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch(Exception $error) {
    die("Error conexión BBDD " . $error->getMessage());
}
