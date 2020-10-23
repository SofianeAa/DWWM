<?php

require "FonctionsTableaux.php";
$i = demandeEntier("Entrez la taille du tableau ");
$t = creerTableauAvecTaille($i);

$somme = 0;
foreach ($t as $elt) {
    $somme += $elt; // equivaut à somme = somme + elt
}

echo "La somme vaut " . $somme;
