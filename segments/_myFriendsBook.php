<p></p>
<div class="container">
  <div class="row">
    <div class="col-12">
      <div class="alert alert-dark" role="alert">
        <h4>Take a look in your FriendsBook!</h4>
        <hr />
        <button id="btnCreateTan" type="button" style="float: right;"class="btn btn-info">Erstelle Tan</button>
        <h5>Want more entrys? Go and invite your friends with the friendsTAN</h5>
        <div id="genTan"></div>
      </div>

      <div class="card-columns">

      <!--start of cards -->
      <?php
      $uID = 0;
      $uID = $_SESSION['user'];
      $stmt = $database->prepare("SELECT * FROM entries WHERE userID = '$uID'");
      $stmt->execute();
      $result = $stmt->get_result();
      while ($row = $result->fetch_assoc()) {

        echo'<div class="card">';
        echo'<div class="card-body">';
        echo'<h5 class="card-title">' . $row['vorname'] . ' ' . $row['nachname'] . '</h5>';
        if(!empty(trim($row['geburtstag']))){
            echo'<p class="card-text">Geburtstag: ' . $row['geburtstag'] . '</p>';
        }
        if(!empty(trim($row['wohnort']))){
          echo'<p class="card-text">Wohnort: ' . $row['wohnort'] . '</p>';
        }
        if(!empty(trim($row['strasse']))){
          echo'<p class="card-text">Straße: ' . $row['strasse'] . '</p>';
        }
        if(!empty(trim($row['kennenUns']))){
          echo'<p class="card-text">Woher kennen wir uns? ' . $row['kennenUns'] . '</p>';
        }
        if(!empty(trim($row['festnetz']))){
          echo'<p class="card-text">Festnetz: ' . $row['festnetz'] . '</p>';
        }
        if(!empty(trim($row['handynummer']))){
          echo'<p class="card-text">Handynummer: '  . $row['handynummer'] . '</p>';
        }
        if(!empty(trim($row['email']))){
          echo'<p class="card-text">E-Mail: '  . $row['email'] . '</p>';
        }
        if(!empty(trim($row['hobbies']))){
          echo'<p class="card-text">Hobbies: ' . $row['hobbies'] . ' </p>';
        }
        if(!empty(trim($row['berufswunsch']))){
          echo'<p class="card-text">Berufswunsch: ' . $row['berufswunsch'] . '</p>';
        }
        if(!empty(trim($row['essen']))){
          echo'<p class="card-text">Das könnte ich jeden Tag essen: ' . $row['essen'] . '</p>';
        }
        if(!empty(trim($row['insel']))){
          echo'<p class="card-text">Was ich auf eine Insel mitnehmen würde: ' . $row['insel'] . '</p>';
        }
        if(!empty(trim($row['film']))){
          echo'<p class="card-text">Lieblingsfilm: ' . $row['film'] . '</p>';
        }
        if(!empty(trim($row['sport']))){
          echo'<p class="card-text">Lieblingssport: ' . $row['sport'] . '</p>';
        }
        if(!empty(trim($row['charakter']))){
          echo'<p class="card-text">Coolster Film oder Spielecharakter: ' . $row['charakter'] . '</p>';
        }
        if(!empty(trim($row['tier']))){
          echo'<p class="card-text">Mein Lieblingstier: ' . $row['tier'] . '</p>';
        }
        if(!empty(trim($row['musik']))){
          echo'<p class="card-text">Lieblingsmusik: ' . $row['musik'] . '</p>';
        }
        if(!empty(trim($row['game']))){
          echo'<p class="card-text">Geilstes Game: ' . $row['game'] . '</p>';
        }
        if(!empty(trim($row['alk']))){
          echo'<p class="card-text">Lieblings alkoholisches Getränk: ' . $row['alk'] . '</p>';
        }
        if(!empty(trim($row['story']))){
          echo'<p class="card-text">Meine heftigeste Suffstory: ' . $row['story'] . '</p>';
        }
        if(!empty(trim($row['absturz']))){
          echo'<p class="card-text">Letzter Absturz: ' . $row['absturz'] . '</p>';
        }
        if(!empty(trim($row['trinkspiel']))){
          echo'<p class="card-text">Lieblings Trinkspiel: ' . $row['trinkspiel'] . '</p>';
        }

        echo'</div>'; //Close Card Body
        echo'</div>'; //Close Card
      }

      ?>
      </div>
      <!-- end of card-colums-->


    </div>
  </div>
</div> <!-- Ende container My FriendsBook -->
