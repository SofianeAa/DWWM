<?php

$prix = readline("Entrez le prix de votre article : ");
$nombre = readline("Entrez le nombre d'article : ");
$tva = readline("Entrez le taux de la TVA : ");

$total = $prix * $nombre * (1 + $tva / 100);

echo "Voici le prix : $total";
