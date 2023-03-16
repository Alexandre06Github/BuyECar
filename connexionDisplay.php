<?php require_once __DIR__ . "/connexionClass.php"; ?>

<?php

$monVisiteur = new Visiteur(
    $_POST["nom"],
    $_POST["prenom"],
    $_POST["email"],
    $_POST["motDePasse"],
);
?>

<h2>Votre Profil</h2>

<li>Nom :
    <?php echo $monVisiteur->getNom(); ?>
</li>
<li>Prénom :
    <?php echo $monVisiteur->getPrenom(); ?>
</li>
<li>Email :
    <?php echo $monVisiteur->getEmail(); ?>
</li>

<?php
$dbh = new PDO("mysql:dbname=BuyECar;port=8889", "root", "root");
$result = $dbh->prepare('SELECT * FROM Visiteurs WHERE nom=:nom AND prenom=:prenom AND email=:email AND motDePasse=:motDePasse');

$query->bindvalue(['getNom()', $PDO::PARAM_STR]);
$query->bindvalue(['getPrenom()', $PDO::PARAM_STR]);
$query->bindvalue(['getEmail()', $PDO::PARAM_STR]);
$query->bindvalue(['getPassword()', $PDO::PARAM_STR]);

$results = $query->fetchAll(); ?>