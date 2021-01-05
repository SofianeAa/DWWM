nomElt = document.getElementById("nom");

// Affichage d'un message contextuel pour la saisie du nom
nomElt.addEventListener("focus", function() {
    document.getElementById("aideNom").textContent = "Champ requis";
});

nomElt.addEventListener("blur", function (e) {
    error=0
    document.getElementById("aideNom").textContent = "";
    nomElt.style.border = "3px solid red";
    if ((nomElt.value.charCodeAt(0) > 64 && nomElt.value.charCodeAt(0) < 91) || (nomElt.value.charCodeAt(0) > 96 && nomElt.value.charCodeAt(0) < 123)){
      for (i=0; i<nomElt.value.length;i++){
          if (nomElt.value.charCodeAt(i) != 39 && nomElt.value.charCodeAt(i) != 45 && !(nomElt.value.charCodeAt(i) > 64 && nomElt.value.charCodeAt(i) < 91) && !(nomElt.value.charCodeAt(i) > 96 && nomElt.value.charCodeAt(i) < 123)){
          error=1;
          }
     }
    }
    else{
      error=1;
     }
  if (error==0){
    nomElt.style.border = "3px solid green"
  }
});

Ddn = document.getElementById("ddn");

Ddn.addEventListener("blur", function (e) {
  date=parseInt(Ddn.value.substring(8,10))
  month=parseInt(Ddn.value.substring(5,7))
  year=parseInt(Ddn.value.substring(0,4))
  DateAujourdhui=new Date()
  yearA=DateAujourdhui.getFullYear()
  monthA=DateAujourdhui.getMonth()+1
  dateA=DateAujourdhui.getDate()
  if (yearA-year<5 && !(yearA-year==4 && monthA>month) && !(yearA-year==4 && monthA==month && dateA>date)){
    Ddn.style.border = "3px solid red"
}
else {
  if (Ddn.value.length==0){
    Ddn.style.border="3px solid red"
  }
  else{
    Ddn.style.border = "3px solid green"
  }
}
});

codePostalElt = document.getElementById("codepostal");

codePostalElt.addEventListener("blur", function (e) {
    codePostalElt.style.border = "3px solid red"
    if (codePostalElt.value.length==5){
      for (i=0; i<codePostalElt.value.length;i++){
          if (codePostalElt.value.charCodeAt(i)<58 && codePostalElt.value.charCodeAt(i)>47){
            codePostalElt.style.border = "3px solid green"
          }
     }

    }
});