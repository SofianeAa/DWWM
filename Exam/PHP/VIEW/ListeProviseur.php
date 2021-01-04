
<?php

if (isset($_SESSION['user'])&& $_SESSION['user']->getRole()==2){
echo'
<div class="page form">
    <div class="espace"></div>
        <div class="contenu colonne">
            <a href="index.php?page=ListeEleves"><div class="bouton centrer">Gérer les élèves</div></a>
            <a href="index.php?page=ListeEnseignants"><div class="bouton centrer">Gérer les enseignants</div></a>
            <a href="index.php?page=ListeNotes"><div class="bouton centrer">Gérer les notes</div></a>
            <a href="index.php?page=ListeMatieres"><div class="bouton centrer">Gérer les matières</div></a>
        </div>
    <div class="espace"></div>
</div>';
}
else{
    header("location:index.php?page=FormConnexion");
}