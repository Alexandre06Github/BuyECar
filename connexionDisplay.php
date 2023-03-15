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