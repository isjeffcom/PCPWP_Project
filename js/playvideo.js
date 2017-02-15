/*
Created by JIANFENG WU
2017.02.02
Play Video Function
*/

var vid = document.getElementById("bgv");
var vidDiv = document.getElementById("bgvDiv");
var nav = document.getElementById('nav');
var navMobileText = document.getElementById('navMobileText');

//Play video function, 4 play button
function playVideo(){

  vidDiv.style.display = "block";
  nav.style.display = "none";
  vid.play();

}

//Stop video function, 4 close button
function stopVideo(){

  vidDiv.style.display = "none";
  nav.style.display = "block";
  navMobileText.style.display = "none";
  vid.pause();
  vid.currentTime = 0;

}


//Close video screen when video ended
vid.onended = function() {

      vidDiv.style.display = "none";
      nav.style.display = "block";
      vid.currentTime = 0;

};
