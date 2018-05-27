<?php

  if(isset($_POST['tan'])){
    //echo "Tan ->" . $_POST['tan'] . "<-";
    if($_POST['tan'] != ""){
      addEntry();
      consumeTan($_POST['tan']);
    }
  }

 function addEntry() {

 }

function consumeTan($tan) {
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

  //Stelle sicher dass die Tan noch verfügbar ist.
  $abfrage = "SELECT `used`, `tan` FROM `tans` WHERE `tan` = '" . $tan . "'";
  $ergebnis = mysqli_query($database, $abfrage);

  if($ergebnis->num_rows == 0){
    echo "Tan nicht vergeben";
    return;
  }

  $resultStr = "";

  while ($row = $ergebnis->fetch_assoc()) {
    $resultStr = $resultStr . $row["used"] . '  ' . $row["tan"] . '<br>';
    if($row["used"] == 1){
      echo "Tan schon verbraucht";
      return;
    }

  }

  //echo $resultStr;

  //Setzte Tan auf verbraucht
  $update = $database->query("UPDATE `tans` SET `used`= true WHERE `tan` = '" . $_POST['tan'] . "'");

  echo "Tan verbraucht " . $_POST['tan'];
}

?>
<!doctype html>
<html lang="en">
<head>
  <script src="js/entry.js"></script>
</head>

  <body>

    <form id="entry-form" action="entry.php" method="post">
      Vorname:<br>
      <input type="text" name="vorname"><br>
      Nachname:<br>
      <input type="text" name="nachname"><br>
      E-Mail:<br>
      <input type="text" name="email"><br>
      Nachricht:<br>
      <input type="text" name="eintrag"><br>
      Tan:<br>
      <input type="text" name="tan"><br>
      <input id="absenden" type="submit" value="Abschicken">
      <button type="reset">Loeschen</button>

    </form>
  </body>

</html>
