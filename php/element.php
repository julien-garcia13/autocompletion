<?php
session_start();
require_once('config.php'); // On appelle la base de données.
$db = new bdd();
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
            <div class="titre-zone">
                <p1 class="titre">Apple Products</p1>
            </div>
            <article>
                <div class="fiche-produit-zone" style="padding-top: 5%;">
                <div class="fiche-produit">
                    <?php foreach ($idProduit as $produit) : ?>
                        <!-- Une boucle qui permet d'afficher les produits dans la BDD. -->
                        <img class="image-produit" src="<?= $produit->img ?>" alt="Card image cap">
                            <h5 class="card-title" style="margin-bottom: 0.5rem;font-size: 68px;"><?= $produit->name ?></h5><br /> <!-- Via cet argument, il va afficher la liste des noms des produits présents dans la BDD. -->
                            <h5 class="card-title" style="margin-bottom: 0.5rem;font-size: 68px;"><?= $produit->year ?></h5><br /> <!-- Via cet argument, il va afficher la liste des années des produits présents dans la BDD. -->
                            <?php endforeach; ?>
                            <!-- Fin de la boucle -->
                        </div>
                    </div>
                    <script src="../js/dark-mode.js"></script> <!-- Script pour le dark mode -->