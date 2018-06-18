<?php
session_start();
$session= $_SESSION['user'];

//DB VERBINDUNG
$user = 'root';
$password = '';
$db = 'kd42696_ipr-projekt';
$host = 'localhost';
$port = 3306;
$mysqli = new mysqli($host, $user, $password, $db, $port);
if ($mysqli->connect_error) {
    die('Connect Error (' . $mysqli->connect_errno . ') ' . $mysqli->connect_error);
}


//AUF DATEN AUS DB ZUGREIFEN -> NUR VON USER
$stmt = $mysqli->prepare("SELECT * from entries WHERE userID = '$session'");

      try {
        $stmt->execute();
      } catch (PDOException $e) {
        $e->getMessage();
      }
      $result = $stmt->get_result();
      $ID = 1;
      $zeit = 1;
      $a = "";

      // TABELLEN KOPF
      echo '<div>';
      echo '<table border=2>';
      echo '<thead>';
      echo '<tr>';

      echo       '<th>Vorame</th>';
      echo       '<th>Nachname</th>';
      echo       '<th>Geburtstag</th>';
      echo       '<th>Wohnort</th>';
      echo       '<th>Straße</th>';
      echo       '<th>Daher kennen wir uns</th>.';
      echo       '<th>Festnetz-Nummer</th>';
      echo       '<th>Handynummer</th>';
      echo       '<th>E-Mail</th>';
      echo       '<th>hobbies</th>';
      echo       '<th>Berufswunsch</th>';
      echo       '<th>Liebingsesen</th>';
      echo       '<th>Das würde ich auf eine einsamme Insel mitnehmen</th>';
      echo       '<th>Lieblingsfilm</th>';
      echo       '<th>Lieblingssport</th>';
      echo       '<th>Lieblings Filmcharaacter</th>';
      echo       '<th>Lieblings Tier</th>';
      echo       '<th>Lieblings Musik</th>';
      echo       '<th>Lieblings Game</th>';
      echo       '<th>Lieblings Alkohol</th>';
      echo       '<th>Lieblings Saufgeschichte</th>';
      echo       '<th>Letzter Absturz</th>';
      echo       '<th>Lieblingstrinkspiel</th>';

      echo '</tr>';
      echo '</thead>';

      //TABELLE MIT ALLEN DEM USER ZUGEHÖRIGEN ZEILEN FUELLEN
      while ($row = $result->fetch_assoc()) {

      echo '<tr>';

      echo '<td>'  . $row['vorname']  . '</td>';
      echo '<td>'  . $row['nachname']  . '</td>';
      echo '<td>'  . $row['geburtstag'] . '</td>';
      echo '<td>'  . $row['wohnort'] . '</td>';
      echo '<td>'  . $row['strasse'] . '</td>';
      echo '<td>'  . $row['kennenUns'] . '</td>';
      echo '<td>'  . $row['festnetz'] . '</td>';
      echo '<td>'  . $row['handynummer'] . '</td>';
      echo '<td>'  . $row['email'] . '</td>';
      echo '<td>'  . $row['hobbies'] . '</td>';
      echo '<td>'  . $row['berufswunsch'] . '</td>';
      echo '<td>'  . $row['essen'] . '</td>';
      echo '<td>'  . $row['insel'] . '</td>';
      echo '<td>'  . $row['film'] . '</td>';
      echo '<td>'  . $row['sport'] . '</td>';
      echo '<td>'  . $row['charakter'] . '</td>';
      echo '<td>'  . $row['tier'] . '</td>';
      echo '<td>'  . $row['musik'] . '</td>';
      echo '<td>'  . $row['game'] . '</td>';
      echo '<td>'  . $row['alk'] . '</td>';
      echo '<td>'  . $row['story'] . '</td>';
      echo '<td>'  . $row['absturz'] . '</td>';
      echo '<td>'  . $row['trinkspiel'] . '</td>';

      echo '</tr>';
}
    echo '</table>';
    echo '</div>';

 ?>
