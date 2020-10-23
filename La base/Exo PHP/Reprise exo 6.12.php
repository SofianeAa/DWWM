<?php

require "FonctionsTableaux.php";
$i1 = demandeEntier ("Entrez la taille du tableau ");
$t1 = creerTableauAvecTaille ($i1);

afficheTableau ($t1);

for ($i = 0 ; $i < count($t1) ; $i++){
    $t2[] = $t1[$i]+1;

}

afficheTableau ($t2);