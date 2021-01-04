<?php

if (isset($_SESSION['user'])&& $_SESSION['user']->getRole()==2){
    $typeAction=$_GET["typeAction"];
    if ($typeAction=="ajout"){
        $eleve=new Eleve(["nomEleve"=>$_POST['nomEleve'],"prenomEleve"=>$_POST['prenomEleve'],"classe"=>$_POST['classe']]);
        EleveManager::add($eleve);
        header("location:index.php?page=ListeEleves");
    } else if ($typeAction=="modifier")
    {
        $eleve=EleveManager::findById($_POST['idEleve']);
        $eleve->setNomEleve($_POST['nomEleve']);
        $eleve->setPrenomEleve($_POST['prenomEleve']);
        $eleve->setClasse($_POST['classe']);
        EleveManager::update($eleve);
        header("location:index.php?page=ListeEleves");
    }else if ($typeAction=="supprimer")
    {
        $idRecherche=$_GET['id'];
        $id=EleveManager::findById($idRecherche);
        EleveManager::delete($id);
        header("location:index.php?page=ListeEleves");
    }


}
else if (isset($_SESSION['user'])&& $_SESSION['user']->getRole()==1){
    header("location:index.php?page=ListeNotes");
}
else{
    header("location:index.php?page=FormConnexion");
}