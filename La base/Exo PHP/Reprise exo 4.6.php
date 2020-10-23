<?php


    do {
    $c1 = readline ("Résultat du premier candidat : "); 
    }
    while (!is_numeric($c1)); 
    $c1 = ("Résultat du premier candidat : ");
    

    do {
    $c2 = readline ("Résultat du second candidat : ");
    }
    while (!is_numeric($c2)); 
    $c2 = ("Résultat du second candidat : ");
    

    do {
    $c3 = readline ("Résultat du troisième candidat : ");
    }
    while (!is_numeric($c3));
    $c3 = ("Résultat du troisième candidat : ");
    

    do {
    $c4 = readline ("Résultat du quatrième candidat : ");
    }
    while (!is_numeric($c4));
    $c4 = ("Résultat du quatrième candidats : ");


    if ($c1 > 50) {
        echo "Le premier candidat est élu au premier tour !";
    }
        if ($c1 < 12.5) {
            echo "Le premier candidat ne passe pas le premier tour";
        }
        else if ($c1 = $c2 = $c3 = $c4) {
            echo "Il y a égalité parfaite;";
        }
        else if ($c1 < $c2 || $c1 < $c3 || $c1 < $c4) {
            echo "Le premier candidat est défavorable mais passe au second tour";
        }
        else if ($c1 > $c2 && $c1 > $c3 && $c1 > $c4) {
            echo "Le premier candidat se retrouve en ballotage favorable"; }