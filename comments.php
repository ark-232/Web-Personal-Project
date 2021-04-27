<?php
require "./assets/includes/configuration.inc.php";
require "./assets/includes/db-configuration.inc.php";
?>

<?php

if (isset($_POST["name"])) {
  echo "<br>";
  $name = strip_tags($_POST["name"]);
  $email = strip_tags($_POST["email"]);
  $subject = strip_tags($_POST["subject"]);
  $message = strip_tags($_POST["message"]);


  $name = filter_var($name, FILTER_SANITIZE_STRING);
  $email = filter_var($email, FILTER_SANITIZE_NUMBER_INT);
  $subject = filter_var($subject, FILTER_SANITIZE_NUMBER_INT);
  $message = filter_var($message, FILTER_SANITIZE_NUMBER_INT);

  $mysqli = retrieveDatabaseConnection();

  $sql = "INSERT INTO sebbeats (name, email, subject, message) VALUES (?,?,?,?)";
  $stmt = $mysqli->prepare($sql);
  $stmt->bind_param("ssss", $name, $email, $subject, $message);

  $success = $stmt->execute();


  $mysqli->close();
}

?>


<!doctype html>
<html lang="en">

<head>
  <title>Find Me</title>
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

  <div class="contact">
    <section class="mb-4 contact">

      <!--Section heading-->
      <h2 class="h1-responsive font-weight-bold text-center my-4">Contact us</h2>
      <!--Section description-->
      <p class="text-center w-responsive mx-auto mb-5">Do you have any questions? Please do not hesitate to contact me directly. I will respond to you within
        a matter of hours to help you.</p>

      <div class="row">

        <!--Grid column-->
        <div class="col-md-9 mb-md-0 mb-5">
          <form id="contact-form" name="contact-form" action="" method="POST">

            <!--Grid row-->
            <div class="row">

              <!--Grid column-->
              <div class="col-md-6">
                <div class="md-form mb-0">
                  <input required type="text" id="name" name="name" class="form-control">
                  <label for="name" class="">Your name</label>
                </div>
              </div>
              <!--Grid column-->

              <!--Grid column-->
              <div class="col-md-6">
                <div class="md-form mb-0">
                  <input required type="email " id="email" name="email" class="form-control">
                  <label for="email" class="">Your email</label>
                </div>
              </div>
              <!--Grid column-->

            </div>
            <!--Grid row-->

            <!--Grid row-->
            <div class="row">
              <div class="col-md-12">
                <div class="md-form mb-0">
                  <input required type="text" id="subject" name="subject" class="form-control">
                  <label for="subject" class="">Subject</label>
                </div>
              </div>
            </div>
            <!--Grid row-->

            <!--Grid row-->
            <div class="row">

              <!--Grid column-->
              <div class="col-md-12">

                <div class="md-form">
                  <textarea required type="text" id="message" name="message" rows="2" class="form-control md-textarea"></textarea>
                  <label for="message">Your message</label>
                </div>

                <div class="text-center text-md-left">
                  <input type="submit" class="btn btn-primary"></input>
                </div>

              </div>
            </div>
            <!--Grid row-->

          </form>
        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-md-3 text-center">
          <ul class="list-unstyled mb-0">
            <li><i class="fas fa-map-marker-alt fa-2x"></i>
              <p>Zagreb, Croatia</p>
            </li>

            <li><i class="fas fa-phone mt-4 fa-2x"></i>
              <p>+1 555 555 5555</p>
            </li>

            <li><i class="fas fa-envelope mt-4 fa-2x"></i>
              <p>example@example.com</p>
            </li>
          </ul>
        </div>
        <!--Grid column-->

      </div>

    </section>
  </div>
  <?php
  $mysqli = retrieveDatabaseConnection();

  $sql = "SELECT * FROM sebbeats";
  $result = $mysqli->query($sql);

  $numberOfRows = $result->num_rows;

  if ($numberOfRows > 0) {

    while ($row = $result->fetch_assoc()) {
      echo "
        <div class='card bg-light w-50 mx-auto my-4 p-4'>
          <p>Name: {$row['name']}</p>
          <p>Email: {$row['email']}</p>
          <p>Subject: {$row['subject']}</p>
          <p>Message: {$row['message']}</p>
        </div>
        ";
    }
  }

  $mysqli->close();
  ?>





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