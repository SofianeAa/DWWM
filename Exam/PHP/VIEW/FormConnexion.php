
<?php

echo '
<form method="POST" action="index.php?page=ActionConnexion&typeAction=connexion">
<div class="page form">
<div class="espace"></div>
<div class="contenu colonne">
<div class="ligne centrer">
<div class="label centrer">Pseudo :</div>
<input type="text" name="pseudo" required/>
</div>
<div class="ligne centrer">
<div class="label centrer">Mot de passe :</div>
<input type="password" name="motDePasse" required/>
</div>
</div>
<div class="espace"></div>
</div>
<div>
<div class="espace"></div>
<div class="connect">
<input type="submit" class="bouton centrer ajouter" value="Valider"/>
</div>
<div class="espace"></div>
</div>
</form>';