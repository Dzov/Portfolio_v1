
<?php 

  $getContent = $_GET["content"];
  $securePages = array("home", "comp", "experience", "formation", "loisirs" );
  $cssfile = "home"; 
  $navItem_Names = array('Home', 'Compétences', "Expérience", "Formation", "Loisirs"); 



// links to css file that correponds to url 
// =====Used in <head> - skeleton.php=====
  if (in_array($getContent, $securePages)) {
      $cssfile = $getContent; 
    }


//Loops through the array SecurePages to display the nav items with corresponding link and name. Activates class to highlight link that corresponds to url(function activePage). 
// =====Called in <nav <ul>> - skeleton.php=====
  function navItem() {
    global $securePages; 
    global $navItem_Names; 
    $navContent = "";

    for ($i = 0; $i < count($securePages); $i++) {
      $navContent .= "<li class='navList_Item'>
              <a href='index.php?content=" .  $securePages[$i] . "'  id = '" . $securePages[$i] ."link' class = '" . activePage($securePages[$i]) . "' >" . $navItem_Names[$i] . "</a>
            </li>";
    }

    return $navContent;
  }


// adds class active to the nav link that corresponds to url 
// =====Called in navItem() - index.php=====
  function activePage ($page) {
    global $getContent; 

    if ($getContent == NULL && $page == 'home') {
      return "active";
    }
    elseif($getContent == $page ) {
      return "active";
    }
  } 

// adds class active to home link if url == index.php
// =====Called in nav li Home - index.php=====
  // function nullContentCheck() {
  //   global $getContent; 

  //   if ($getContent == NULL) {
  //     echo "active"; 
  //   }
  // }

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
