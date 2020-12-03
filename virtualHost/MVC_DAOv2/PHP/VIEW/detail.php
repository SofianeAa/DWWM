<?php
$idProduits = $_GET["id"];

echo "<div class='contenue'>";
$q=ProduitsManager::findById($idProduits);
var_dump($q);
echo "<div class='case'>".$idProduits."</div>";
echo "<div class='case'>".$q->getLibelleProduit()."</div>";
echo "<div class='case'>".$q->getPrix()."</div>";
echo "<div class='case'>".$q->getDateDePeremption()."</div>";
echo "</div>";