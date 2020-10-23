<?php

$age = readline ("Entrez votre âge : ");
$sexe = strtoupper (readline ("Entrez votre sexe : "));


while (!is_numeric ($age)) {

    $age = readline ("Entrez votre âge : "); }

while ($sexe != "FEMME" && $sexe != "HOMME") {

    $sexe = strtoupper (readline ("Entrez votre sexe : ")); }

if (($age > 20 && $sexe == "HOMME") or ($age >= 18 && $age <= 35 && $sexe == "FEMME")) {
    echo "Vous êtes imposable";
}

else "Vous n'êtes pas imposable"; 