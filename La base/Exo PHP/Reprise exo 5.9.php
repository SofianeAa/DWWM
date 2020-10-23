<?php

$prix = 1;                                                                                                  // Variable qui va être le prix de l'article entré
$somme = 0;                                                                                                 // Variable utilisée pour faire la somme des prix

while ($prix != 0) {
    $prix = readline ("Entrez le prix de l'article : ");
    $somme = $somme + $prix;                                                                                // La variable prix va changer a chaque nouvelle boucle, 
}                                                                                                           // donc j'utilise la variable somme pour additionner
                                                                                                            // chaque nouveau prix avec les précédents


                                                                                                            
$paiement = readline ("Entrez la somme payée :");

while ($paiement < $somme) {
    echo "Le paiement n'est pas bon, ";
$paiement = readline ("entrez la bonne somme payée :");
}

    $rendu = $paiement - $somme;


    $r10 = $rendu % 10;
    $n10 = ($rendu - $r10) / 10;
    $r5 = $r10 % 5;
    $n5 = ($rendu - $n10 * 10 - $r5) / 5;
    $r1 = $r5;

echo "Vous devez rendre $n10 billets de 10, $n5 billets de 5 et $r1 pièces de 1 euro.";