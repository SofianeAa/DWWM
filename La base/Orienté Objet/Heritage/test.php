<?php

function ChargerClasse($classe)
{
    require $classe . ".Class.php";
}
spl_autoload_register("ChargerClasse");

$rec1 = new Rectangle(["Longueur" => 50, "Largeur" => 60]);
echo $rec1->afficherRectangle();



$triangle1 = new TriangleRectangle(["Base" => 20, "Hauteur" => 30]);
echo $triangle1->afficherTriangle();



$cercle1 = new Cercle (["Diametre" => 17]);
echo $cercle1->afficherCercle();


