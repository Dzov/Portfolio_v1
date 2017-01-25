    <header class="flex">
      <img src="img/octopus.svg" id="logo">
      <nav class="flex">
        <ul class="navList flex flexRow">
          <li class="navList_Item">
            <a href="index.php" <?php if ($activePage == 'Home') { echo "class = 'activePage'" ;} ?> >Home</a>
          </li>
          <li class="navList_Item">
            <a href="competences.php" <?php if ($activePage == 'Compétences') { echo "class = 'activePage'" ;} ?> >Compétences</a>
          </li>
          <li class="navList_Item">
            <a href="experience.php" <?php if ($activePage == 'Expérience') { echo "class = 'activePage'" ;} ?> >Expérience</a>
          </li>
          <li class="navList_Item">
            <a href="formation.php" <?php if ($activePage == 'Formation') { echo "class = 'activePage'" ;} ?> >Formation</a>
          </li>
          <li class="navList_Item">
            <a href="loisirs.php" <?php if ($activePage == 'Loisirs') { echo "class = 'activePage'" ;} ?> >Loisirs</a>
          </li>
        </ul>
      </nav><!-- /nav -->
    </header> <!-- /HEADER -->


