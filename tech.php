<?php
require './assets/includes/configuration.inc.php';
?>
<!doctype html>
<html lang="en">

<head>
  <title>Technologies</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link rel="stylesheet" href="./assets/css/style.css" />
  <script src="./assets/js/script.js"></script>
  <script src="https://kit.fontawesome.com/c116131a28.js" crossorigin="anonymous"></script>

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>


  <?php
  require "./assets/includes/navbar.php"
  ?>


  <div class="projects">
    <h2 class="pb-4 text-justify text-center">My Technologies</h2>



    <div class="row text-center">

      <div class="col-lg-4 col-md-12 mb-lg-0 mb-4">
        <!--Featured image-->
        <div class="view overlay rounded z-depth-1">
          <img src="./assets/img/abletonLogo.png" class="img-fluid" alt="Picture of Vinyl" />
          <a>
            <div class="mask rgba-white-slight"></div>
          </a>
        </div>
        <!--Excerpt-->
        <div class="card-body pb-0">
          <h4 class="font-weight-bold my-3">Ableton</h4>
          <p class="grey-text">
            I am profecient in music production and recording in ableton.
          </p>
        </div>
      </div>


      <div class="col-lg-4 col-md-6 mb-md-0 mb-4">
        <div class="view overlay rounded z-depth-1">
          <img src="./assets/img/MIDI_LOGO.jpeg" class="img-fluid" alt="Vinyl Player" />
          <a>
            <div class="mask rgba-white-slight"></div>
          </a>
        </div>
        <div class="card-body pb-0">
          <h4 class="font-weight-bold my-3">MIDI</h4>
          <p class="grey-text">
            I use a MIDI keyborad to record and produce my "beats."
          </p>
        </div>
      </div>
      <div class="col-lg-4 col-md-6">
        <div class="view overlay rounded z-depth-1">
          <img src="./assets/img/trumpet.jpeg" class="img-fluid" alt="Studio" />
          <a>
            <div class="mask rgba-white-slight"></div>
          </a>
        </div>
        <div class="card-body pb-0">
          <h4 class="font-weight-bold my-3">Trumpet</h4>
          <p class="grey-text">
            My instrument of choice is the trumpet. I use it for moth my music production and for playing jazz.
          </p>
        </div>
      </div>
    </div>
  </div>


  <?php
      require './assets/includes/footer.php'
    ?>





  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>