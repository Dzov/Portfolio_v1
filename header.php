    <header class="flex">
      <img src="img/octopus.svg" id="logo">
      <nav class="flex">
        <ul class="navList flex flexRow">

          <?php 
          // echo "hello";

          function activePage($page) {
            global $activePage; 
            if ($activePage === $page) {
              echo 'activePage';
            }
          }
          ?>

          <!-- <?php  
          // echo "hello";

          // function activePage($page) {
          //   global $activePage; 
          //   if ($activePage === $page) {
          //     echo 'activePage';
          //   }
          // }
          ?> -->

          <li class="navList_Item">
            <a href="index.php" class="<?php activePage('home'); ?>" >Home</a>
          </li>
          <li class="navList_Item">
            <a href="competences.php" class="<?php activePage('competences', $activePage); ?>" >Compétences</a>
          </li>
          <li class="navList_Item">
            <a href="experience.php" <?php if ($activePage == 'experience') { echo "class = 'activePage'" ;} ?> >Expérience</a>
          </li>
          <li class="navList_Item">
            <a href="formation.php" <?php if ($activePage == 'formation') { echo "class = 'activePage'" ;} ?> >Formation</a>
          </li>
          <li class="navList_Item">
            <a href="loisirs.php" <?php if ($activePage == 'loisirs') { echo "class = 'activePage'" ;} ?> >Loisirs</a>
          </li>
        </ul>
      </nav><!-- /nav -->
    </header> <!-- /HEADER -->


