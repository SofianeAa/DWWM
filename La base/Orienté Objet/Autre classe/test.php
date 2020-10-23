<?php

function ChargerClasse($classe)
{
    require $classe.".Class.php";
}
spl_autoload_register("ChargerClasse");

$f = new Fille (["Nom" => "tata"]);
var_dump ($f);
$f->Afficher();