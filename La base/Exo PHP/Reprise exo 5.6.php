<?php 

$nb = readline ("Entrez un nombre pour trouver sa factorielle ");                   // S.A, Exercice où on doit afficher la factorielle d'un chiffre aléatoire,
$compteur = 1;                                                                      // sans utiliser la fonction gmp_fact, en plus d'afficher chaque chiffre multiplicateur de la factorielle
$multiplicateur = 1;

    
    while ($compteur <= $nb) {                                                      // Boucle pour trouver la factorielle
    $multiplicateur = $compteur * $multiplicateur;
    $compteur = $compteur + 1;
    }


    for ($i = 1 ; $i <= $nb ; $i++) {                                               // Boucle  for pour permettre d'afficher chaque chiffre supplémentaire à la multiplication
        if ($i < $nb) {                                                             // Condition supplémentaire pour afficher chaque chiffre sans avoir de "x" en trop sur la dernière valeur
            echo (" $i x");
        }
        else {
            echo (" $i =");
        }
    }

echo (" $multiplicateur");                                                           // Résultat final calculé par la boucle While ligne 9