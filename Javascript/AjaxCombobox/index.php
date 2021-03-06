<?php
function ChargerClasse($classe)
{
    if (file_exists("PHP/CONTROLLER/" . $classe . ".Class.php"))
    {
        require "PHP/CONTROLLER/" . $classe . ".Class.php";
    }

    if (file_exists("PHP/MODEL/" . $classe . ".Class.php"))
    {
        require "PHP/MODEL/" . $classe . ".Class.php";
    }

}
spl_autoload_register("ChargerClasse");
/**
 * Méthode qui permet d'affichre une page en fonction de ces paramètres
 * $page tableau contenant 3 valeurs    le chemein d'acces à la page
 *                                      le nom de la page
 *                                      le titre à afficher sur la page
 */
function AfficherPage($page)
{
    $chemin = $page[0];
    $nom = $page[1];
    $titre = $page[2];
    if ($page[3]) //c'est un appel API
    {
        include $chemin . $nom . '.php';
    }
    else
    {
        include 'PHP/VUE/Head.php';
        include 'PHP/VUE/Header.php';
        // include 'PHP/VIEW/Nav.php';
        include $chemin . $nom . '.php'; //Chargement de la page en fonction du chemin et du nom
        include 'PHP/VUE/Footer.php';
    }
}
// on initialise les paramètres du fichier parametre.ini
Parametre::init();
//on active la connexion à la base de données
DbConnect::init();
session_start();
$routes = [
    "default" => ["PHP/VUE/", "ListeRegion", "Accueil", false],
    "listeRegion" => ["PHP/VUE/", "ListeRegion", "liste des regions", false],
    "listeDepartement" => ["PHP/VUE/", "ListeDepartement", "liste des Departements", false],

];

if (isset($_GET["codePage"]))
{
    $codePage = $_GET["codePage"];

    //Si cette route existe dans le tableau des routes
    if (isset($routes[$codePage]))
    {
        //Afficher la page correspondante
        AfficherPage($routes[$codePage]);
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