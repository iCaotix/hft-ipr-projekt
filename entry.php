
<!doctype html>
<html lang="en">
<head>
  <script src="js/newEntry.js"></script>
</head>

  <body>

    <form id="entry-form" action="php/addEntry.php" method="post">
      Vorname:<br>
      <input type="text" name="vorname"><br>
      Nachname:<br>
      <input type="text" name="nachname"><br>
      E-Mail:<br>
      <input type="text" name="email"><br>
      Nachricht:<br>
      <input type="text" name="eintrag"><br>
      <input type="hidden" name="tan" value="<?php echo $_GET["tan"]?>"><br>
      <input id="absenden" type="submit" value="Abschicken">
      <button type="reset">Loeschen</button>

    </form>
  </body>

</html>
