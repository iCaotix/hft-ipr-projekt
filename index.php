<?php
  session_start();
  require('dbConnect.php');
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <title>FriendsBook</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">

    <!-- ccs stylesheet for Particles.js -->
    <link rel="stylesheet" media="screen" href="css/style.css">

    <script>
      var PHPSESSIONUSER = '<?php echo $_SESSION['user']; ?>';
      console.log(PHPSESSIONUSER);
    </script>

  </head>

  <body>
    <!-- PARTICLES JS -->
        <!-- particles.js container -->
        <div id="particles-js"></div>

        <!-- count particles  -->
          <div class="count-particles">
            <span class="js-count-particles">-</span> particles
          </div>

    <!-- Include the header-->
    <?php
      if(isset($_SESSION['user'])){
        include('segments/_headerSession.php');
      } else {
        include('segments/_header.php');
      }
    ?>

    <?php #include('segments/_indexTestLoginVals.php'); ?><!-- For forms testing -->

    <!-- Welche seite soll geladen werden-->
    <main role="main">
      <?php
        $page = '_404.html';
        $p = '';
        if(isset($_GET['page'])){$p = $_GET['page'];}

        if($p == '' || $p == 'home'){
          $page = '_home.php';
        }

        if($p == 'newEntry'){
          $page = '_entryForm.php';
        }

        if($p == 'myFriendsBook'){
          $page = '_myFriendsBook.php';
        }

        if($p == 'login'){
          if(isset($_SESSION['user'])){
            header('Location: index.php');
          } else {
            $page = '_login.php';
          }
        }

        if($p == 'register'){
          $page = '_register.php';
        }

        require('segments/'.$page);

      ?>
    </main>
    <!-- Include the footer-->
    <?php include('segments/_footer.html'); ?>



    <!-- Optional JavaScript -->

    <!-- scripts -->
    <script src="js/particles.js"></script>
    <script src="js/app.js"></script>
    <!-- stats.js -->
    <script src="js/stats.js"></script>
    <script>
      var count_particles, stats, update;
      stats = new Stats;
      stats.setMode(0);
      stats.domElement.style.position = 'fixed';
      stats.domElement.style.right = '0px';
      stats.domElement.style.bottom = '35px';
      document.body.appendChild(stats.domElement);
      count_particles = document.querySelector('.js-count-particles');
      update = function() {
        stats.begin();
        stats.end();
        if (window.pJSDom[0].pJS.particles && window.pJSDom[0].pJS.particles.array) {
          count_particles.innerText = window.pJSDom[0].pJS.particles.array.length;
        }
        requestAnimationFrame(update);
      };
      requestAnimationFrame(update);
    </script>


    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>

    <!-- import contentloader-->
    <script src="js/contentloader.js"></script>
  </body>
</html>
