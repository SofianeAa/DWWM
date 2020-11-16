<?php
try {
    $db = new PDO('mysql:host=localhost;dbname=employesfictif;charset=utf8', 'root', '');
}
catch (Exception $e)
{
    if ($e->getCode()==1049)
    {
        echo "Base de données indisponible";
        die();  // permet d'arrêter l'execution
    }
    else if ($e->getCode()==1045)   // erreur identification
    {
        echo "La connexion a échouée";
        die();
    }
    else{
        die('Erreur : ' . $e->getMessage());
    }
}

echo "on est connecté à la base de données";

$requete=$db->query("SELECT i")