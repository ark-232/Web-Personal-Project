<?php
    $pages = array(
        "./index.php" => "Home",
        "./comments.php" => "Find Me",
        "./gigs.php" => "Gigs",
        "./projects.php" => "Projects",
        "./story.php" => "My Story",
        "./work.php" => "My Work",

    );

    function isActive($linkUrl) {
        $currentUrl = $_SERVER["REQUEST_URI"];
        $currentUrl = ltrim($currentUrl, $currentUrl[0]);
        return $currentUrl === $linkUrl ? 'active' : '';
    } 
?>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
      <a class="navbar-brand" href="index.html"
        >Seb Beats <span id="cursor">| </span></a
      >
      <button
        class="navbar-toggler"
        type="button"
        data-toggle="collapse"
        data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent"
        aria-expanded="false"
        aria-label="Toggle navigation"
      >
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">

         
          
          <?php
                foreach($pages as $url=>$title) {
                    $isActive = isActive($url);

                    $link = "
                    <li class='nav-item active'>
                    <a class='nav-link' href='$url'
                      >$title <span class='sr-only'>(current)</span></a
                    >
                  </li>";
                    

                    echo $link;
                }
            ?>

          <li class="nav-item dropdown">
            <a
              class="nav-link dropdown-toggle"
              href="#"
              id="navbarDropdown"
              role="button"
              data-toggle="dropdown"
              aria-haspopup="true"
              aria-expanded="false"
            >
              Grading
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="../../references.php"
                >References</a
              >
              <a class="dropdown-item" href="../../rubric.php"
                >Rubrics</a
              >
            </div>
          </li>
        </ul>
      </div>
    </nav>