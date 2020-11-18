<?php

include "head.php";
include "header.php";
include "ListeEmploye.php";

echo '<div class="ligne">';

for ($i = 0; $i < count($e); $i++) {
    echo '  <div class="employe colonne"><a href=detail.php?id='.$e[$i]->getIdEmploye().' ">
        <div class="nom"> ' . $e[$i]->getNom() . ' ' . $e[$i]->getPrenom() . '</div></a>
        <div class="
        </div>';
}
