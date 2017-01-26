<!DOCTYPE html>
<html>

  <head>
    <?php include 'head.php' ; ?>
    <link type="text/css" href="./css/formation.css" rel="stylesheet">
  </head>

  <body>
    <?php $activePage = "formation"; ?>
    <?php include 'header.php'; ?>

    <main class="flex">
      <section class="flex">
        <article id="simplonArticle" class="flex flexColumn">
          <img id="simplonLogo" src="img/simplon.png">
          <figcaption id="simplonDescription">
            <h1>Simplon</h1>
            <p>
              Formation développeur web intensive sur 6 mois. Développement front-end avec HTML5, CSS3 et JavaScript, et back-end avec PHP. Programmation d'objets connectés, gestion de projet et conception d'interfaces. 
            </p>
          </figcaption>
        </article>

        <article id="lcArticle" class="flex flexColumn">
          <img id="lcLogo" src="img/lc.jpg">
          <figcaption id="lcDescription">
            <h1>Lewis and Clark College</h1>
            <p>
              Bachelor's degree en psychologie avec spécialisation en neurosciences.
            </p>
          </figcaption>
        </article>
      </section>
    </main>

    <?php include "footer.php" ?>
    <script src="./js/script.js" type="text/javascript" charset="utf-8"></script>
  </body>


</html>