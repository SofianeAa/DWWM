/***********************       Génération aléatoire des cases      ***********************/


var plein = document.getElementsByClassName("plein");
var vide = document.getElementsByClassName("vide");



var nb = [1, 2, 3, 4, 5, 6, 7, 8]
nb=nb.map(p => [p, Math.random()]) 
nb=nb.sort((a, b) => a[1] - b[1])
nb=nb.map(p => p[0])

for (let i = 0; i < nb.length; i++) {
    plein[i].textContent = nb[i];
    plein[i].addEventListener("click", function(e) {
        cliclic(e);
    })
}

/************************       Deplacement des éléments      ************************/

function cliclic(element) {
    var boutonClique = element.target;
    var valeurBouton = boutonClique.textContent;
    // var xClic = parseInt(element.target.getAttribute("cX"));
    // var yClic = parseInt(element.target.getAttribute("cY"));
    // var stylePlein = element.target.style.backgroundColor = "rgb(151, 108, 78)";
    // var styleVide = element.target.style.backgroundColor = "wheat";
    if (boutonClique.getAttribute("class", "plein")) {
        boutonClique.setAttribute("class","vide");
        vide.textContent=
    }



}