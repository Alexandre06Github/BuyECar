<?php define('ROOT_PATH', '../'); ?>

<?php

session_start();

if (!isset($_SESSION['email'])) {             // S'il n'y a pas de session alors on ne va pas sur cette page
    header('Location: index.php');
    exit;
}

$afficher_profil = $DB->query("SELECT * FROM Visiteurs WHERE email = ?",  // On récupère les informations de l'utilisateur connecté
array($_SESSION['email']));

$afficher_profil = $afficher_profil->fetch(); 
?>



<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Votre profil</title>
    <link rel="stylesheet" href="../style.css">

</head>

<body>

    <?php include('../navbar.php'); ?>

    <h2>Votre profil</h2>

    <div>Quelques informations sur vous : </div>
    <ul>
        <li>Votre id est : <?= $afficher_profil['id'] ?></li>
        <li>Votre mail est : <?= $afficher_profil['mail'] ?></li>


</body>

</html>
