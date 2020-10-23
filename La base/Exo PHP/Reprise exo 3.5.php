<?php
$nombreA = readline("Entrez un nombre a :");
$nombreB = readline("Entrez un nombre B :");
if ($nombreA == 0 or $nombreB == 0) {
    echo "Leur produit est nul.";
} else {
    if (($nombreA > 0 && $nombreB > 0) || ($nombreA < 0 && $nombreB < 0)) {

        echo "Leur produit est positif.";
    } else {
        echo "Leur produit est négatif.";
    }

}
