<?php

require('dbConnect.php');
if (isset($_POST['index.php'])) {

  $name = $_POST['loginName'];
  $pswd = $_POST['loginPassword'];

  $abfrage = "SELECT PASSWORD WHERE loginName=NAME";
  if ($pswd == $abfrage) {
    // code..
  }
}





 ?>
