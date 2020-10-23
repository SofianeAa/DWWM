<?php

/* Demander un entier à l'utilisateur + Phrase */

function demanderEntierPhrase ($phrase)
{
    do
    {
        do
        {
            $nb = readline ($phrase);
        }
        while (!is_numeric($nb));
    }
    while (!is_int($nb * 1));
return $nb;
}


function factorielle($nb) //calcule la factorielle d'un nombre
{
    $facto = 1;

/* Calculer la factorielle */
    for ($i = 2; $i <= $nb; $i++)
    {
        $facto = $facto * $i; //$facto *=$i;
    }
    return $facto;
}

/* Si je faisais sans function 

$n = readline ("Nombre de chevaux parant : ");
$p = readline ("Nombre de chevaux joués :");

*/


/* Avec la fonction faite plus haut */

$n = demanderEntierPhrase ("Nombre de chevaux partant : ");
$p = demanderEntierPhrase ("Nombre de chevaux joués : ");

$x = factorielle ($n) / factorielle ($n - $p);
$y = factorielle ($n) / (factorielle ($p) * factorielle ($n-$p));

echo "Dans l'ordre : une chance sur $x de gagner. \nDans le désordre : une chance sur $y de gagner.";

