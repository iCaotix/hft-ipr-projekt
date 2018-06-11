<?php

  $uniqueID = uniqid();
  $resultStr = "Neuer eintrag über: http://localhost/github/ipr-projekt/entry.php?tan=";
  //Final link
  //$resultStr = "Neuer eintrag über: http://localhost/friendsbook/entry.php?tan=";
  $resultStr = $resultStr . $uniqueID;

  insertTan($uniqueID);

  $HTMLJSON = array('html' => $resultStr);
  echo json_encode($HTMLJSON);

  function insertTan($tan) {
    require('../dbConnect.php'); //Erstellt variable mit dem namen $database

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
