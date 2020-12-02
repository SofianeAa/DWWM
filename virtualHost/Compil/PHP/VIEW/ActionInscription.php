
<?php

// var_dump($_POST);
if ($_POST['motDePasse'] == $_POST['confirmation'])
{
    // recherche si le pseudo existe
    $uti = UtilisateursManager::findByPseudo($_POST['pseudo']);
    if ($uti == false)
    {
        $u = new Utilisateurs($_POST);
        // var_dump($u);
        //encodage du mot de passe
        $u->setMotDePasse(crypte($u->getMotDePasse()));
        UtilisateursManager::add($u);
        header('refresh:5;url="index.php"');
        echo texte ('Inscrit');
    }
    else
    {
        echo texte ('PseudoPrit');
    }
}
else
{
    echo "la confirmation ne correspond pas au mot de passe";
}

echo '<button> <a href="index.php">'.texte('Retour').'</a></button>';