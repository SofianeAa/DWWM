<?php

function ChargerClasse($classe)
{
    require $classe . ".Class.php";
}
spl_autoload_register("ChargerClasse");

$countF == 0;
$countD == 0;

$j1 = new Joueur(["Sylvain"]);

while (heroVivant() == true) {
    $ennemie == rand(1, 2);
    if (attaqueHero() == true) {
        if ($ennemie == 1) {
            $countF++;
        } else {
            $countD++;
        }
    } else {
        if (bouclier() == !true) {

            if ($ennemie == 1) {
                if (attaqueMonstreFacile() == true) {
                    return subitDegats();
                }
            } else {
                if (attaqueMonstreDifficile() == true) {
                    return subitDegats() + sortMagique();
                }
            }
        }
    }
}

echo "Dommage, vous êtes mort...\nCela dit, vous avez tué $countF monstres facile et $countD monstres difficiles !\nVous avez " . $countF + ($countD * 2) . " points !";
