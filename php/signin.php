<?php
  //<!--Register-->
  require('../dbConnect.php');

  $name = ($_POST['registerName']);
  $pswd = ($_POST['registerPassword']);
  $email = ($_POST['registerMail']);

  // if ($abfrage == "") {
    $stmt = $database->prepare("INSERT INTO user(user, email, password) VALUES (?,?,?)");
    $stmt->bind_param("sss", $name, $email, $pswd);
    $stmt->execute();
    $stmt->close();
  // }

 ?>
