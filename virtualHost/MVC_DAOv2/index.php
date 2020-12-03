<?php

include "./PHP/VIEW/head.php";
include "./PHP/VIEW/header.php";

$produits= ProduitsManager::getList();




foreach ($produits as $unProduit)
{
    echo "<div class = 'nomProduit'>";
    echo "<div class ='libelle'>" .$unProduit->getLibelleProduit(). "</div>";
    echo "<div class ='buttons'>";
    echo '<a href="detail.php?id='.$unProduit->getIdProduit().'"> <div class ="buttonDet"> Details </div> </a>';
    echo '<a href=""> <div class ="buttonSuppr"> Modifier </div> </a>';
    echo '<a href="delete.php?id='.$unProduit->getIdProduit().'> <div class ="buttonSuppr"> Suppr </div> </a>';
    echo "</div>";

} 