<?php
require "./assets/includes/configuration.inc.php";
?>
<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
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

      <div class="rubric">
          <h2 class="text-center">Rubrics</h2>
        <table>
            <thead>
                <tr>
                    <th scope="col">Content</th>
                    <th scope="col">Mavigation</th>
                    <th scope="col">Organization</th>
                    <th scope="col">Design</th>
                    <th scope="col">HTML/CSS</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td data-label="Content">Overly simple</td>
                    <td data-label="Mavigation">Confusing/Incomplete</td>
                    <td data-label="Organization">Poor</td>
                    <td data-label="Design">What design?</td>
                    <td data-label="HTML/CSS">Missing; invalid</td>
                </tr>
                <tr>
                    <td data-label="Content">Present, but lightweight</td>
                    <td data-label="Mavigation">Present, but missing where you are</td>
                    <td data-label="Organization">Adequate</td>
                    <td data-label="Design">Follows most principles</td>
                    <td data-label="HTML/CSS">Not separated, but valid</td>
                </tr>
                <tr>
                    <td data-label="Content">Complete with good thoughts</td>
                    <td data-label="Mavigation">Can tell where you are and where you can go</td>
                    <td data-label="Organization">Nicely organized, logical</td>
                    <td data-label="Design">Follows principles</td>
                    <td data-label="HTML/CSS">Follows MVC model; valid; works</td>
                </tr>
                <tr>
                    <td data-label="Content" class="selected">Very thorough, very thoughtful</td>
                    <td data-label="Mavigation" class="selected">Fits in well with the page; styled nicely</td>
                    <td data-label="Organization" class="selected">Extremely well organized</td>
                    <td data-label="Design" class="selected">Excellent; pleasing; everything fits in nicely</td>
                    <td data-label="HTML/CSS" class="selected">Flawless HTML and CSS; No browser issues; screenshot
                        validation</td>
                </tr>
            </tbody>
        </table>
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