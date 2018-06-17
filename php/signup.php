<?php
  //<!--Login-->
  session_start();
  require('../dbConnect.php');


  $name = ($_POST['loginName']);
  $pswd = ($_POST['loginPassword']);
  // $pswd = md5($pswd);

  $stmt = $database->prepare("SELECT id FROM user WHERE '$name'=user AND password='$pswd'");
  $stmt->execute();
  $result = $stmt->get_result();

  if ($result->num_rows == 1) {
    $object = $result->fetch_object();
    $_SESSION['user'] = $object->id;
    // header('Location: /index2.htm');
    echo json_encode('Eingeloggt!');
    // $stmt = $database->prepare("SELECT loggedin FROM user WHERE '$name'=user");
    // $stmt->execute();
    // $result = $stmt->get_result()->fetch_assoc();
    // if ($result['loggedin'] == 'false') {
    //   $stmt = $database->prepare("UPDATE `benutzer`.`user` SET `loggedin`='true' WHERE  '$name'=user");
    //   $stmt->execute();
    //   $a = "true";
    } else {
      $a = array('error' => 'Einlogen fehlgeschlagen!');
      echo json_encode($a);
    }


?>
