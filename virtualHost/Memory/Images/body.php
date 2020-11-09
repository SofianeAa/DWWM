<body>

    <div class="images">

<?php

for ($i=1;$i<9;$i++) {
    $tab[]=$i;
    $tab[]=$i;
}

for ($j = 1; $j <= 4; $j++) {

    echo '<div class="ligne">';

    for ($i = 1;$i <= 4; $i++) {

        //on choisit un numero aléatoirement dans le tableau.
        $key = array_rand ($tab);
        $num = $tab[$key];

        //on enlève la valeur du tableau
        array_splice($tab,$key,1);

        echo '<div class="espace"></div>
        <div class="case">
            <img class="recto" src="plage.jpg" alt="">
            <img class="verso" src="' . $num . '.jpg" alt="">
        </div>';
    }
    echo '<div class="espace"> </div></div>';
    echo '<div class="espaceHorizontal"></div>';
}
?>
</body>