/***********************       Génération aléatoire des cases      ***********************/

var cases = document.getElementsByClassName("case")
var plein = document.getElementsByClassName("plein");
var vide = document.getElementsByClassName("vide");



var nb = [1, 2, 3, 4, 5, 6, 7, 8]
nb=nb.map(p => [p, Math.random()]) 
nb=nb.sort((a, b) => a[1] - b[1])
nb=nb.map(p => p[0])
nb.push(9)
xVide=3
yVide=3

for (i = 0; i < nb.length+1; i++) {
    cases[i].textContent = nb[i];
    cases[i].addEventListener("click", function(e) {
        cliclic(e);
    })
}

/************************       Deplacement des éléments      ************************/

function cliclic(element,i) {
    var boutonClique = element.target;
    var boutonVide = document.getElementsByClassName("vide")[0];
    var xClic = parseInt(element.target.getAttribute("x"));
    var yClic = parseInt(element.target.getAttribute("y"));
    if (boutonClique.getAttribute("class", "case plein")) {
        xVide=xClic;
        yVide=yClic;
        boutonVide.innerHTML=boutonClique.innerHTML;
        boutonClique.setAttribute("class","case vide")
        boutonVide.setAttribute("class","case plein")
    }
}