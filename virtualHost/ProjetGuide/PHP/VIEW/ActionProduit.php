<?php
$p = new Produits($_POST);
switch ($_GET['mode']) {
    case "ajoutProduit":
        {
            ProduitsManager::add($p);
            break;
        }
    case "modifProduit":
        {
            ProduitsManager::update($p);
            break;
        }
    case "delProduit" : {
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