var prixU1 = document.getElementById('prixU1');
var qte1 = document.getElementById('qte1');
var prix1 = document.getElementById('prix1');
var prixU2 = document.getElementById('prixU2');
var qte2 = document.getElementById('qte2');
var prix2 = document.getElementById('prix2');

var lesInputs = document.getElementsByTagName("input");
for(let i=0;i<lesInputs.length;i++)
{
    lesInputs[i].addEventListener("change",calcul);
}

function calcul(){
    prix1.value = prixU1.value*qte1.value;
    prix2.value = prixU2.value*qte2.value;
    }