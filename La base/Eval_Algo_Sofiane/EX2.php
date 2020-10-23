<?php

// Nom du programme en en-tête
echo "****\t CALCUL D'UN CERCLE *****\n";

// On incrémente différente actions ensemble
do {
    do {
        $nb = readline("Entrez le nombre pour lequel vous voulez la table de multiplication : ");
    } while (!is_numeric($nb)); //Permet de déterminer si la variable est un numérique
} while (!is_int($nb * 1)); //Permet de déterminer si la variable est un entier, en la multipliant par un, on nechange pas sa valeur et on se l'assure

// Nous affichons ensuite la tacle de multiplication

for ($i = 1; $i <= 10; $i++) {
    $calc = ($nb * $i);
    echo "$nb\t x$i\t = $calc\n";
}

// Ligne pour savoir si l'utilisateur souhaite poursuivre
$suite = readline("Voulez-vous continuer ? ");

// Nous entrons dans une boucle while tant que l'utilisateur répondra "O"

while ($suite == "O") {

    do {
        do {
            $nb = readline("Entrez le nombre pour lequel vous voulez la table de multiplication : ");
        } while (!is_numeric($nb)); //Permet de déterminer si la variable est un numérique
    } while (!is_int($nb * 1)); //Permet de déterminer si la variable est un entier, en la multipliant par un, on nechange pas sa valeur et on se l'assure

    // Nous affichons ensuite la tacle de multiplication

    for ($i = 1; $i <= 10; $i++) {
        $calc = ($nb * $i);
        echo "$nb\t x$i\t = $calc\n";
    }
    // Ligne pour savoir si l'utilisateur souhaite poursuivre encore, la boucle se poursuivra jusqu'à ce qu'il stop
    $suite = readline("Voulez-vous continuer ? ");
}
