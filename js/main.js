
/*function closenav(){
document.getElementbyId("navs").style.display="none";
document.getElementbyId("content").style.marginLeft="0px";


}*/
function closenav(){
  var x = document.getElementById("side-nav");
  var y = document.getElementById("content");
  if (x.style.width === "none") {
  
      x.style.display="block";
      
    } else {
      x.style.display="none";
    
    }
alert("close");
}
function opennav(){
  var x = document.getElementById("side-nav");
  var y = document.getElementById("content");
  if (x.style.width === "none") {
  
      x.style.display="block";
      
    } else {
      x.style.display="none";
    
    }
alert("open");
}
