<?php require_once __DIR__ . "/encheresClass.php"; ?>

<?php

$monEnchere = new Encheres(
    $_POST["mise"],

);
?>

<h2>Votre Profil</h2>

<li>Ma mise :
    <?php echo $monVisiteur->getMise(); ?>
</li>