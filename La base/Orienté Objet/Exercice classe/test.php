<?php

function ChargerClasse($classe)
{
    require $classe . ".Class.php";
}
spl_autoload_register("ChargerClasse");

function afficheTableau($tab)
{
    echo "\n";
    foreach ($tab as $elt) // le tableau est parcouru de la 1ere à la dernière case, les cases sont mises tour à tous dans $elt
    {
        echo $elt->toString() . "\n";
    }
    echo "\n";
}

/*
$date = new DateTime ("2017-07-13");
echo "Embauché le " . $date->format('d-m-Y');
echo "\n";
$dateActu= new DateTime ("now");
echo "Nous sommes le " . $dateActu->format ('d-m-Y');
echo "\n";
$ancien = $dateActu->diff($date);
var_dump ($ancien->format ("%y")*1);
echo $ancien->format ("%y")*1;

$reportinglist = array("e1", "e2", "e3", "e4", "e5");
$nbemploye = array_count_values($reportinglist);
 */
// Tableau agence
$a1 = new Agence(["Nom" => "test1", "Adresse" => "01 boulevard de labas", "Codepostal" => "7427", "Ville" => "gheshe", "Restauration" => "Oui"]);
$a2 = new Agence(["Nom" => "test2", "Adresse" => "12 chemin du boichelou", "Codepostal" => "4810", "Ville" => "jnyfk", "Restauration" => "Non"]);
$a3 = new Agence(["Nom" => "test3", "Adresse" => "31 rue de la kestionvitrepondu", "Code postal" => "1687", "Ville" => "qrezgbwfh", "Restauration" => "Oui"]);
$a4 = new Agence(["Nom" => "test4", "Adresse" => "48 rue c'est la rue", "Codepostal" => "1876", "Ville" => "thjtry", "Restauration" => "Oui"]);
$a5 = new Agence(["Nom" => "test5", "Adresse" => "27 avenue de l'avenue", "Codepostal" => "8791", "Ville" => "jy-drkj", "Restauration" => "Non"]);
// Tableau employe
$e1 = new Employe(["Nom" => "Aarouss", "Prenom" => "Sofiane", "dateEmbauche" => new DateTime("01-12-2020"), "PosteEntreprise" => "Boulanger", "salaire" => "200", "Service" => "Régaleur", "Agence" => $a1]);
$e2 = new Employe(["Nom" => "Courquin", "Prenom" => "Pierre", "dateEmbauche" => new DateTime("12-03-2006"), "PosteEntreprise" => "Chauffagiste", "salaire" => "40", "Service" => "Aucun", "Agence" => $a3]);
$e3 = new Employe(["Nom" => "Rjeb", "Prenom" => "Zied", "dateEmbauche" => new DateTime("15-09-2015"), "PosteEntreprise" => "Coach mental", "salaire" => "30", "Service" => "Service à la personne", "Agence" => $a4]);
$e4 = new Employe(["Nom" => "Balair", "Prenom" => "Quentin", "dateEmbauche" => new DateTime("03-03-2003"), "PosteEntreprise" => "bibliothécaire", "salaire" => "20", "Service" => "No sé", "Agence" => $a1]);
$e5 = new Employe(["Nom" => "Cugny", "Prenom" => "Maxime", "dateEmbauche" => new DateTime("27-08-2007"), "PosteEntreprise" => "Maitre nageur", "salaire" => "50", "Service" => "Secouriste", "Agence" => $a5]);
$listing = [$e1, $e2, $e3, $e4, $e5];
// Commentaire cachant la ligne
asort($listing);
foreach ($listing as $elt) {
    echo $elt->toString() . "\n";
}

$enfant[] = new Enfant(["Nom" => "Premier", "Prenom" => "Alcibiade", "Age" => 12]);
$enfant[] = new Enfant(["Nom" => "Deuxième", "Prenom" => "Walbert", "Age" => 8]);
$enfant[] = new Enfant(["Nom" => "Troisième", "Prenom" => "Maxanne", "Age" => 15]);
$enfant[] = new Enfant(["Nom" => "Quatrième", "Prenom" => "Dianthe", "Age" => 5]);
$enfant[] = new Enfant(["Nom" => "Cinquième", "Prenom" => "Quintilien", "Age" => 19]);

afficheTableau($enfant);
