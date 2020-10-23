<?php

require "FonctionsTableaux.php";
$i = demandeEntier ("Entrez la taille du tableau ");
$t = creerTableauAvecTaille ($i);

afficheTableau ($t);

$moyenne = array_sum($t)/$i;

echo "La moyenne est à $moyenne";

$nb = 0;

for ($i = 0 ; $i < count ($t) ; $i++) {
    if ($t[$i] > $moyenne)
        $nb = $nb+1; // nb++
}

echo "\nLe nombre de note au dessus de la moyenne est de $nb";