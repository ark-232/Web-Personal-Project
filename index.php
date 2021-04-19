<?php 
    require './assets/includes/configuration.inc.php'; 
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Seb Beats: Home</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />

    <link rel="stylesheet" href="./assets/css/style.css" />
    <script src="./assets/js/script.js"></script>
    <script
      src="https://kit.fontawesome.com/c116131a28.js"
      crossorigin="anonymous"
    ></script>

    <!-- Bootstrap CSS -->
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
      integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
      crossorigin="anonymous"
    />
  </head>
  <body>
    <!-- navigation -->
    <?php
      require "./assets/includes/navbar.php"
    ?>
    

    <!-- content -->
    <div class="content pb-5">
      <div class="typewriter pt-5">
        <h1>
          <a
            href="./index.php"
            class="typewrite"
            data-period="2000"
            data-type='[ "Seb Beats: The Official Site", "I am a Musician.", "I am a Producer.", "I am an Entrepreneur." ]'
          >
            <span class="wrap"></span>
          </a>
        </h1>
      </div>
      <section id="about" class="about">
        <div class="container">
          <div class="section-title pt-3">
            <h2>About</h2>
            <p>
              Hello and welcome to my site! I'm a motivated and creative student
              with a strong foundation in both classical and contemporary music. This site is here
              to showcase my work and build an online presence.  I hope you enjoy my music and the work I do!
            </p>
          </div>

          <div class="row">
            <div class="col-lg-4">
              <img
                src="assets/img/dark-1850120_1920.jpg"
                class="img-fluid home-img"
                alt="Source: Pixabay"
              />
              <p class="pt-2"><i>Image Credit: Pixabay</i></p>
            </div>
            <div class="col-lg-8 pt-4 pt-lg-0 content">
              <h3>Musician &amp; Creator</h3>
              <p class="font-italic">
                <!-- Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                    magna aliqua. -->
              </p>
              <div class="row">
                <div class="col-lg-6"></div>
                <div class="col-lg-6"></div>
              </div>
              <p>
                Ever since I was little, I have been learning and creating music.  My early inspiration to learn 
                was from my mother.  She taught me piano and ever since then I have been in love with music.
                While still learning classical music, I have also moved into jazz and music production.  I love modern music
                and the control you can have over emotion with modern music software.
              </p>
            </div>
          </div>
        </div>
      </section>
    </div>

    <!-- footer -->
    <?php
      require './assets/includes/footer.php'
    ?>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script
      src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
      integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
      integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
      integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
