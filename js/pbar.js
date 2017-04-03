/*
Created by JIANFENG WU
2017.04.03
Post page progress bar function
*/
var visualH = document.body.clientHeight;
var limit = document.body.offsetHeight - window.innerHeight;
    console.log(limit);
window.addEventListener("scroll", function(event) {

    //clientH = $(document).height();
    clientH = document.body.offsetHeight - window.innerHeight;
    clientY = this.scrollY;
    realH = clientY / clientH;
    realHValue = realH*100;
console.log(clientY);
    $('#pBM').width(realHValue + '%');
});
