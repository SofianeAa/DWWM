<?php

function inversionMot ($mot) 
{
    $taille = strlen($mot);
    if (strlen($mot == 1)) 
    {
        return $mot;
    }
    else 
    {
        return substr ($mot, $longueur - 1).inverseMot(substr($mot,0,$longueur-1));
    }
}