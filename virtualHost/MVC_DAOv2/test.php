<?php

include "./PHP/VIEW/head.php";
include "./PHP/VIEW/header.php";

/* Test Manager */

// on teste la recherche par ID
echo 'recherche id = 1' . '<br>';
$p = ProduitsManager::findById(1);
var_dump($p);


// on teste l'ajout
echo "ajout d'un produit" . '<br>';
$pNew = new Produits(["libelleProduit" => "cahier", "prix" => 5, "dateDeperemption" => '2020-12-31']);
ProduitsManager::add($pNew);


// on teste la mise à jour
echo "on met à jour l'id 1" . '<br>';
$p->setLibelleProduit($p->getLibelleProduit() . ' XL');
ProduitsManager::update($p);
$pRecharge = ProduitsManager::findById(1);
var_dump($pRecharge);

// // // on teste la suppression
echo "on supprime un article" . '<br>';
$pSuppr = ProduitsManager::findById(3);
ProduitsManager::delete($pSuppr);

//on affiche la liste des produits
// echo "Liste des articles" . '<br>';
// $tableau = produitsManager::getList();
// foreach ($tableau as $unProduit)
// {
//     echo $unProduit->toString() . '<br>';
// }

echo "On supprime plusieurs éléments" . '<br>';
$multiSuppr = ProduitsManager::deleteMulti([35,36]);

include "PHP/VIEW/Footer.php";
