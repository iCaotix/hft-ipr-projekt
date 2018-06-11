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
    <!-- Include the header-->
    <?php include('segments/_header.html'); ?>

<<<<<<< HEAD






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

<?php include('segments/_entry.html'); ?>

   <?php echo $_POST["entryVorname"]; ?><br>
   <?php echo $_POST["entryNachname"]; ?><br>
   <?php echo $_POST["entryMail"]; ?><br>
   <?php echo $_POST["entryKennen"]; ?><br>
   <?php echo $_POST["entryGame"]; ?><br>
   <?php echo $_POST["entryTrinkspiel"]; ?><br>

=======
    <div id="content">
      <button id="btnCreateTan" type="button" class="btn btn-info">Erstelle Tan</button>
    </div>
>>>>>>> 268a8ea290224c0d4de615683d4c8529df7d5252

    <!-- Zum testen der Daten die ueber die Modals reinkommen -->
    <!-- <?php include('segments/_indexTestLoginVals.php'); ?> -->

    <!-- Include the entryForm-->
    <?php include('segments/_entryForm.php'); ?>

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
