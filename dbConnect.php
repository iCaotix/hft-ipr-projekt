<?php

//Create DB connection.
//This creates a usable "database" - Variable as mysqli Objekt
//simply remove the "~" in front of the filename
$user = 'root';
$password = 'Test';
$db = 'kd42696_ipr-projekt';
$host = 'db';
$port = 3306;

$database = new mysqli($host, $user, $password, $db, $port);

if ($database->connect_error) {
  die('Connect Error (' . $database->connect_errno . ') ' . $database->connect_error);
}

?>
