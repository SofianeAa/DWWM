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
            echo'<div>Modifier un produit</div><form id="formulaire" method="post" action="index.php?page=actionProduits&mode=modifProduit';
            break;
        }
    case "supprimer":
        {
            echo'<div>Supprimer un produit</div><form id="formulaire" method="post" action="index.php?page=actionProduits&mode=delProduit';
            break;
        }
}

if (isset($_GET['id']))
{
    $option = ProduitsManager::findById($_GET["id"]);
} ?>
<input type="hidden" name="idProduit" <?php if (isset($option)) echo 'value="'.$option->getIdProduit().'"'; ?> >

<div>Nom du Produit</div>
<input type="text" name="nomProduit" <?php if (isset($option)) echo 'value="'.$option->getNomProduit().'"'; 
if ($mode=="supprimer" ||$mode=="modifier")echo 'disabled';?>

<?php
    switch($mode){
        case "ajout":
            {
                echo '<input type="submit" value="Ajouter"/>';
            }
        case "modifier":
            {
                echo '<input type="submit" value="Modifier"/>';
            }
        case "supprimer":
            {
                echo '<input type="submit" value="ASupprimer"/>';
            }
    }
?>

<a href="index.php">Retour</a>