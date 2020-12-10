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

//___//

// var reponse1 = window.prompt("saisissez votre nom");
// var reponse2 = window.prompt("Saisissez votre couleur préférée");

// if (window.confirm("êtes vous un homme ?") == true) {
//     window.alert("Bienvenu "+reponse1+" !");
//  }

//__//

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


// var reponse1 = parseInt(prompt("Entrez une première valeur"));
// var operateur = prompt("Entrez un opérateur");
// var reponse2 = parseInt(prompt("Entrez une deuxième valeur"));




// if (operateur == "/" && reponse1 == 0 || reponse2 == 0)
//     alert("Diviseur impossible")
// else {
//     switch (operateur) {
//         case "+":
//             var resultat = parseInt(reponse1) + parseInt(reponse2);
//             alert(reponse1 + operateur + reponse2 + "=" + resultat);
//             break;
//         case "-":
//             var resultat = parseInt(reponse1) - parseInt(reponse2);
//             alert(reponse1 + operateur + reponse2 + "=" + resultat);
//             break;
//         case "/":
//             var resultat = parseInt(reponse1) / parseInt(reponse2);
//             alert(reponse1 + operateur + reponse2 + "=" + resultat);
//             break;
//         default:
//             alert("L'opérateur choisit n'est pas valide.")
//     }
// }



// var QTECOM = parseInt(prompt("Entrez la quantitée commandée : "));
// var PU = parseInt(prompt("Entrez le prix de l'objet : "))
// var POR = 0;
// var REM = 0;

// var TOT = QTECOM * PU

// if(TOT < 500)
//     {
//     POR = 0.02 * TOT;
//     if (POR < 6)
//         {
//         POR = 6;
//         }
//     }

// if (TOT > 200)
//     {
//     REM = 0.1 * TOT;
//     }
// else if (TOT > 100)
//     {
//     REM=0.05 * TOT;
//     }
    
// TOT= TOT-REM+POR

// alert("Prix à payer : " + TOT + " avec " + POR + " euros de frais de port et " + REM + " de remise." )



// var salaire = parseInt(prompt("Entrez votre salaire en euro"));
// var conjoint = prompt("Êtes-vous marié ?");
// var enfant = parseInt(prompt("Combien d'enfant avez-vous ?"));

// alert("Pour un salarié célibataire, la participation est de 20%");
// alert("Pour un salarié marié, la participation est de 25%");
// alert("Pour un salarié ayant des enfants, la participation est de 10% supplémentaire par enfant");
// alert("La participation est plafonnée à 50%");
// alert("Si le salaire est inférieur à 1200€, la participation est majorée de 10%");


// if (conjoint="oui") {
//     pourcentage = 0.75
// }
// else if (conjoint="non") {
//     pourcentage = 0.8
// }
// switch (enfant) {
//     case 1:
//         pourcentage = pourcentage-0.1;
//         break;
//     case 2:
//         pourcentage = pourcentage-0.2;
//         break;

//     default:
//         pourcentage = pourcantage-0.3;
//     break;
// }
// if (pourcentage <0.5) {
//     pourcentage = 0.5;
// }
// else if (salaire < 1200) {
//     pourcentage = 0.6;
// }

// participation = salaire*pourcentage;

// alert("le coût de la participation s'élève à "+participation);