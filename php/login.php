<?php
  //<!--Login-->
if(isset($_POST['login-form'])){
  session_start();
  require('dbConnect.php');

  $name = ($_POST['loginName']);
  $pswd = ($_POST['loginPassword']);
  $pswd = md5($pswd);

  $stmt = $database->prepare("SELECT id FROM user WHERE '$name'=user AND password='$pswd'");
  $stmt->execute();
  $result = $stmt->get_result();

  if ($result->num_rows == 1) {
    $object = $result->fetch_object();
    $_SESSION['user'] = $object->id;

    echo "Einloggen erfolgreich";
  } else {
    echo "Einloggen fehlgeschlagen";
  }
}
?>
