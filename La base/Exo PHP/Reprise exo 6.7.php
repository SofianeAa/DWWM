<?php

function affichageTableau($tableau)
{
    for ($i = 0; $i < 9; $i++) {
        echo "[", $tableau[$i], "]" . "\t";
    }
    return $tableau;
}

$somme = 0;
for ($i = 0; $i < 9; $i++) {
    $c = $i + 1;
    do {
        $note = readline("Veuillez entrer la note n°$c :");
        /*Calcul de la somme des notes*/
        $somme = $somme + $note;
    } while (ctype_alpha($note));
    $tableau[$i] = $note;

}

/*Affichage du tableau*/
affichageTableau($tableau);
/*Calcul de la moyenne*/
$moy = $somme / 9;

echo "\nLa moyenne de cet élève est de $moy";