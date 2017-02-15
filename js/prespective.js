/*
Created by JIANFENG WU
2017.01.20
Profile image prespective function
*/

function rotate (event)
{
    var x = event.clientX;
    var y = event.clientY;
    var w = window.innerWidth;
    var h = window.innerHeight;
    var midpoint = w / 2;
    var midpointH = h / 2;
    var pos = x - midpoint;
    var posH = midpointH -y;
	  var val = (pos / midpoint) * 20;
    var valH = (posH / midpointH) * 10;

    if(val > 4 || val < -4){
      val = (val > 0) ? 4 : -4;
    }else{
      val = val;
    }

    if(valH > 8 || valH < -8){
      valH = (val > 0) ? 8 : -8;
    }else{
      valH = valH;
    }

	var logo = document.getElementById("pImg");
	logo.style.transform = "perspective(550px) rotateY(" + val + "deg) rotateX("+ valH + "deg)";
}

document.addEventListener("mousemove", function (event)
{
	rotate (event)
}, false);
