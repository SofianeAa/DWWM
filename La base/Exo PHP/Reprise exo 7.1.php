<?php

require "FonctionsTableaux.php";
$i = demandeEntier ("Entrez la taille du tableau ");
$t = creerTableauAvecTaille ($i);

afficheTableau ($t);

$consec = true;
$i = 0;

do {

    if ($t[$i]-1 == $t[$i+1] || $t[$i]+1 == $t[$i+1]) {
        $i ++;
    }
    else { 
        $consec = false;
    }
}
while ($consec && $i == count($t)-1);


if ($consec == true) {
    echo "blabla est consécutif";
}
else {
    echo "blalbla n'est pas consécutif";
}






/* possibilité en for, un peu moins optimisé



$c = 0

for ($i = 0 ; $i < count ($t)-1 ; $i++) {

    if ($t[$i]-1 == $t[$i+1] || $t[$i]+1 == $t[$i+1]) {
        $c++;
    }
}
echo var_dump($c);
if ($c == count($t)){
    echo "blabla est consécutif";
}

else {
    echo "blabla n'est pas consécutif";
}

*/