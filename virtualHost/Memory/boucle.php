<?php

for ($i = 0; $i < 4; $i++) {

    echo '<div class="ligne">';

    for ($j = 0;$j < 4; $j++) {

        echo '<div class="espace"></div>
        <div class="case">
            <img class="recto" src="plage.jpg" alt="">
            <img class="verso" src="' . $j+$i . '.jpg" alt="">
        </div>';
    }
    echo '</div>';
}