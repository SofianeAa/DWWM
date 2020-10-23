<?php

require "FonctionsTableaux.php";
$i1 = demandeEntier ("Entrez la taille du tableau ");
$t1 = creerTableauAvecTaille ($i1);

$t2 = creerTableauAvecTaille ($i1);

afficheTableau ($t1);
afficheTableau ($t2);

for ($i3 = 0; $i3 < count($t1); $i3++) {
    $t3[] = $t1[$i3] + $t2[$i3];
}

afficheTableau ($t3);