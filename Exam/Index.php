<?php

require "./Outils.php";

Parametres::init();

DbConnect::init();

session_start();

$routes = [
    "FormConnexion" => ["PHP/VIEW/", "FormConnexion", "Connexion"],
    "ActionConnexion" => ["PHP/VIEW/", "ActionConnexion", "Action Connexion"],
    "ListeEleves" => ["PHP/VIEW/", "ListeEleves", "Gestion des élèves"],
    "FormEleves" => ["PHP/VIEW/", "FormEleves", "Gestion des élèves"],
    "ActionEleves" => ["PHP/VIEW/", "ActionEleves", "Gestion des élèves"],
    "ListeProviseur" => ["PHP/VIEW/", "ListeProviseur", "Proviseur"],
];

if (isset($_GET["page"])) {

    $page = $_GET["page"];

    if (isset($routes[$page])) {
        AfficherPage($routes[$page]);
    } else {
        AfficherPage($routes["default"]);
    }
} else {
    AfficherPage($routes["default"]);
}