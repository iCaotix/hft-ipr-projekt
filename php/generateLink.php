<?php

  $uniqueID = uniqid();
  $resultStr = "Neuer eintrag über: http://localhost/github/ipr-projekt/entry.php?tan=";
  //Final link
  //$resultStr = "Neuer eintrag über: http://localhost/friendsbook/entry.php?tan=";
  $resultStr = $resultStr . $uniqueID;

  insertTan($uniqueID);

  $resultStr = getTanID($uniqueID);

  $HTMLJSON = array('html' => $resultStr);
  echo json_encode($HTMLJSON);

  function insertTan($tan) {
    require('../dbConnect.php'); //Erstellt variable mit dem namen $database

    $stmt = $database->prepare("INSERT INTO tans (tan, userID, used) VALUES (?, ?, ?)");

    $used = false;
    $userid = 1;
    $stmt->bind_param("ssi", $tan, $userid, $used);

    try {
      $stmt->execute();
      $database->close();
    } catch (PDOException $e) {
      $e->getMessage();
    }
  }

  function getTanID($tan){
    require('../dbConnect.php'); //Erstellt variable mit dem namen $database
    $abfrage = "SELECT `id` FROM `tans` WHERE `tan` = '" . $tan . "'";

    $ergebnis = mysqli_query($database, $abfrage);

    $row = $ergebnis->fetch_object();
    $resultStr = $row->id;


    return $resultStr;
  }

 ?>
