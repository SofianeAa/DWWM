<?php

$typeAction = $GET["typeAction"];
if ($typeAction == "inscription")
{
    $p = UsersManager::findByPseudo($_POST['pseudoUser']);
    if ($p == false)
    {
        $user = new Users(["nomUser" => $_POST['nomUser'], "prenomUser" => $_POST['prenomUser'], "pseudoUser" => $_POST['pseudoUser'], "mdpUser" => crypte($_POST['mdpUser']), "adresseMailUser" => $_POST['adresseMailUser'], "roleUser" => $_POST['roleUser']]);
        UsersManager::add($user);
        header("location:index.php?page=index.php");
    } 
    else
    {
        echo texte('existedeja');
        header("refresh=3,url=index.php?page=index.php");
    }

} else if ($typeAction == "connexion") 
{
    $p = UsersManager::findByPseudo($_POST['pseudoUser']);
    if ($p != false)
    {
        if (crypt($_POST['mdpUser']) == $p->getMdpUser())
        {
            echo texte('connexionreussi');
            $_SESSION['user'] = $p;
            if (isset($_SESSION['user'])&& $_SESSION['user']->getRoleUser()==3)
            {
                header("location:index.php?page=index.php");
            }
            else
            {
                header("location:index.php?page=index.php");
            }
        }   
        else 
        {
            echo texte('incorrectmdp');
            header("refresh=3,url=index.php?page=index.php");
        }
        
    }
}
else if ($typeAction == "deconnexion")
{
    session_destroy();
    echo texte('deconnexion');
    header("refresh=3,url=index.php?page=index.php");
}