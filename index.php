<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <title>FriendsBook</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">

  </head>


  <body>
    <?php include('segments/_header.html'); ?>
    <!--Navbar-->
    <nav class="navbar sticky-top navbar-expand-lg navbar-dark bg-dark">
      <a class="navbar-brand" href="#">FriendsBook</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">SPACER</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">SPACER</a>
          </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
          <div class="btn-group" role="group" aria-label="Basic example">
            <!-- Button trigger modal Login -->
            <button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#login">
              Login
            </button>

            <!-- Button trigger modal Register -->
            <button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#register">
              Register
            </button>
          </div>
        </form>
      </div>
    </nav>
    <!-- Modal login-->
    <div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Login</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            Login into your FriendsBook Account!
            <!--Login-->
            <form id="login-form" action="index.php" method="post">

            <div class="input-group input-group-sm mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text" id="inputGroup-sizing-sm">Username</span>
              </div>
              <input type="text" class="form-control" name="loginName" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
            </div>
            <div class="input-group input-group-sm mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text" id="inputGroup-sizing-sm">Password</span>
              </div>
              <input type="password" class="form-control" name="loginPassword" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button id="login" type="submit" class="btn btn-primary">Login</button>
          </div>
        </form>
        </div>
      </div>
    </div>
    <!-- Modal Register-->
    <div class="modal fade" id="register" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Register</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            Join our Community now! #friends
            <!--Register-->
            <form id="create-form" action="index.php" method="post">

          <div class="input-group input-group-sm mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text" id="inputGroup-sizing-sm">Username</span>
            </div>
            <input type="text" class="form-control"  name="registerName" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
          </div>
          <div class="input-group input-group-sm mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text" id="inputGroup-sizing-sm">Password</span>
            </div>
            <input type="password" class="form-control" name="registerPassword" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
          </div>
          <div class="input-group input-group-sm mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text" id="inputGroup-sizing-sm">EmailAdress</span>
            </div>
            <input type="password" class="form-control" name="registerMail" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
          </div>
            ╭∩╮(ಠ۝ಠ)╭∩╮
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button id="create" type="submit" class="btn btn-primary">Create Account</button>
          </div>
        </form>
        </div>
      </div>
    </div>
    <div id="content">

    </div>
  <div id="phpTest">
    LoginModalData:
    Welcome <?php echo $_POST["loginName"]; ?><br>
    Your Password is: <?php echo $_POST["loginPassword"]; ?><br>
    <br>
    RegisterModalData:
    Welcome <?php echo $_POST["registerName"]; ?><br>
    Your Password is: <?php echo $_POST["registerPassword"]; ?><br>
    Your Mail Adress is: <?php echo $_POST["registerMail"]; ?><br>
  </div>


  <div class="container">
    <div class="row">
      <div class="col">
           1 of 3
         </div>

  <div class="col-10">
  <form id="entry-form" action="index.php" method="post">

  <div class="input-group input-group-sm mb-3">
    <div class="input-group-prepend">
      <span class="input-group-text" id="inputGroup-sizing-sm">Vorname*</span>
    </div>
    <input type="text" class="form-control" name="entryVorname" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
  </div>

  <div class="input-group input-group-sm mb-3">
    <div class="input-group-prepend">
      <span class="input-group-text" id="inputGroup-sizing-sm">Nachname*</span>
    </div>
    <input type="text" class="form-control" name="entryNachname" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
  </div>

  <div class="input-group input-group-sm mb-3">
    <div class="input-group-prepend">
      <span class="input-group-text" id="inputGroup-sizing-sm">Geburtstag</span>
    </div>
    <input type="text" class="form-control" name="entryGeburtstag" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
  </div>

  <div class="input-group input-group-sm mb-3">
    <div class="input-group-prepend">
      <span class="input-group-text" id="inputGroup-sizing-sm">Wohnort</span>
    </div>
    <input type="text" class="form-control" name="entryOrt" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
  </div>

  <div class="input-group input-group-sm mb-3">
    <div class="input-group-prepend">
      <span class="input-group-text" id="inputGroup-sizing-sm">Straße</span>
    </div>
    <input type="text" class="form-control" name="entryStraße" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
  </div>

  <div class="input-group input-group-sm mb-3">
    <div class="input-group-prepend">
      <span class="input-group-text" id="inputGroup-sizing-sm">Woher kennen wir uns?*</span>
    </div>
    <input type="text" class="form-control" name="entryKennen" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
  </div>

  <div class="input-group input-group-sm mb-3">
    <div class="input-group-prepend">
      <span class="input-group-text" id="inputGroup-sizing-sm">Festnetz</span>
    </div>
    <input type="text" class="form-control" name="entryFestnetz" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
  </div>

  <div class="input-group input-group-sm mb-3">
    <div class="input-group-prepend">
      <span class="input-group-text" id="inputGroup-sizing-sm">Handynummer</span>
    </div>
    <input type="text" class="form-control" name="entryHandy" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
  </div>

  <div class="input-group input-group-sm mb-3">
    <div class="input-group-prepend">
      <span class="input-group-text" id="inputGroup-sizing-sm">E-Mail*</span>
    </div>
    <input type="text" class="form-control" name="entryMail" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
  </div>

  <div class="input-group input-group-sm mb-3">
    <div class="input-group-prepend">
      <span class="input-group-text" id="inputGroup-sizing-sm">Hobbys</span>
    </div>
    <input type="text" class="form-control" name="entryHobbys" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
  </div>

  <div class="input-group input-group-sm mb-3">
    <div class="input-group-prepend">
      <span class="input-group-text" id="inputGroup-sizing-sm">Berufswunsch</span>
    </div>
    <input type="text" class="form-control" name="entryBeruf" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
  </div>

  <div class="input-group input-group-sm mb-3">
    <div class="input-group-prepend">
      <span class="input-group-text" id="inputGroup-sizing-sm">Das könnte ich jeden Tag essen</span>
    </div>
    <input type="text" class="form-control" name="entryEssen" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
  </div>

  <div class="input-group input-group-sm mb-3">
    <div class="input-group-prepend">
      <span class="input-group-text" id="inputGroup-sizing-sm">Was ich auf eine Insel mitnehmen würde</span>
    </div>
    <input type="text" class="form-control" name="entryInsel" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
  </div>

  <div class="input-group input-group-sm mb-3">
    <div class="input-group-prepend">
      <span class="input-group-text" id="inputGroup-sizing-sm">Lieblingsfilm</span>
    </div>
    <input type="text" class="form-control" name="entryFilm" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
  </div>

  <div class="input-group input-group-sm mb-3">
    <div class="input-group-prepend">
      <span class="input-group-text" id="inputGroup-sizing-sm">Lieblingssport</span>
    </div>
    <input type="text" class="form-control" name="entrySport" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
  </div>

  <div class="input-group input-group-sm mb-3">
    <div class="input-group-prepend">
      <span class="input-group-text" id="inputGroup-sizing-sm">Coolster Film oder Spielecharaker</span>
    </div>
    <input type="text" class="form-control" name="entryCharakter" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
  </div>

  <div class="input-group input-group-sm mb-3">
    <div class="input-group-prepend">
      <span class="input-group-text" id="inputGroup-sizing-sm">Mein Lieblingstier</span>
    </div>
    <input type="text" class="form-control" name="entryTier" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
  </div>

  <div class="input-group input-group-sm mb-3">
    <div class="input-group-prepend">
      <span class="input-group-text" id="inputGroup-sizing-sm">Lieblingsmusik(Genre, Interpret, Titel)</span>
    </div>
    <input type="text" class="form-control" name="entryMusik" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
  </div>

  <div class="input-group input-group-sm mb-3">
    <div class="input-group-prepend">
      <span class="input-group-text" id="inputGroup-sizing-sm">Geilstes Game</span>
    </div>
    <input type="text" class="form-control" name="entryGame" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
  </div>

  <div class="input-group input-group-sm mb-3">
    <div class="input-group-prepend">
      <span class="input-group-text" id="inputGroup-sizing-sm">Lieblings alkoholisches Getränk</span>
    </div>
    <input type="text" class="form-control" name="entryAlk" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
  </div>

  <div class="input-group input-group-sm mb-3">
    <div class="input-group-prepend">
      <span class="input-group-text" id="inputGroup-sizing-sm">Meine heftigste Suffstory</span>
    </div>
    <input type="text" class="form-control" name="entryStory" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
  </div>

  <div class="input-group input-group-sm mb-3">
    <div class="input-group-prepend">
      <span class="input-group-text" id="inputGroup-sizing-sm">Letzer Absturz</span>
    </div>
    <input type="text" class="form-control" name="entryAbsturz" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
  </div>

  <div class="input-group input-group-sm mb-3">
    <div class="input-group-prepend">
      <span class="input-group-text" id="inputGroup-sizing-sm">Lieblings Trinkspiel</span>
    </div>
    <input type="text" class="form-control" name="entryTrinkspiel" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
  </div>

  <div class="input-group input-group-sm mb-3">
    <div class="input-group-prepend">
      <span class="input-group-text" id="inputGroup-sizing-sm">friendsTAN*</span>
    </div>
    <input type="text" class="form-control" name="entryTrinkspiel" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
  </div>

  <div class="modal-footer">
  <button id="entry" type="submit" class="btn btn-primary">Login</button>
  </div>

  </form>
  </div>


  <div class="col">
       3 of 3
     </div>
</div>
</div>







































    <!-- Include the footer-->
    <?php include('segments/_footer.html'); ?>
    <!-- Optional JavaScript -->

    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>

    <!-- import contentloader-->
    <script src="js/contentloader.js"></script>
  </body>
</html>
