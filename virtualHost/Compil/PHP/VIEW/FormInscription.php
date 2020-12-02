
<form action="index.php?codePage=ActionInscription" method="POST">
<div>
    <label for="nom"><?php echo texte('Nom'); ?></label>
    <input type="text"  name="nom" required />
</div>
<div>
    <label for="prenom"><?php echo texte('Prenom'); ?></label>
    <input type="text" name="prenom" required />
</div>
<div>
    <label for="motDePasse"><?php echo texte('mdp'); ?></label>
    <input type="password" name="motDePasse" required />
</div>
<div>
    <label for="confirmation"><?php echo texte('ConfirmationMdp'); ?></label>
    <input type="password" name="confirmation" required />
</div>
<div>
    <label for="adresseMail"><?php echo texte('Mail'); ?></label>
    <input type="text" name="adresseMail" required />
</div>
<div>
    <label for="role">Role (1 admin 2 user)</label>
    <input type="text" name="role" required />
</div>
<div>
    <label for="pseudo"><?php echo texte('Pseudo'); ?></label>
    <input type="text" name="pseudo" required />
</div>
<button type="submit"><?php echo texte('Valider'); ?></button>
</form>

<?php echo '<button> <a href="index.php">'.texte('Retour').'</a></button>'; ?>