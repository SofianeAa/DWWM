<header>
		<div class="logo">
			<a href="index.php?page=ListeProviseur"><img src="IMG/icone.jpg" alt="image"></a>
		</div>
		<div class="titreHeader centrer colonne">
			<div class="espaceH"></div>
			<div class="titre centrer">
				<h1>GESTION DES NOTES</h1>
			</div>
			<div class="soustitre">
				<h2><?php echo $titre ?></h2>
			</div>
			<div class="espaceH"></div>
		</div>
		<div class="infos colonne">
			<?php
			if (isset($_SESSION['user'])&& $_SESSION['user']->getRole()==2)
			{ echo'
			<div class="matiere centrer">Proviseur</div>
			<a href="index.php?page=ActionConnexion&typeAction=deconnexion"><div class="bouton centrer">Deconnectez-vous</div></a>';
			} else if (isset($_SESSION['user'])&& $_SESSION['user']->getRole()==1)
			{
				$id=MatiereManager::findById($_SESSION['user']->getIdMatiere());
				echo '
				<div class="nom centrer">'.$_SESSION['user']->getPrenomUtilisateur().' '.$_SESSION['user']->getNomUtilisateur().'</div>
				<div class="matiere centrer">'.$id->getLibelleMatiere().'</div>
				<a href="index.php?page=ActionConnexion&typeAction=deconnexion"><div class="bouton centrer">Deconnectez-vous</div></a>
				';
			} else{
				 echo'<a href="index.php?page=ActionConnexion&typeAction=connexion"><div class="bouton centrer">Connexion</div></a>';
			}
			?>
		</div>
	</header>