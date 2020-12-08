<body>
    <header>
    <div class="titre centrer"><h1>Accueil</h1></div>

    <?php if (isset($_SESSION['user'])) {echo '
        <a href="index.php?page=ActionsUsers&typeAction=deconnexion"
          ><div class="button centrer">Déconnexion</div></a
        >
    ';
} else {
    echo '<a href="index.php?page=FormulaireInscription"
          ><div class="button centrer">Inscription</div></a
        >
        <a href="index.php?page=FormulaireConnexion"
          ><div class="button centrer">Connexion</div></a
        >';
}

?>
      </div>
    </header>