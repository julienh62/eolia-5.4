/*le bouton icon va permuter nav et navresponsive au click */
function myFunction() {
 var x = document.getElementById("navbar");
 if (x.className === "nav") {
     x.className += " responsive";

 } else {
     x.className = "nav";
 }
}
