<?php

// Nom du programme en en-tête
echo "Racine de l'equation du 2nd degré\n\t Y=aX² + bX +C\n\n";

//Nous demandons les différentes valeurs à l'utilisateur pour faire les calcules

$a = readline ("Quelle est la valeur de a : ");
$b = readline ("Quelle est la valeur de b : ");
$c = readline ("Quelle est la valeur de c : ");

// Calcul qui permet de connaitre Delta
$delta = ($b**2) - 4*$a*$c;



// Trois possibilité selon le résultat de delta, et selon ses possibilité, il faut dans deux cas sur trois ajouter de nouveaux calcules pour trouver les racines que nous affichons ensuite
if ($delta < 0) {
    echo "L'équation ne possède pas de racine réelle :\nd = $delta\n\n";
}
elseif ($delta == 0) {
    $deltazero = -($b/2*$a);
        echo "L'équation possède une racine double :\nd= 0\nx1=x2= $deltazero\n\n";
}
elseif ($delta > 0) {
    $x1 = (-$b + sqrt($delta)/2);
    $x2 = (-$b - sqrt($delta)/2);
        echo "L'équation possède 2 racines distinctes : \nd= $delta\nL'équation s'annule pour :\nx1= $x1\nx2= $x2\n\n";
}

// Ligne pour savoir si l'utilisateur souhaite poursuivre
$suite = readline("Voulez-vous continuer ? ");

// Nous entrons dans une boucle while tant que l'utilisateur répondra "O"

while ($suite == "O") {

$a = readline ("Quelle est la valeur de a : ");
$b = readline ("Quelle est la valeur de b : ");
$c = readline ("Quelle est la valeur de c : ");

$delta = ($b**2) - 4*$a*$c;


if ($delta < 0) {
    echo "L'équation ne possède pas de racine réelle :\nd = $delta\n\n";
}
elseif ($delta == 0) {
    $deltazero = -($b/2*$a);
        echo "L'équation possède une racine double :\nd= 0\nx1=x2= $deltazero\n\n";
}
elseif ($delta > 0) {
    $x1 = (-$b + sqrt($delta)/2);
    $x2 = (-$b - sqrt($delta)/2);
        echo "L'équation possède 2 racines distinctes : \nd= $delta\nL'équation s'annule pour :\nx1= $x1\nx2= $x2\n\n";
}

// Ligne pour savoir si l'utilisateur souhaite poursuivre
$suite = readline("Voulez-vous continuer ? ");
}
// Sortie de la boucle while, le programme prend fin !
echo "Au revoir et à bientôt !";