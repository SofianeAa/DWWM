<?php
$produits = ProduitsManager::getList();

echo '<a href="index.php?page=formulaireProduits&mode=ajout">Ajouter</a>';

foreach ($produits as $unProduit)
{
    echo $unProduit->getNomProduit();
    ?>
    <a href="index.php?page=FormulaireProduits&mode=modifier&id=<?php echo $unProduit->getIdProduit();?>">Modifier</a>

    <a href="index.php?page=FormulaireProduits&mode=supprimer&id=<?php echo $unProduit->getIdProduit();?>">Supprimer</a>

<?php } ?>