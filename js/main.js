
/*function closenav(){
document.getElementbyId("navs").style.display="none";
document.getElementbyId("content").style.marginLeft="0px";


}*/
function closenav(){
  var x = document.getElementbyId("side-nav");
  var y = document.getElementById("content");
  if (x.style.width === "0" && y.style.marginLeft==="0") {
  
      y.style.marginLeft ="200px";
       x.style.width="200px";
    } else {
      x.style.width="0";
      y.style.marginLeft="0px";
    }

}
function opennav(){
  var x = document.getElementbyId("side-nav");
  var y = document.getElementById("content");
  if (x.style.width === "0" && y.style.marginLeft==="0") {
  
      y.style.marginLeft ="200px";
       x.style.width="200px";
    } else {
      x.style.width="0";
      y.style.marginLeft="0px";
    }

}
alert("welcome to codwizz");
