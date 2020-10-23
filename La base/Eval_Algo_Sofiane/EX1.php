<?php

//Nom du programme en en-tête
echo "\t CALCUL D'UN CERCLE\n";

//Je demande à l'utilisateur la surface de son cercle
$rayon = readline("Quel est le rayon du cercle : ");

//Je fais les différents calcules pour trouver la circonférence et la surface

$circonf = 2 * pi() * $rayon;
$surface = pi() * $rayon ** 2;

// Je donne les deux réponses souhaités à l'utilisateur
echo "Sa circonférence est de \t : $circonf \n";
echo "Sa surface est de \t\t : $surface \n";

//On propose alors de poursuivre les calcules

$suite = readline("Voulez-vous faire un autre calcul (O/N) :");

//Nous entrons dans une boucle while tant que l'utilisateur répondra "O"

while ($suite == "O") {

    $rayon = readline("Quel est le rayon du cercle : ");

    //Je fais les différents calcules pour trouver la circonférence et la surface

    $circonf = 2 * pi() * $rayon;
    $surface = pi() * $rayon ** 2;

    // Je donne les deux réponses souhaités à l'utilisateur
    echo "Sa circonférence est de \t : $circonf \n";
    echo "Sa surface est de \t\t : $surface \n";

    $suite = readline("Voulez-vous faire un autre calcul (O/N) :");

}

//Nous sortons de la boucle while et c'est la fin du programme !
echo "Au revoir et à bientôt !";
