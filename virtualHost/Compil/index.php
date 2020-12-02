
<?PHP
/* Autoload permet de charger toutes les classes necessaires */
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

function AfficherPage($page)
{
    $chemin = $page[0];
    $nom = $page[1];
    $titre = $page[2];

    include 'PHP/VIEW/Head.php';
    include 'PHP/VIEW/Header.php';
    include 'PHP/VIEW/Nav.php';
    include $chemin . $nom . '.php'; //Chargement de la page en fonction du chemin et du nom
    include 'PHP/VIEW/Footer.php';
}

function crypte($mot) //fonction qui crypte le mot de passe
{
    return md5(md5($mot) . strlen($mot));
}

//on active la connexion à la base de données
Parametre::init();
DbConnect::init();
session_start(); // initialise la variable de Session

/***************************GESTION DES LANGUES ******************/
// on recupere la langue de l'URL
if (isset($_GET['lang']))
{
    $_SESSION['lang'] = $_GET['lang'];
}

//on prend la langue de la session sinon FR par défaut
$lang = isset($_SESSION['lang']) ? $_SESSION['lang'] : 'FR';

/**
 * fonction qui ramène le texte dans la bonne langue
 */
function texte($codetexte)
{
    global $lang; //on appel la variable globale
    return TexteManager::findByCodes($lang, $codetexte);
}

/* création d'u tableau de redirection, en fonction du codePage, on choisit la page à afficher */
$routes = [
    "default" => ["PHP/VIEW/", "Accueil", "Accueil"],
    "connexion" => ["PHP/VIEW/", "FormConnection", "Connexion"],
    "ActionConnexion" => ["PHP/VIEW/", "ActionConnection", "Connexion"],
    "inscription" => ["PHP/VIEW/", "FormInscription", "Inscription"],
    "ActionInscription" => ["PHP/VIEW/", "ActionInscription", "Inscription"],


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