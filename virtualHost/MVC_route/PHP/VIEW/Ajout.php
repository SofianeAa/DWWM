<?php

$produits = new Produits(["libelleProduit"=>$_POST["libelleProduit"],"prix"=>intval($_POST["prix"]),"dateDePeremption"=>$_POST["dateDePeremption"]]);
// $produits = new Produits2($_POST);
ProduitsManager::add($produits);


header("Location: index.php");