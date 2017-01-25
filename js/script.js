//  Problem: home link is always active even when on a different page 
// Solution: add active class to active link and remove active class from sibling links 

// Select the nav items
var navItem = document.getElementsByClassName("navList_Item");

// fonction qui ajoute .activePage au lien sur lequel on click et 
// enleve .activePage aux autres liens
var makeActive = function () {

  console.log('hello');

// remove class active from siblings 
  for (var i = 0; i < navItem.length; i++) {
    navItem[i].classList.remove('activePage');
  }
  this.classList.add('activePage');
}
 

for (var i = 0; i < navItem.length; i++) {
  navItem[i].addEventListener('click', makeActive);
}

