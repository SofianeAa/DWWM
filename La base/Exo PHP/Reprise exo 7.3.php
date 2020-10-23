<?php

require "FonctionsTableaux.php";
$i = demandeEntier ("Entrez la taille du tableau ");
$t = creerTableauAvecTaille ($i);

afficheTableau ($t);


$temp = 0;

for ($i = 0 ; $i < intdiv(count($t),2); $i++) {
    $temp = $t[$i];
    $t[$i] = $t[(count($t)-1)-$i];
    $t [(count($t)-1)-$i] = $temp;
}
afficheTableau ($t);