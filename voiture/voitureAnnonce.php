<?php require_once __DIR__ . "/voitureClass.php"; ?>

<?php define('ROOT_PATH', '../'); ?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>S'inscrire</title>
    <link rel="stylesheet" href="../style.css">

</head>

<body>

    <?php include('../navbar.php'); ?>

<?php

$maVoiture = new Voiture(
    $_POST["annee"],
    $_POST["chevaux"],
    $_POST["couleur"],
    $_POST["dateFin"],
    $_POST["descriptions"],
    $_POST["marque"],
    $_POST["modele"],
    $_POST["prixReserve"],

);

?>

<h2>Votre Annonce vient d'être postée !</h2>

<li>Mise en circulation : <?php echo $maVoiture->getAnnee(); ?></li>
<li>Puissance : <?php echo $maVoiture->getChevaux() . 'ch'; ?></li>
<li>Couleur : <?php echo $maVoiture->getCouleur(); ?></li>
<li>Votre annonce expire le : <?php echo $maVoiture->getDateFin(); ?></li>
<li>Description : <?php echo $maVoiture->getDescriptions(); ?></li>
<li>Marque : <?php echo $maVoiture->getMarque(); ?></li>
<li>Modele : <?php echo $maVoiture->getModele(); ?></li>
<li>Prix de réserve : <?php echo $maVoiture->getPrixReserve() . '€'; ?></li>


<?php

// envoyé les données du formulaire sur php my admin 

$dbh = new PDO("mysql:dbname=BuyECar;port=8889", "root", "root");
$result = $dbh->prepare('SELECT * FROM Cars WHERE annee=:annee AND chevaux=:chevaux AND couleur=:couleur AND dateFin=:dateFin AND descriptions=:descriptions AND marque=:marque AND modele=:modele AND prixReserve=:prixReserve');

$result->bindValue(':annee', $maVoiture->getAnnee(), PDO::PARAM_STR);
$result->bindValue(':chevaux', $maVoiture->getChevaux(), PDO::PARAM_STR);
$result->bindValue(':couleur', $maVoiture->getCouleur(), PDO::PARAM_STR);
$result->bindValue(':dateFin', $maVoiture->getDateFin(), PDO::PARAM_STR);

$result->bindValue(':descriptions', $maVoiture->getDescriptions(), PDO::PARAM_STR);
$result->bindValue(':marque', $maVoiture->getMarque(), PDO::PARAM_STR);
$result->bindValue(':modele', $maVoiture->getModele(), PDO::PARAM_STR);
$result->bindValue(':prixReserve', $maVoiture->getPrixReserve(), PDO::PARAM_STR);

$result->execute();

$results = $result->fetchAll();

$dbh = new PDO("mysql:dbname=BuyECar;port=8889", "root", "root");

// Prepare the SQL query
$sql = "INSERT INTO Cars (annee, chevaux, couleur, dateFin, descriptions, marque, modele, prixReserve) VALUES (:annee, :chevaux, :couleur, :dateFin, :descriptions, :marque, :modele, :prixReserve)";
$stmt = $dbh->prepare($sql);

// Bind the values to the parameters in the query
$stmt->bindValue(':annee', $maVoiture->getAnnee());
$stmt->bindValue(':chevaux', $maVoiture->getChevaux());
$stmt->bindValue(':couleur', $maVoiture->getCouleur());
$stmt->bindValue(':dateFin', $maVoiture->getDateFin());

$stmt->bindValue(':descriptions', $maVoiture->getDescriptions());
$stmt->bindValue(':marque', $maVoiture->getMarque());
$stmt->bindValue(':modele', $maVoiture->getModele());
$stmt->bindValue(':prixReserve', $maVoiture->getPrixReserve());

// Execute the query
$stmt->execute();  ?>


</body>

</html>