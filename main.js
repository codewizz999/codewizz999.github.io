
function opennav(){
if(
document.getElementbyId("navs").style.width="250px";
document.getElementById("content").style.marginLeft="250px";
}
/*function closenav(){
document.getElementbyId("navs").style.display="none";
document.getElementbyId("content").style.marginLeft="0px";


}*/
function closenav(){
  var x = document.getElementbyId("navs");
  var y = document.getElementById("content");
  if (x.style.display === "none" && y.style.display==="none") {
    //y.style.display ="block";
      x.style.display = "block";
      y.style.marginLeft="200px";
       x.style.width="250px";
    } else {
      y.style.display ="none";
      x.style.display = "none";
    }

}
function opennav(){
  var x = document.getElementbyId("navs");
  var y = document.getElementById("content");
  if (x.style.display === "none" && y.style.display==="none") {
    //y.style.display ="block";
      x.style.display = "block";
      y.style.marginLeft="200px";
       x.style.width="250px";
    } else {
      y.style.display ="none";
      x.style.display = "none";
    }

}
