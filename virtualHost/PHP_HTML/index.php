<?php

include "head.php";
include "header.php";
include "listePersonne.php";

echo '<div class="ligne">';
$compteur = 0;
for ($i=0;$i<count($personnes);$i++) // parcourir tous les noms
{
    echo '  <div class="personne colonne">
        <div class="nom"> '.$personnes[$i]->getNom().' '.$personnes[$i]->getPrenom().'</div>
        <div class="age">'.$personnes[$i]->getAge().'</div>
        </div>';
    $compteur++;
    if ($compteur ==4)      // permet de gérer la présentation Toutes les 4 personnes, on passe à la ligne
    {
        echo '</div>';
        echo '<div class="ligne">';
        $compteur=0;
    }
}
echo '</div>';