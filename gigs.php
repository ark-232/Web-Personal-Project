<!doctype html>
<html lang="en">

<head>
  <title>Gigs</title>
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

  <?php require './assets/includes/navbar.php' ?>


  <div class="projects">
    <h2 class="pb-4 text-justify text-center">My Gigs</h2>



    
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
        <div class="overlay"></div>
          <img class="d-block w-100" src="./assets/img/dg.jpeg" alt="First slide">
          <div class="carousel-caption d-none d-md-block">
            <h5>DJ Event</h5>
            <p>
              Sometime after my premier event, I am scheduled for my first DJ event at a club in Zagreb. Please <a href="./comments.php">contact</a> me for more information.

            </p>
          </div>
        </div>
        <div class="carousel-item">
          <div class="overlay"></div>
          <img class="d-block w-100" src="./assets/img/party.jpeg" alt="Second slide">
          <div class="carousel-caption d-none d-md-block">
            <h5>Private Events</h5>
            <p>
              I am available for private events and parties. I can make custom mixtapses to suit the mood of your event. Please <a href="./comments.php">contact</a> me for more information.
            </p>
          </div>
        </div>
        <div class="carousel-item">
        <div class="overlay"></div>
          <img class="d-block w-100" src="./assets/img/music-1290087_1920.jpeg" alt="Third slide">
          <div class="carousel-caption d-none d-md-block">
            <h5>My Premier Event</h5>
            <p>When I finish my first album, I am booked to have a primier event. Please check out the gigs page for more information.</p>
          </div>

        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
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