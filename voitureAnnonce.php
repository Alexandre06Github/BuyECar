<?php require_once __DIR__ . "/voitureClass.php"; ?>

<?php

$maVoiture = new Voiture (
    $_POST["marque"],
    $_POST["modele"],
    $_POST["chevaux"],
    $_POST["annee"],
    $_POST["couleur"],
    $_POST["description"],
    $_POST["prixReserve"],
);
?>

<h2>Votre Annonce</h2>

<li>Marque : <?php echo $maVoiture->getMarque(); ?></li>
<li>Modele : <?php echo $maVoiture->getModele(); ?></li>
<li>Puissance (en ch) : <?php echo $maVoiture->getChevaux(); ?></li>
<li>Mise en circulation : <?php echo $maVoiture->getAnnee(); ?></li>
<li>Couleur : <?php echo $maVoiture->getCouleur(); ?></li>
<li>Description : <?php echo $maVoiture->getDescription(); ?></li>
<li>Prix de réserve : <?php echo $maVoiture->getPrixReserve(); ?></li>