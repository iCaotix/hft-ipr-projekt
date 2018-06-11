<?php
  //<!--Login-->
  require('../dbConnect.php');

  $name = ($_POST['loginName']);
  $pswd = ($_POST['loginPassword']);

  try {
    $stmt = $database->prepare("SELECT password FROM user WHERE '$name'=user");
    $stmt->execute();
    $result = $stmt->get_result();
    $row = $result->fetch_assoc();
  } catch (PDOException $e) {
    $e->getMessage();
  }
  if ($pswd == $row['password']) {
    $stmt = $database->prepare("SELECT loggedin FROM user WHERE '$name'=user");
    $stmt->execute();
    $result = $stmt->get_result()->fetch_assoc();
    if ($result['loggedin'] == 'false') {
      $stmt = $database->prepare("UPDATE `benutzer`.`user` SET `loggedin`='true' WHERE  '$name'=user");
      $stmt->execute();
      $a = "true";
    } else {
      $stmt = $database->prepare("UPDATE `benutzer`.`user` SET `loggedin`='false' WHERE  '$name'=user");
      $stmt->execute();
      $a = "false";
    }

    echo json_encode($a);
  } else {
    $a = array('error' => 'Einlogen fehlgeschlagen!' . $pswd . " " . $row['password']);
    echo json_encode($a);
  }

?>
