<?php

require("./Outils.php");

Parametres::init();
DbConnect::init();

session_start();

if (isset($_GET['lang']))
{
    $_SESSION['LANG'] = $_GET['lang'];
}

$lang=isset($_SESSION['lang']) ? $_SESSION['lang'] : 'FR';


$routes=[
    "default"=>["PHP/VIEW/", "accueil", "Accueil"],

    "FormulaireInscription"=>["PHP/VIEW/","FormulaireInscription", "Inscription"],
    "FormulaireConnexion"=>["PHP/VIEW/","FormulaireConnexion","Connexion"],
    "ActionConnexion"=>["PHP/VIEW/","ActionConnexion","Erreur"],
    
    "ListeProduits"=>["PHP/VIEW/", "ListeProduits", "Liste des produits"],
    "FormulaireProduits"=>["PHP/VIEW/", "FormulaireProduits", "Formulaire"],
    "ActionProduit"=>["PHP/VIEW/", "ActionProduit", "Erreur"],
];
if (isset($_GET["page"]))
{
    $page = $_GET["page"];
    //Si cette route existe dans le tableau des routes
    if (isset($routes[$page]))
    {       //afficher la page correspondante
        AfficherPage($routes[$page]);
    }
    else 
    {       //sinon afficher la page par défaut
        AfficherPage($routes["default"]);
    }
}
else {      //sinon afficher la page par défaut
    afficherPage($routes["default"]);
}