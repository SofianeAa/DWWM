<?php
$genre=strtoupper (readline ("Votre genre 'F' ou 'H' :"));
$age= readline ("Entrez votre âge : ");

while ($genre != "F" && $genre != "H") {
    echo "Recommencez. ";
$genre=strtoupper (readline ("Votre genre 'F' ou 'H' : ")); }

while (!ctype_digit ($age)) {
    echo "Recommencez.";
$age=(readline ("Entrez votre âge : ")); }


if (($genre=="H" && $age>20) or ($genre=="F" && $age>18 && $age<35)){
    echo "Vous êtes imposable.";

} 
else
    echo "Vous n'êtes pas imposable.";