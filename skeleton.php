<!DOCTYPE html>
<html>

  <head>
    <meta charset = "utf-8">
    <meta name = "viewport" content = "width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title> Amélie-Dzovinar Haladjian </title>
    <link href = "https://fonts.googleapis.com/css?family=Nova+Round" rel = "stylesheet">
    <link type = "text/css" href = "font-awesome-4.7.0/css/font-awesome.css" rel = "stylesheet">
    <link type = "text/css" href = "./css/main.css" rel = "stylesheet">
    <link type = "text/css" href = "./css/<?php echo $cssfile;?>.css" rel = "stylesheet">
  </head>

  <body>
    <header class = "flex">
      <img src = "img/octopus.svg" id = "logo">
      <nav class = "flex">
        <ul class = "navList flex flexRow">

         <?php
            echo navItem(); 
          ?>
<!--      <li class="navList_Item">
            <a href="index.php?content=home" class="<?php //activePage("home") ?>" >Home</a>
          </li>
          <li class="navList_Item">
            <a href="index.php?content=competences" class="<?php //activePage("competences") ?>" >Compétences</a>
          </li>
          <li class="navList_Item">
            <a href="index.php?content=experience" class="<?php //activePage("experience") ?>" >Expérience</a>
          </li>
          <li class="navList_Item">
            <a href="index.php?content=formation" class="<?php //activePage("formation") ?>" >Formation</a>
          </li>
          <li class="navList_Item">
            <a href="index.php?content=loisirs" class="<?php //activePage("loisirs") ?>" >Loisirs</a>
          </li> -->

        </ul>
      </nav><!-- /nav -->
    </header> <!-- /HEADER -->


    <?php 
      mainContent(); 
    ?>

    <footer class = "flex">
      <p id = "credit" class="selfCenter"> 
        Icons made by <a href = "http://www.freepik.com" title = "Freepik"> Freepik </a> and <a href = "http://www.flaticon.com/authors/madebyoliver" title = "Madebyoliver"> Madebyoliver </a> from <a href = "http://www.flaticon.com" title = "Flaticon"> www.flaticon.com </a> is licensed by <a href = "http://creativecommons.org/licenses/by/3.0/" title = "Creative Commons BY 3.0" target = "_blank"> CC 3.0 BY </a>
      </p>
      <ul class = "footer_List flex">
        <li class = "footer_List_Item">
          <a href = "mailto:amelie.haladjian@gmail.com">
            <i class = "fa fa-envelope"></i>
          </a>
        </li>
        <li class = "footer_List_Item">
          <a href = "https://github.com/Dzov">
            <i class = "fa fa-github"></i>
          </a>
        </li>
        <li class = "footer_List_Item">
          <a href = "http://linkedin.com">
            <i class = "fa fa-linkedin"></i>
          </a>
        </li>
      </ul>
    </footer><!-- /Footer -->

  </body>

</html>


