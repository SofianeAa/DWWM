<?php
$p = new Produits($_POST);
switch ($_GET['mode']) {
    case "ajout":
        {
            ProduitsManager::add($p);
            break;
        }
    case "modifier":
        {
            ProduitsManager::update($p);
            break;
        }
    case "supprimer" : {
        ProduitsManager::delete($p);
    break;
    }
}

if (!$erreur) {
    header("location:index.php?page=accueil");
}
else {
    header("refresh:5;url=index.php");
}