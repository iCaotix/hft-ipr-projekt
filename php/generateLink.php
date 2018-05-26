<?php

  $uniqueID = uniqid();
  $resultStr = "Neuer eintrag über: http://localhost/github/ipr-projekt/entry.php?tan=";
  $resultStr = $resultStr . $uniqueID;

  insertTan($uniqueID);

  $HTMLJSON = array('html' => $resultStr);
  echo json_encode($HTMLJSON);

  function insertTan($tan) {
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

    $stmt = $database->prepare("INSERT INTO tans (tan, used) VALUES (?, ?)");

    $false = false;
    $stmt->bind_param("si", $tan, $false);

    try {
      $stmt->execute();
    } catch (PDOException $e) {
      $e->getMessage();
    }
  }

 ?>
