<?php

  $uniqueID = uniqid();
  $resultStr = "Neuer eintrag über: http://localhost/github/ipr-projekt/entry.php?tan=";
  $resultStr = $resultStr . uniqid();


  $HTMLJSON = array('html' => $resultStr);
  echo json_encode($HTMLJSON);

 ?>
