<?php

$typeAction = $_GET["typeAction"];

if ($typeAction == "connexion") {
    $p = UtilisateursManager::findByPseudo($_POST['pseudo']);
    if ($p != false) {

        if ($_POST['motDePasse'] == $p->getMotDePasse()) {
            echo "Connexion réussie";
            $_SESSION['user'] = $p;
            if (isset($_SESSION['user'])&& $_SESSION['user']->getRole()==2){
                header("location:index.php?page=ListeProviseur");
            } else{
                header("location:index.php?page=ListeNotes");
            }

        } else {
            echo "Mot de passe incorrect";
            header("location:index.php?page=FormConnexion");
        }
    } else{
        echo "Pseudo Incorrect";
        header("location:index.php?page=FormConnexion");
    }
} 

else if($typeAction=="deconnexion")
{
    session_destroy();
    echo "deconnexion";
    header("location:index.php?page=FormConnexion");
}