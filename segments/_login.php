<?php
  //<!--Login-->
if( (isset($_POST['loginName'])) && isset($_POST['loginPassword'])){

  $name = ($_POST['loginName']);
  $pswd = ($_POST['loginPassword']);
  $pswd = md5($pswd);

  $stmt = $database->prepare("SELECT id, username FROM user WHERE '$name'=username AND password='$pswd'");
  $stmt->execute();
  $result = $stmt->get_result();

  if ($result->num_rows == 1) {
    $object = $result->fetch_object();
    $_SESSION['user'] = $object->id;
    $_SESSION['username'] = $object->username;
    echo "Einloggen erfolgreich <br> Willkommen " . $_SESSION['username'];
    //header("refresh:1;");
    header('Location: index.php?page=myFriendsBook');
  } else {
    echo "Einloggen fehlgeschlagen";
  }


}
?>
<p></p>
<div class="container">
  <div class="row">
    <div class="col-12">
      <div class="alert alert-dark" role="alert">
        <h4> Login into your FriendsBook Account!</h4>
      </div>
      <hr />
      <!--Login-->
      <form id="login-form" action="index.php?page=login" method="post">
        <div class="input-group input-group-sm mb-3">
          <div class="input-group-prepend">
            <span class="input-group-text" id="inputGroup-sizing-sm">Username</span>
          </div>
          <input type="text" class="form-control" name="loginName" aria-label="Small" aria-describedby="inputGroup-sizing-sm" required>
        </div>
        <div class="input-group input-group-sm mb-3">
          <div class="input-group-prepend">
            <span class="input-group-text" id="inputGroup-sizing-sm">Password</span>
          </div>
          <input type="password" class="form-control" name="loginPassword" aria-label="Small" aria-describedby="inputGroup-sizing-sm" required>
        </div>
        <hr />
        <button id="btnLogin" type="submit" style="float: right;" class="btn btn-primary">Login</button>
        <div id="login-status"></div>
      </form>
    </div>
  </div>
</div> <!-- Ende container login -->
