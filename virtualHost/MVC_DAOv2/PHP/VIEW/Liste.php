
<?php

echo "page de liste";
echo '<a href="index.php?code=detail">accéder au détail</a>';

$listeProduit = ProduitsManager::getList();
echo 'Liste des produits';
$tableau = ProduitsManager::getList(); 
foreach($tableau as $elt) 
{     
    $elt->getLibelleProduit();
}

