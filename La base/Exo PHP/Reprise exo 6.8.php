<?php

require "FonctionsTableaux.php";
$i = demandeEntier ("Entrez la taille du tableau ");
$t = creerTableauAvecTaille ($i);



//Méthode utilisant le for each, plus simple mais pas utilisable partout

foreach ($t as $elem) {
    if ($elem == 0) {
        echo "$elem est nul";
    }

    else if ($elem < 0) {
        echo "$elem est négatif";
    }

    else {
        echo "$elem est positif";
    }
}

// OU


//Méthode utilisant le for, un peu plus complexe

for ($u = 0 ; $u < count($t) ; $u++ ) {
    if ($t[$u] == 0) {
        echo "$t[$u] est nul";
    }

    else if ($t[$u] < 0) {
        echo "$t[$u] est négatif";
    }

    else {
        echo "$t[$u] est positif";
    }
}
