<?php define('ROOT_PATH', '../'); ?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Se connecter</title>
    <link rel="stylesheet" href="../style.css">

</head>

<body>

    <?php include('../navbar.php'); ?>


    <?php
    session_start();                                    // démarrer une session

    if (isset($_SESSION['user_id'])) {                // vérifier si l'utilisateur est connecté

        echo "Bonjour, utilisateur connecté !";       // afficher le message de bienvenue
    } else {
    ?>


        <h2>Se connecter</h2>
        <form action="connexion1.php" method="POST">

            <input type="text" name="email" id="email" placeholder="email">
            <input type="password" name="password" id="password" placeholder="mot de passe">
            <button>Se connecter</button>

        </form>
    <?php

    }
    ?>



</body>

</html>