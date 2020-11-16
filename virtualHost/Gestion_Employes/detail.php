<?php

include "head.php";
include "header.php";
include "listeEmploye.php";

$idRecherche = $_GET['id'];
foreach ($e as $unEmploye)
{
    if ($unEmploye->getIdEmploye() == $idRecherche)
    {
        echo '<div class="ligne">';

        echo '  <div class="employe colonne">
        <div class="nom"> ' .$unEmploye->getNom().' '.$unEmploye->getPrenom() . '</div>
        <div class="age">' .$unEmploye->getDateEmbauche()->format('Y-m-d') . '</div>
        <div class "unEmploye">'.$unEmploye->getAgence()->getNom().'</div>
        <div class "unEmploye">'.$unEmploye->getFonction().'</div>
        </div>';

        echo '</div>';
    }
}


echo '<a href="page.php">Retour</a>';