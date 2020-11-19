<body class="colonne">
    <header>
        <div class="logoAfpa"> 
        <?php
        if (file_exists("IMG/Logo_Afpa.jpg")) {
            echo '<img src="IMG/Logo_Afpa.jpg" alt=" Logo Afpa">';
        } else {
            echo   '<img src="../../IMG/Logo_Afpa.jpg" alt="Logo Afpa">';
        }
        ?>
        </div>
        <div class="titreEspace"></div>
        <div class="titre">Gestion des produits</div>
        <div></div>
        <div class="titreEspace"></div>
    </header>