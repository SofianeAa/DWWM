
<?php

$tableau = ProduitsManager::getList(); foreach($tableau as $elt) 
{     
    echo'<div class="liste"><div class="elt">'. $elt->getLibelleProduit().'</div>';
    echo'<div class="btn"><a href="index.php?code=delete&id='.$elt->getIdProduit().'">Supprimer</a></div>';
    echo' <div class="btn"><a href="index.php?code=detail&id='.$elt->getIdProduit().'">Afficher</a></div>';
}   