<?php
$mode = $_GET['mode'];
switch ($mode) {
    case "ajout":
        {
            echo'<div>Ajouter un produit</div><form id="formulaire" method="post" action="index.php?page=actionProduits&mode=ajoutProduit';
            break;
        }
    case "modifier": 
        {
            echo'<div>Modifier le produit :</div><form id="formulaire" method="post" action="index.php?page=actionProduits&mode=modifProduit';
            break;
        }
    case "supprimer":
        {
            echo'<div>Supprimer le produit :</div><form id="formulaire" method="post" action="index.php?page=actionProduits&mode=delProduit';
            break;
        }
}

if (isset($_GET['id']))
{
    $option = ProduitsManager::findById($_GET["id"]);
} ?>
<input type="hidden" name="idProduit" <?php if (isset($option)) echo 'value="'.$option->getIdProduit().'"'; ?> >

<input type="text" name="nomProduit" <?php if (isset($option)) echo 'value="'.$option->getNomProduit().'"'; 
if ($mode=="supprimer")echo 'disabled';?>
<input type="text" name="CouleurProduit" <?php if (isset($option)) echo 'value="'.$option->getCouleurProduit().'"'; 
if ($mode=="supprimer")echo 'disabled';?>
<input type="text" name="PoidsProduit" <?php if (isset($option)) echo 'value="'.$option->getPoidsProduit().'"'; 
if ($mode=="supprimer")echo 'disabled';?>

<?php
    switch($mode){
        case "ajout":
            {
                echo '<input type="submit" name="Ajouter" value="Ajouter"/>';
            }
        case "modifier":
            {
                echo '<input type="submit" name="Modifier" value="Modifier"/>';
            }
        case "supprimer":
            {
                echo '<input type="submit" name="Supprimer" value="Supprimer"/>';
            }
    }
?>

<a href="index.php">Retour</a>