var nav = document.getElementById('navMobileText');
var openNav = document.getElementById('openNav');
var closeNav = document.getElementById('closeNav');


function showNav(){
  nav.style.display='block';
  openNav.style.display='none';
  closeNav.style.display='block';

}

function unshowNav(){
  nav.style.display='none';
  openNav.style.display='block';
  closeNav.style.display='none';

}
