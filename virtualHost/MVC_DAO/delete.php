<?php


include "./PHP/VIEW/head.php";
include "./PHP/VIEW/header.php";

$idProduits = $_GET["id"];


$pSuppr = ProduitsManager::findById("$idProduits");
ProduitsManager::delete($pSuppr);

header("Location:index.php");