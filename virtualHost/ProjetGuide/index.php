<?php

require("./Outils.php");

Parametre::init();
DbConnect::init();

session_start();

if (isset($_GET['lang']))
{
    $_SESSION['LANG'] = $_GET['lang'];
}

$lang=isset($_SESSION['lang']) ? $_SESSION['lang'] : 'FR';


$routes=[
    "default"=>["PHP/VIEW", "accueil", "Accueil"],

    "FormulaireInscription"=>["PHP/VIEW/","FormulaireInscription", "Inscription"],
    "FormulaireConnexion"=>["PHP/VIEW/","FormulaireConnexion","Connexion"],
    "ActionConnexion"=>["PHP/VIEW/","ActionConnexion","Erreur"],
];