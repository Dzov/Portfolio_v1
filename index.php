
<?php 

  $getContent = $_GET["content"];
  $securePages = array("home", "competences", "experience", "formation", "loisirs" );
  $cssfile = "home"; 
  // $navItem_Names = array('Home', 'Compétences', "Expérience", "Formation", "Loisirs"); 



// links to css file that correponds to url 
// =====Used in <head> - skeleton.php=====
  if (in_array($getContent, $securePages)) {
      $cssfile = $getContent; 
    }


//Loops through the array SecurePages to display the nav items with corresponding link and name. Activates class to highlight link that correponds to url(function activePage). 
// =====Called in <nav <ul>> - skeleton.php=====
  function navItem() {
    global $securePages; 

    for ($i = 0; $i < count($securePages); $i++) {
      echo "<li class='navList_Item'>
              <a href='index.php?content=" .  $securePages[$i] . "'  class='" . activePage($securePages[$i]) . "' >" . $securePages[$i] . "</a>
            </li>";
    }
  }

// adds class active to the nav link that corresponds to url 
// =====Called in navItem() - index.php=====
  function activePage ($page) {
    global $getContent; 

    if ($getContent == $page) {
      return "active";
    }
  } 


// Loops through the securePages array to check whether requested url is safe before displaying the corresponding main content 
// =====Called as <main> - skeleton.php=====
  function mainContent() {
    global $getContent;
    global $securePages; 

    if (in_array($getContent, $securePages)) {
      include $getContent . '.php'; 
    }
    elseif ($getContent == NULL) {
      include "home.php"; 
    }
    else { 
      include "error.php";
    }
  }



    include "skeleton.php"; 
?>
