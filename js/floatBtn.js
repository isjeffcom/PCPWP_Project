window.addEventListener("scroll", function(event) {
    var fBtn = document.getElementById('floatBtn');
    var top = this.scrollY;
    if(top >= 200){
      fBtn.style.animationName = 'navOut';
      fBtn.style.opacity = '1';
    }

    if(top <= 200){
      fBtn.style.animationName = 'navOutRe';
      fBtn.style.opacity = '0.1';
    }
    //console.log(top);

}, false);



function back2top() {
  var t=0;
  var an = setInterval(frame, 5); //Set a timer abd run this function in every 5 mm second
  function frame(){ //Animation Function
    if(t == 153){
      clearInterval(an);  //clear animation
    }else{
      t++;
      window.scrollTo(0, 0); //Scroll from left

    }
  }

}
