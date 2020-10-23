<?php

// J'entre mes différents tableaux contenant les informations sur les avions
$tabavion = array("BOING747", "AIRBUSA380", "LEARJET45", "DC10", "CONCORDE", "ANTONOV32");
$tabcode = array("B0", "AB", "LJ", "DC", "CO", "AN");
$tabvitesse = array("800", "950", "700", "900", "1400", "560");
$tabrayon = array("1000", "12000", "4500", "800", "16000", "2500");

// Je demande à l'utilisateur d'entré un des codes visible dans le tableau de code
$entrée = readline("Entrez le code de l'avion : ");

// Je met une sécurité, pour que l'utilisateur n'utilise que les codes valide
while ($entrée != "B0" && $entrée != "AB" && $entrée != "LJ" && $entrée != "DC" && $entrée != "CO" && $entrée != "AN") {

    echo "Cet avion n'existe pas\n\n";
    $entrée = readline("Entrez le code de l'avion : ");
}

// J'utilise un switch pour directement trouver et afficher les informations lié au code écrit par l'utilisateur
switch ($entrée) {
    case "B0":
        echo "Avion : $tabavion[0] Vitesse : $tabvitesse[0] Rayon d'action : $tabrayon[0]\n\n";
        break;

    case "AB":
        echo "Avion : $tabavion[1] Vitesse : $tabvitesse[1] Rayon d'action : $tabrayon[1]\n\n";
        break;

    case "LJ":
        echo "Avion : $tabavion[2] Vitesse : $tabvitesse[2] Rayon d'action : $tabrayon[2]\n\n";
        break;

    case "DC":
        echo "Avion : $tabavion[3] Vitesse : $tabvitesse[3] Rayon d'action : $tabrayon[3]\n\n";
        break;

    case "CO":
        echo "Avion : $tabavion[4] Vitesse : $tabvitesse[4] Rayon d'action : $tabrayon[4]\n\n";
        break;

    case "AN":
        echo "Avion : $tabavion[5] Vitesse : $tabvitesse[5] Rayon d'action : $tabrayon[5]\n\n";
        break;
}

// Autre demande à l'utilisateur pour voir des statistiques
$stats = readline("Voulez-vous voir d'autre statistiques (O/N) : ");

if ($stats == "O") {
    echo "L'avion qui vol le plus vitese est le CONCORDE à " . max($tabvitesse) . "km/h\nLa moyenne la des rayons d'action est de " . (array_sum($tabrayon) / 6) . " !\n\n";
}

// Demande à l'utilisateur pour savoir si il souhaite poursuivre
$suite = readline("Voulez vous faire une autre recherche (O/N) :\n\n");

// Entrée dans la boucle, tant que l'utilisateur dira "O" la boucle recommencera de la même manière que précédement !
while ($suite == "O") {

    $entrée = readline("Entrez le code de l'avion : ");

    while ($entrée != "B0" && $entrée != "AB" && $entrée != "LJ" && $entrée != "DC" && $entrée != "CO" && $entrée != "AN") {

        echo "Cet avion n'existe pas\n\n";
        $entrée = readline("Entrez le code de l'avion : ");
    }

    switch ($entrée) {
        case "B0":
            echo "Avion : $tabavion[0] Vitesse : $tabvitesse[0] Rayon d'action : $tabrayon[0]\n\n";
            break;

        case "AB":
            echo "Avion : $tabavion[1] Vitesse : $tabvitesse[1] Rayon d'action : $tabrayon[1]\n\n";
            break;

        case "LJ":
            echo "Avion : $tabavion[2] Vitesse : $tabvitesse[2] Rayon d'action : $tabrayon[2]\n\n";
            break;

        case "DC":
            echo "Avion : $tabavion[3] Vitesse : $tabvitesse[3] Rayon d'action : $tabrayon[3]\n\n";
            break;

        case "CO":
            echo "Avion : $tabavion[4] Vitesse : $tabvitesse[4] Rayon d'action : $tabrayon[4]\n\n";
            break;

        case "AN":
            echo "Avion : $tabavion[5] Vitesse : $tabvitesse[5] Rayon d'action : $tabrayon[5]\n\n";
            break;
    }

    $stats = readline("Voulez-vous voir d'autre statistiques (O/N) : ");

    if ($stats == "O") {
        echo "\nL'avion qui vol le plus vitese est le CONCORDE à " . max($tabvitesse) . "km/h\nLa moyenne la des rayons d'action est de " . (array_sum($tabrayon) / 6) . " !\n\n";
    }
    $suite = readline("Voulez vous faire une autre recherche (O/N) :\n\n");
}

// Sortie de la boucle, le programme prend fin
echo "Au revoir et à bientôt !";