<?php

function ChargerClasse($classe)
{
    if (file_exists(("PHP/CONTROLLER/" . $classe . ".Class.php")))
    {
        require "PHP/CONTROLLER/" . $classe . ".Class.php";
    }
    if (file_exists("PHP/MODEL/" . $classe . ".Class.php"))
    {	
        require "PHP/MODEL/" . $classe . ".Class.php";
    }
}
spl_autoload_register("ChargerClasse");


function AfficherPage ($page)
{
    $chemin = $page[0];
    $nom = $page[1];
    $titre = $page[2];

    include 'PHP/VIEW/head.php';
    include 'PHP/VIEW/header.php';
    include $chemin . $nom . '.php';
    include 'PHP/VIEW/Footer.php';
}

DbConnect::Init();


$routes = [
    "default" => ["PHP/VIEW/", "liste", "Liste de produits"],
    "liste" => ["PHP/VIEW/", "liste", "Liste de produits"],
    "detail" => ["PHP/VIEW/", "detail", "Détail du produit"],
    "test" => ["PHP/VIEW/", "test", "Détail du produit"]
];

if (isset($_GET["code"]))
{

    $code = $_GET["code"];

    //Si cette route existe dans le tableau des routes
    if (isset($routes[$code]))
    {
        //Afficher la page correspondante
        AfficherPage($routes[$code]);
    }
    else
    {
        //Sinon afficher la page par defaut
        AfficherPage($routes["default"]);
    }

}
else
{
    //Sinon afficher la page par defaut
    AfficherPage($routes["default"]);

}