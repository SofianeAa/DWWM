var text1=document.getElementById("text1");
text1.addEventListener("click",changecouleur2);

function changecouleur2(){
   if (text1.style.color=="blue"){
       text1.style.color = "pink";
       }
    else {
       text1.style.color = "blue";
       }
    }

var textModif=document.getElementsByClassName("text3");
for (i=0;i<textModif.length;i++){
  textModif[i].addEventListener("click",changecouleur3);
}

function changecouleur3(){
  if (textModif[0].style.color=="blue"){
        for (i=0;i<textModif.length;i++){
          textModif[i].style.color="pink";
          }
       }
  else if (textModif[0].style.color=="pink"){
       for (i=0;i<textModif.length;i++){
          textModif[i].style.color="green";
          }
       }
    else {
       for (i=0;i<textModif.length;i++){
          textModif[i].style.color="blue";
          }
       }
   }
