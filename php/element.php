<?php
require_once('config.php'); // Je lie ma page de configuration de la base de données.
$db = new BaseDeDonnées(); // J'appelle la classe 
$idProduit = $_GET['id']; // Il va récupérer l'ID du produit sélectionné.
$idProduit = $db->query("SELECT * FROM `products` WHERE id = '$idProduit'"); // J'affiche tous les produits, mais seulement celui qu'on a choisi, donc par l'ID.
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="../css/autocompletion.css"/>
        <title>Autocompletion</title>
    </head>
    <body>
        <header> 
            <!-- Boutton pour le dark mode -->
            <div class="dark-mode">
                <input type="checkbox" class="dark-mode-button" id="darkmode" />
                <label class="button-dark-mode" for="darkmode">
                    <div class="ball"></div>
                </label>
            </div>
        </header>
        <main>
            <!-- Titre -->
            <div class="titre-zone2">
                <p1 class="titre">Apple Products</p1>
            </div>
            <article>
                <div class="fiche-produit-zone">
                    <div class="fiche-produit">
                        <?php foreach ($idProduit as $produit) : ?>
                            <!-- Une boucle qui permet d'afficher les produits dans la BDD. -->
                            <img class="image-produit" src="<?= $produit->img ?>" alt="<?= $produit->name ?>">
                            <h5 class="year"><?= $produit->name ?></h5><br /> <!-- Via cet argument, il va afficher la liste des noms des produits présents dans la BDD. -->
                            <h5 class="year">Release date : <?= $produit->year ?></h5><br /> <!-- Via cet argument, il va afficher la liste des années des produits présents dans la BDD. -->
                        <?php endforeach; ?>
                        <!-- Fin de la boucle -->
                    </div>
                </div>
            </article>
        </main>
        <footer class="footer-element">
            <a class="github" href="https://github.com/julien-garcia13/autocompletion"><p2 alt="GitHub Project">GitHub</p2></a>
            <a class="github" href="../index.html"><p2 alt="Back to the search page">Back</p2></a>
        </footer>
        <script src="../js/dark-mode.js"></script> <!-- Script pour le dark mode -->
    </body>
</html>