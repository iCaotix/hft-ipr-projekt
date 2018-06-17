<?php

  $uniqueID = uniqid();
  $resultStr = $resultStr . $uniqueID;

  insertTan($uniqueID);

  $resultStr = getTanID($uniqueID);

  $HTMLJSON = array('html' => $resultStr , 'userid' => $_POST['phpSession']);
  echo json_encode($HTMLJSON);

  function insertTan($tan) {
    require('../dbConnect.php'); //Erstellt variable mit dem namen $database

    $stmt = $database->prepare("INSERT INTO tans (tan, userID, used) VALUES (?, ?, ?)");

    $used = false;
    $userid = $_POST['phpSession'];
    //$userid = $_SESSION['user'];
    //$userid = $_POST['userid'];
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
