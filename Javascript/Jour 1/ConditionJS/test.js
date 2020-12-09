// var compteur = 2;

// function maFonction()
// {
//     var myVar = 456;
//     console.log("myVar : "+myVar);
// }

// if (compteur > 1)
// {
//     let myVar2 = "Wazaa !";
//     console.log("myVar2 : "+myVar2);
// }
// maFonction();

//_______________________________________________________________________________//

// var reponse1 = window.prompt("saisissez votre nom");
// var reponse2 = window.prompt("Saisissez votre couleur préférée");

// if (window.confirm("êtes vous un homme ?") == true) {
//     window.alert("Bienvenu "+reponse1+" !");
//  }

//______________________________________________________________________________//

// var reponse = window.prompt("Entrez un nombre");

// var modulo = reponse%2;

// if (modulo == 0)
// {
//     alert("Le nombre est paire")
// }
// else {
//     alert("le nombre est impair")
// }

// var reponse = parseInt(prompt("Entrez votre année de naissance"));

// var age=new Date().getFullYear()-reponse;

// alert(age);


var reponse1 = parseInt(prompt("Entrez une première valeur"));
var operateur = prompt("Entrez un opérateur");
var reponse2 = parseInt(prompt("Entrez une deuxième valeur"));




if (operateur == "/" && reponse1 == 0 || reponse2 == 0)
    alert("Diviseur impossible")
else {
    switch (operateur) {
        case "+":
            var resultat = parseInt(reponse1) + parseInt(reponse2);
            alert(reponse1 + operateur + reponse2 + "=" + resultat);
            break;
        case "-":
            var resultat = parseInt(reponse1) - parseInt(reponse2);
            alert(reponse1 + operateur + reponse2 + "=" + resultat);
            break;
        case "/":
            var resultat = parseInt(reponse1) / parseInt(reponse2);
            alert(reponse1 + operateur + reponse2 + "=" + resultat);
            break;
        default:
            alert("L'opérateur choisit n'est pas valide.")
    }
}