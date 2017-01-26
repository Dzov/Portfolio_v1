<!DOCTYPE html>
<html>

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Amélie-Dzovinar Haladjian</title>
    <link type="text/css" href="font-awesome-4.7.0/css/font-awesome.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nova+Round" rel="stylesheet">
    <link type="text/css" href="./css/main.css" rel="stylesheet">
  </head>

  <body>
    <header class="flex">
      <img src="img/octopus.svg" id="logo">
      <nav class="flex">
        <ul class="navList flex flexRow">
          <li class="navList_Item">
            <a href="index.php?content=mainIndex.php" <?php if ($_GET["content"] == 'mainIndex.php') { echo "class = 'activePage'" ;} ?> >Home</a>
          </li>
          <li class="navList_Item">
            <a href="index.php?content=competences.php" <?php if ($_GET["content"] == 'competences.php') { echo "class = 'activePage'" ;} ?> >Compétences</a>
          </li>
          <li class="navList_Item">
            <a href="index.php?content=experience.php" <?php if ($_GET["content"] == 'experience.php') { echo "class = 'activePage'" ;} ?> >Expérience</a>
          </li>
          <li class="navList_Item">
            <a href="index.php?content=formation.php" <?php if ($_GET["content"] == 'formation.php') { echo "class = 'activePage'" ;} ?> >Formation</a>
          </li>
          <li class="navList_Item">
            <a href="index.php?content=loisirs.php" <?php if ($_GET["content"] == 'loisirs.php') { echo "class = 'activePage'" ;} ?> >Loisirs</a>
          </li>
        </ul>
      </nav><!-- /nav -->
    </header> <!-- /HEADER -->


    <?php include $_GET["content"]; ?>


    <footer class="flex">
          <p id="credit">Icons made by <a href="http://www.freepik.com" title="Freepik">Freepik</a> and <a href="http://www.flaticon.com/authors/madebyoliver" title="Madebyoliver">Madebyoliver</a> from <a href="http://www.flaticon.com" title="Flaticon">www.flaticon.com</a> is licensed by <a href="http://creativecommons.org/licenses/by/3.0/" title="Creative Commons BY 3.0" target="_blank">CC 3.0 BY</a></p>
          <ul class="footer_List flex">
            <li class="footer_List_Item">
              <a href="mailto:amelie.haladjian@gmail.com"><i class="fa fa-envelope"></i></a>
            </li>
            <li class="footer_List_Item">
              <a href="http://facebook.com"><i class="fa fa-facebook"></i></a>
            </li>
            <li class="footer_List_Item">
              <a href="http://twitter.com"><i class="fa fa-twitter"></i></a>
            </li>
            <li class="footer_List_Item">
              <a href="http://linkedin.com"><i class="fa fa-linkedin"></i></a>
            </li>
          </ul>
    </footer><!-- /Footer -->

    <script src="./js/script.js" type="text/javascript" charset="utf-8"></script>
  </body>

</html>


