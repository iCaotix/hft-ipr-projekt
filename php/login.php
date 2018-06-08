<?php

  require('../dbConnect.php');

  $name = $database->real_escape_string($_POST['registerName']);
  $pswd = $database->real_escape_string($_POST['registerPassword']);
  $email = $database->real_escape_string($_POST['registerMail']);


  $abfrage = "SELECT password WHERE $name=user";
  if ($pswd == $abfrage) {
    // code..
    echo "HI";
  }
  // if ($abfrage == "") {
    $stmt = $database->prepare("INSERT INTO user(user, email, password) VALUES (?,?,?)");
    $stmt->bind_param("sss", $name, $email, $pswd);
    $stmt->execute();
    $stmt->close();
  // }

 ?>
