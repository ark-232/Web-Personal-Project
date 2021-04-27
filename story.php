<?php 
    require './assets/includes/configuration.inc.php'; 
?>
<!doctype html>
<html lang="en">
  <head>
    <title>My Story</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="./assets/css/style.css" />
    <script src="./assets/js/script.js"></script>
    <script
      src="https://kit.fontawesome.com/c116131a28.js"
      crossorigin="anonymous"
    ></script>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
      
  <?php
      require "./assets/includes/navbar.php"
    ?>

      <section id="about" class="about">
        <div class="container">
          <div class="section-title">
            <h2 class="text-center">My Story</h2>
            <p class="text-center">
              On this site, you will find all about me and all about my work. I hope you like it!
            </p>
          </div>
  
          <div class="row">
            <div class="col-lg-4 aos-init aos-animate" data-aos="fade-right">
              <img src="./assets/img/seva.jpeg" class="img-fluid" alt="">
            </div>
            <div class="col-lg-8 pt-4 pt-lg-0 content aos-init aos-animate" data-aos="fade-left">
              <h3>Music Producer &amp; Entrepreneur</h3>
              <p class="font-italic">
              </p>
              <div class="row">
                <div class="col-lg-6">
                  <ul>
                    <li>
                      <strong>Birthday:</strong> <span>May 18, 2005</span>
                    </li>
                    <li>
                      <strong>Website:</strong> <span>This One!</span>
                    </li>
                    <li>
                      <strong>Phone:</strong> <span>+1 555 555 55554</span>
                    </li>
                    <li>
                      <strong>City:</strong> <span>Zagreb, Croatia</span>
                    </li>
                  </ul>
                </div>
                <div class="col-lg-6">
                  <ul>
                    <li>
                       <strong>Age:</strong>
                      <span>15</span>
                    </li>
                    <li>
                      <strong>Degree:</strong>
                      <span>Highschool (In Progress)</span>
                    </li>
                    <li>
                      <strong>Email:</strong>
                      <span>example@gmail.com</span>
                    </li>
                    <li>
                      <strong>Freelance:</strong> <span>Available</span>
                    </li>
                  </ul>
                </div>
              </div>
              <p>
                Hello and welcome to my site! I'm a motivated and creative student
              with a strong foundation in both classical and contemporary music. This site is here
              to showcase my work and build an online presence.  I hope you enjoy my music and the work I do!
              Ever since I was little, I have been learning and creating music.  My early inspiration to learn 
                was from my mother.  She taught me piano and ever since then I have been in love with music.
                While still learning classical music, I have also moved into jazz and music production.  I love modern music
                and the control you can have over emotion with modern music software.
              </p>
            </div>
          </div>
        </div>
      </section>


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