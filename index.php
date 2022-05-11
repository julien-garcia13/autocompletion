<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="css/autocompletion.css"/>
        <title>Autocompletion</title>
    </head>
    <body>
        <!-- Boutton pour le dark mode -->
        <div class="dark-mode">
            <input type="checkbox" class="dark-mode-button" id="darkmode" />
            <label class="button-dark-mode" for="darkmode">
                <div class="ball"></div>
            </label>
        </div>
        <!-- Titre -->
        <div class="titre-zone">
            <p1 class="titre">Apple Products</p1>
        </div>
        <!-- Barre de recherche -->
        <div class="barre-de-recherche">
            <input type="search" name="search_box" placeholder ="Search ..." id="search_box" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" onkeyup="javascript:chargementDonnees(this.value)"/>
            <span id="resultat-de-recherche"></span>
            <div class="search"></div>
        </div>
    </div>
        <script src="js/dark-mode.js"></script> <!-- Script pour le dark mode -->
        <script src="js/autocompletion.js"></script> <!-- Script pour l'autocomplétion (script principal) -->
    </body>
</html>