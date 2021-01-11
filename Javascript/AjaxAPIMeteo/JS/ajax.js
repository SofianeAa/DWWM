var inputVille = document.getElementById("ville");
var afficheVille = document.getElementById("nomVille");
var temperature = document.getElementById("temps");
var meteo = document.getElementById("meteo");
iconecouleur=document.getElementById("iconecouleur");

inputVille.addEventListener("blur", recupVille);

function recupVille() {
    console.log(inputVille.value);
    afficheVille.innerHTML = inputVille.value;
    //on envoie la requête
    req.open('GET', 'http://api.openweathermap.org/data/2.5/weather?q=' + inputVille.value + ',fr&appid=4f00f8b80c9b221ffd12e64353e31667&units=metric&lang=fr', true);
    req.send(null);
}

// Utilisation de l'Ajax pour appeler l'API et récuperer les enregistrements
var enregs; //contient la reponse de l'API
// on définit une requete
const req = new XMLHttpRequest();
//on vérifie les changements d'états de la requête
req.onreadystatechange = function (event) {
    if (this.readyState == XMLHttpRequest.DONE) {
        if (this.status === 200) {
            // la requete a abouti et a fournit une reponse
            //on décode la réponse, pour obtenir un objet
            reponse = JSON.parse(this.responseText);
            console.log(this.responseText);
                temperature.innerHTML = "Température actuelle : <div class='informationdisplay'>" + reponse.main.temp + "°C</div><i class='blankforiconecouleur'></i>";
                temps.style.display="block";
                iconecouleur=document.getElementsByClassName("blankforiconecouleur");
                if (reponse.main.temp <13){
                    iconecouleur[0].setAttribute("class", "fas fa-thermometer-quarter fa-10x");
                  }
                  else if (reponse.main.temp <20){
                    iconecouleur[0].setAttribute("class", "fas fa-thermometer-half fa-10x");
                  }
                  else {
                    iconecouleur[0].setAttribute("class", "fas fa-thermometer-three-quarters fa-10x");
                  }
                  console.log("Réponse reçue: %s", this.responseText);
                meteo.innerHTML = "Meteo actuelle : <div class='informationdisplay'>" + reponse.weather[0].description + "</div>";
                meteo.style.display="block";

                console.log("Réponse reçue: %s", this.responseText);
        } else {
            console.log("Status de la réponse: %d (%s)", this.status, this.statusText);
        }
    }
}