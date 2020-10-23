<?php

require "FonctionsTableaux.php";
$i1 = demandeEntier ("Entrez la taille du tableau ");
$t1 = creerTableauAvecTaille ($i1);

$i2 = demandeEntier ("Entrez la taille du tableau ");
$t2 = creerTableauAvecTaille ($i2);

afficheTableau ($t1);
afficheTableau ($t2);
$calc = 0;

for ($i = 0 ; $i < count($t1) ; $i++){
    for ($j = 0 ; $j < count($t2) ; $j++){
        $calc += $t1[$i] * $t2[$j];
    }
}

echo "\n$calc";