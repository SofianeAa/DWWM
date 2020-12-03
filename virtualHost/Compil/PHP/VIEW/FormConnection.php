<form action="index.php?codePage=ActionConnection" method="post">
    <div>
        <label for="pseudo"><?php echo texte('Pseudo'); ?></label>
        <input type="text" name="pseudo" required />
    </div>
    <div>
        <label for="motDePasse"><?php echo texte ('mdp'); ?></label>
        <input type="password" name="motDePasse" required />
    </div>
    
    <button type="submit"><?php echo texte ('Valider'); ?></button>
</form>
<!-- <a href="index.php?codePage=inscription">s'inscrire</a> -->
<?php echo '<button> <a href="index.php">'.texte('Retour').'</a></button>'; ?>