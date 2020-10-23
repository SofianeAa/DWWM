<?php

require "FonctionsTableaux.php";
$i1 = demandeEntier ("Entrez la taille du tableau ");
$t = creerTableauAvecTaille ($i1);

afficheTableau ($t);

$max = $t[0];
$pos = 0;

for ($i = 0 ; $i < count ($t) ; $i++) {
    if ($max < $t[$i]) {
        $max = $t[$i];
        $pos = $i;
    }
}

echo "\nLa plus grande valeur du tableau est $max et il est en position $pos";