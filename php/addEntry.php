<?php

  consumeTan($_POST['tan']);
  echo "Tan verbraucht " . $_POST['tan'];



 function addEntry() {

 }

function consumeTan($tan) {
  //Stelle DB verbindung her
  $user = 'root';
  $password = 'root';
  $db = 'friendsbook';
  $host = 'localhost';
  $port = 3306;

  $database = new mysqli($host, $user, $password, $db, $port);

  if ($database->connect_error) {
    die('Connect Error (' . $database->connect_errno . ') ' . $database->connect_error);
  }

  $update = $database->query("UPDATE `tans` SET `used`= true WHERE `tan` = '" . $_POST['tan'] . "'");


}


?>
