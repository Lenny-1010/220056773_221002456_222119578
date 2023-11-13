<?php

$host = "localhost";
$dbname = "tutored_db";
$usernmae = "root";
$password = "";

$mysqli = new mysqli($host, $usernmae, $password, $dbname);

if ($mysqli->connect_errno) {
    die("Connection Error". $mysqli->connect_error);
}

return $mysqli;