<?php
include "./Employe.class.php";
try {
    $db = new PDO('mysql:host=localhost;dbname=employesfictif;charset=utf8', 'root', '');
}
catch (Exception $e)
{
    if ($e->getCode()==1049)
    {
        echo "Base de données indisponible";
        die();  // permet d'arrêter l'execution
    }
    else if ($e->getCode()==1045)   // erreur identification
    {
        echo "La connexion a échouée";
        die();
    }
    else{
        die('Erreur : ' . $e->getMessage());
    }
}

echo "on est connecté à la base de données";


/********************************************/
/*****          REQUETE SIMPLE          *****/
/********************************************/
// $requete=$db->query("SELECT idEmploye, nomEmploye, prenomEmploye, ageEmploye FROM employes where idEmploye=1");
// $reponse = $requete->fetch(PDO::FETCH_ASSOC);
// var_dump($reponse);
// $emp = new Employe($reponse);
// var_dump($emp);


/********************************************/
/*****  REQUETE AVEC RESULTAT MULTIPLE  *****/
/********************************************/

// $requete=$db->query("SELECT idEmploye, nomEmploye, prenomEmploye, ageEmploye FROM employes ");
// while ($donnees = $requete->fetch(PDO::FETCH_ASSOC))
// {
//     var_dump($donnees);
//     $employes[] = new Employe($donnees);
// }
// var_dump($employes);


/********************************************/
/*****      REQUETE d'AJOUT SIMPLE      *****/
/********************************************/
// $q = $db->exec('INSERT INTO employes(nomEmploye, prenomEmploye, ageEmploye) VALUES("Aarouss", "Sofiane", 23)');
// var_dump($q);



/********************************************/
/*****     REQUETE d'AJOUT PARAMETRE    *****/
/********************************************/

//on crée un objet (parrapportalaclass)
// $emp = new Employe(["nom"=>"Ohmy","prenom"=>"Dayum", "age"=>30]);
// var_dump($emp);

// //on prepare la requete
// // :nom est une variable SQL (rapportalabazdedoné)
// $q = $db->prepare('INSERT INTO employes(nomEmploye, prenomEmploye, ageEmploye) VALUES(:nomEmploye, :prenomEmploye, :ageEmploye)');
// var_dump($q);

// // Assignation des valeurs pour le nom, le pr�nom.
// $q->bindValue (':nomEmploye', $emp->getNom());
// $q->bindValue(':prenomEmploye', $emp->getPrenom());
// $q->bindValue (':ageEmploye', $emp->getAge());
// var_dump($q);

// // Ex�cution de la requ�te.
// $reponse = $q->execute();
// var_dump($reponse);


/********************************************/
/*****     REQUETE d'AJOUT COMPOSEE     *****/
/********************************************/

//on crée un objet
$emp = new Employe(["nom"=>"Apollos", "prenom"=>"Hester", "age"=>23]);

//on prepare la requete
// :nom est une variable SQL
$q = $db->prepare('INSERT INTO employes(nomEmploye, prenomEmploye, ageEmploye) VALUES("'.$emp->getNom().'","'.$emp->getPrenom().'","'.$emp->getAge().'")');

// Ex�cution de la requ�te.
$reponse = $q->execute();
var_dump($reponse);