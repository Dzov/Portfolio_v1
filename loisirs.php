<!DOCTYPE html>
<html>

  <head>
    <?php include 'head.php' ; ?>
    <link type="text/css" href="./css/loisirs.css" rel="stylesheet">
  </head>

  <body>
  <?php $activePage = "Loisirs"; ?>
  <?php include 'header.php'; ?>

    <main class="flex">
      <ul id ="loisirs" class="flex">
        <li class="loisirItem n1">
          <figure>
            <img src="img/construction.png">
            <!-- <figcaption>Legos</figcaption> -->
          </figure>
        </li>
        <li class="loisirItem n2">
          <figure>
            <img src="img/game.png">
            <!-- <figcaption>Bricolage</figcaption> -->
          </figure>
        </li>
        <li class="loisirItem n3">
          <figure>
            <img src="img/cooking.png">
            <!-- <figcaption>Cuisine</figcaption> -->
          </figure>
        </li>
        <li class="loisirItem n4">
          <figure>
            <img src="img/music.png">
            <!-- <figcaption>Jeux Videos</figcaption> -->
          </figure>
        </li>
        <li class="loisirItem n5">
          <figure>
            <img src="img/travel.png">
            <!-- <figcaption>Séries TV</figcaption> -->
          </figure>
        </li>
        <li class="loisirItem n6">
          <figure>
            <img src="img/tv.png">
            <!-- <figcaption>Neuroscience</figcaption> -->
          </figure>
        </li>
      </ul>
    </main>

    <?php include "footer.php" ?>
    <script src="./js/script.js" type="text/javascript" charset="utf-8"></script>
  </body>

  </body>

</html>