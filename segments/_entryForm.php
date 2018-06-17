<?php

  if(isset($_POST['tanID'])){
    //echo "Tan ->" . $_POST['tan'] . "<-";
    if($_POST['tanID'] != ""){
      addEntry();
      consumeTan($_POST['tanID']);
    }
  }

 function addEntry() {

 }

function consumeTan($tanID) {
  require('dbConnect.php'); //Erstellt variable mit dem namen $database

  //Stelle sicher dass die Tan noch verfügbar ist.
  $abfrage = "SELECT `used`, `tan` FROM `tans` WHERE `id` = '" . $tanID . "'";
  $ergebnis = mysqli_query($database, $abfrage);

  if($ergebnis->num_rows == 0){
    echo "Tan nicht vergeben";
    return;
  }

  $resultStr = "";

  $row = $ergebnis->fetch_object();
  if($row->used == 1){
    echo "Tan schon verbraucht";
    return;
  }

  //Setzte Tan auf verbraucht
  $update = $database->query("UPDATE `tans` SET `used`= true WHERE `id` = '" . $_POST['tanID'] . "'");

  echo "Tan verbraucht " . $_POST['tanID'];
}

?>
<p></p>
<!-- Container fuer entry form-->
<div class="container">
  <div class="row">

    <div class="col-12">
      <div class="alert alert-dark" role="alert">
        <h4>Write a new entry for yor friend!</h4>
      </div>
      <hr />

      <form id="entry-form" action="index.php?page=newEntry" method="post">
        <!-- Vorname-->
        <div class="input-group input-group-sm mb-3">
          <div class="input-group-prepend">
            <span class="input-group-text" id="inputGroup-sizing-sm">Vorname*</span>
          </div>
          <input type="text" class="form-control" name="entryVorname" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
        </div>
        <!-- Nachname-->
        <div class="input-group input-group-sm mb-3">
          <div class="input-group-prepend">
            <span class="input-group-text" id="inputGroup-sizing-sm">Nachname*</span>
          </div>
          <input type="text" class="form-control" name="entryNachname" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
        </div>
        <!-- Geburtstag-->
        <div class="input-group input-group-sm mb-3">
          <div class="input-group-prepend">
            <span class="input-group-text" id="inputGroup-sizing-sm">Geburtstag</span>
          </div>
          <input type="text" class="form-control" name="entryGeburtstag" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
        </div>
        <!-- Wohnort-->
        <div class="input-group input-group-sm mb-3">
          <div class="input-group-prepend">
            <span class="input-group-text" id="inputGroup-sizing-sm">Wohnort</span>
          </div>
          <input type="text" class="form-control" name="entryOrt" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
        </div>
        <!-- Strasse-->
        <div class="input-group input-group-sm mb-3">
          <div class="input-group-prepend">
            <span class="input-group-text" id="inputGroup-sizing-sm">Straße</span>
          </div>
          <input type="text" class="form-control" name="entryStraße" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
        </div>
        <!-- Woher kennen-->
        <div class="input-group input-group-sm mb-3">
          <div class="input-group-prepend">
            <span class="input-group-text" id="inputGroup-sizing-sm">Woher kennen wir uns?*</span>
          </div>
          <input type="text" class="form-control" name="entryKennen" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
        </div>
        <!-- Festnetz-->
        <div class="input-group input-group-sm mb-3">
          <div class="input-group-prepend">
            <span class="input-group-text" id="inputGroup-sizing-sm">Festnetz</span>
          </div>
          <input type="text" class="form-control" name="entryFestnetz" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
        </div>
        <!-- Handynummer-->
        <div class="input-group input-group-sm mb-3">
          <div class="input-group-prepend">
            <span class="input-group-text" id="inputGroup-sizing-sm">Handynummer</span>
          </div>
          <input type="text" class="form-control" name="entryHandy" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
        </div>
        <!-- E-Mail-->
        <div class="input-group input-group-sm mb-3">
          <div class="input-group-prepend">
            <span class="input-group-text" id="inputGroup-sizing-sm">E-Mail*</span>
          </div>
          <input type="text" class="form-control" name="entryMail" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
        </div>
        <!-- Hobbies-->
        <div class="input-group input-group-sm mb-3">
          <div class="input-group-prepend">
            <span class="input-group-text" id="inputGroup-sizing-sm">Hobbies</span>
          </div>
          <input type="text" class="form-control" name="entryHobbies" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
        </div>
        <!-- Berufswunsch-->
        <div class="input-group input-group-sm mb-3">
          <div class="input-group-prepend">
            <span class="input-group-text" id="inputGroup-sizing-sm">Berufswunsch</span>
          </div>
          <input type="text" class="form-control" name="entryBeruf" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
        </div>
        <!-- Essen-->
        <div class="input-group input-group-sm mb-3">
          <div class="input-group-prepend">
            <span class="input-group-text" id="inputGroup-sizing-sm">Das könnte ich jeden Tag essen</span>
          </div>
          <input type="text" class="form-control" name="entryEssen" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
        </div>
        <!-- Insel-->
        <div class="input-group input-group-sm mb-3">
          <div class="input-group-prepend">
            <span class="input-group-text" id="inputGroup-sizing-sm">Was ich auf eine Insel mitnehmen würde</span>
          </div>
          <input type="text" class="form-control" name="entryInsel" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
        </div>
        <!-- Film-->
        <div class="input-group input-group-sm mb-3">
          <div class="input-group-prepend">
            <span class="input-group-text" id="inputGroup-sizing-sm">Lieblingsfilm</span>
          </div>
          <input type="text" class="form-control" name="entryFilm" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
        </div>
        <!-- Sport-->
        <div class="input-group input-group-sm mb-3">
          <div class="input-group-prepend">
            <span class="input-group-text" id="inputGroup-sizing-sm">Lieblingssport</span>
          </div>
          <input type="text" class="form-control" name="entrySport" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
        </div>
        <!-- Charaker-->
        <div class="input-group input-group-sm mb-3">
          <div class="input-group-prepend">
            <span class="input-group-text" id="inputGroup-sizing-sm">Coolster Film oder Spielecharaker</span>
          </div>
          <input type="text" class="form-control" name="entryCharakter" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
        </div>
        <!-- Tier -->
        <div class="input-group input-group-sm mb-3">
          <div class="input-group-prepend">
            <span class="input-group-text" id="inputGroup-sizing-sm">Mein Lieblingstier</span>
          </div>
          <input type="text" class="form-control" name="entryTier" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
        </div>
        <!-- Musik -->
        <div class="input-group input-group-sm mb-3">
          <div class="input-group-prepend">
            <span class="input-group-text" id="inputGroup-sizing-sm">Lieblingsmusik(Genre, Interpret, Titel)</span>
          </div>
          <input type="text" class="form-control" name="entryMusik" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
        </div>
        <!-- Game -->
        <div class="input-group input-group-sm mb-3">
          <div class="input-group-prepend">
            <span class="input-group-text" id="inputGroup-sizing-sm">Geilstes Game</span>
          </div>
          <input type="text" class="form-control" name="entryGame" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
        </div>
        <!-- Alk-->
        <div class="input-group input-group-sm mb-3">
          <div class="input-group-prepend">
            <span class="input-group-text" id="inputGroup-sizing-sm">Lieblings alkoholisches Getränk</span>
          </div>
          <input type="text" class="form-control" name="entryAlk" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
        </div>
        <!-- Story-->
        <div class="input-group input-group-sm mb-3">
          <div class="input-group-prepend">
            <span class="input-group-text" id="inputGroup-sizing-sm">Meine heftigste Suffstory</span>
          </div>
          <input type="text" class="form-control" name="entryStory" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
        </div>
        <!-- Absturz -->
        <div class="input-group input-group-sm mb-3">
          <div class="input-group-prepend">
            <span class="input-group-text" id="inputGroup-sizing-sm">Letzer Absturz</span>
          </div>
          <input type="text" class="form-control" name="entryAbsturz" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
        </div>
        <!-- Trinkspiel -->
        <div class="input-group input-group-sm mb-3">
          <div class="input-group-prepend">
            <span class="input-group-text" id="inputGroup-sizing-sm">Lieblings Trinkspiel</span>
          </div>
          <input type="text" class="form-control" name="entryTrinkspiel" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
        </div>
        <!-- TAN -->
        <div class="input-group input-group-sm mb-3">
          <div class="input-group-prepend">
            <span class="input-group-text" id="inputGroup-sizing-sm">Eintrags-TAN*</span>
          </div>
          <input type="text" class="form-control" name="tanID" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
        </div>
        <!-- Absenden Button-->
        <div class="modal-footer">
          <button id="btnAbsenden" type="submit" class="btn btn-primary">Absenden</button>
        </div>

      </form>
    </div>
  </div>
</div> <!-- Ende container entry form -->
