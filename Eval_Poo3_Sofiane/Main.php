<?php

function ChargerClasse($classe)
{
    require $classe.".Class.php";
}
spl_autoload_register("ChargerClasse");



$client1= new Client (["nom"=> "Dupont","prenom"=>"Paul", "Compte"=>120, "Livret"=>1200]);
$compte1= new Compte (["numero"=>"N°50236R", "montant"=>120]);
$livret= new Livret (["numero"=>"N°45789L", "montant"=>1200]);

echo "Création du client\n";
echo "Le client ".$client1->getNom(). " " . $client1->getPrenom() . " a " . $compte1->getMontant() . "€ sur son compte " . $compte1->getNumero() . " et ";
echo $livret->getMontant() . "€ sur son livret " . $livret->getNumero();


echo "\nLe client reçoit 50€\n";
echo "Le client ".$client1->getNom(). " " . $client1->getPrenom() . " a " . $compte1->getMontant() . "€ sur son compte " . $compte1->getNumero() . " et ";
echo $livret->getMontant() . "€ sur son livret " . $livret->getNumero();

echo "\nLe client dépense 10€\n";
echo "Le client ".$client1->getNom(). " " . $client1->getPrenom() . " a " . $client1->depenser() . "€ sur son compte " . $compte1->getNumero() . " et ";
echo $livret->getMontant() . "€ sur son livret " . $livret->getNumero();