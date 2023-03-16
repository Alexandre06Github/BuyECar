<?php require_once __DIR__ . "/voitureClass.php"; ?>

<?php

$maVoiture = new Voiture (
    $_POST["marque"],
    $_POST["modele"],
    $_POST["chevaux"],
    $_POST["annee"],
    $_POST["couleur"],
    $_POST["descriptions"],
    $_POST["prixReserve"],
    $_POST["dateFin"]
);


$dbh = new PDO("mysql:dbname=BuyECar;port=8889", "root", "root");
$result = $dbh->prepare('SELECT * FROM Cars WHERE marque=:marque AND modele=:modele AND chevaux=:chevaux AND annee=:annee AND couleur=:couleur AND descriptions=:descriptions AND prixReserve=:prixReserve AND dateFin=:dateFin');

$result->bindValue(':marque', $maVoiture->getMarque(), PDO::PARAM_STR);
$result->bindValue(':modele', $maVoiture->getModele(), PDO::PARAM_STR);
$result->bindValue(':chevaux', $maVoiture->getChevaux(), PDO::PARAM_STR);
$result->bindValue(':annee', $maVoiture->getAnnee(), PDO::PARAM_STR);

$result->bindValue(':couleur', $maVoiture->getCouleur(), PDO::PARAM_STR);
$result->bindValue(':descriptions', $maVoiture->getDescriptions(), PDO::PARAM_STR);
$result->bindValue(':prixReserve', $maVoiture->getPrixReserve(), PDO::PARAM_STR);
$result->bindValue(':dateFin', $maVoiture->getDateFin(), PDO::PARAM_STR);

$result->execute();

$results = $result->fetchAll(); 




$dbh = new PDO("mysql:dbname=BuyECar;port=8889", "root", "root");

// Prepare the SQL query
$sql = "INSERT INTO Cars (marque, modele, chevaux, annee, couleur, descriptions, prixReserve, dateFin) VALUES (:marque, :modele, :chevaux, :annee, :annee, :couleur, :descriptions, :prixReserve, :dateFin)";
$stmt = $dbh->prepare($sql);

// Bind the values to the parameters in the query
$stmt->bindValue(':marque', $maVoiture->getMarque());
$stmt->bindValue(':modele', $maVoiture->getModele());
$stmt->bindValue(':chevaux', $maVoiture->getChevaux());
$stmt->bindValue(':annee', $maVoiture->getAnnee());

$stmt->bindValue(':couleur', $maVoiture->getCouleur());
$stmt->bindValue(':descriptions', $maVoiture->getDescriptions());
$stmt->bindValue(':prixReserve', $maVoiture->getPrixReserve());
$stmt->bindValue(':dateFin', $maVoiture->getDateFin());

// Execute the query
$stmt->execute();




?>

<h2>Votre Annonce</h2>

<li>Marque : <?php echo $maVoiture->getMarque(); ?></li>
<li>Modele : <?php echo $maVoiture->getModele(); ?></li>
<li>Puissance : <?php echo $maVoiture->getChevaux() . 'ch'; ?></li>
<li>Mise en circulation : <?php echo $maVoiture->getAnnee(); ?></li>
<li>Couleur : <?php echo $maVoiture->getCouleur(); ?></li>
<li>Description : <?php echo $maVoiture->getDescriptions(); ?></li>
<li>Prix de réserve : <?php echo $maVoiture->getPrixReserve() . '€'; ?></li>
<li>Votre annonce expire le : <?php echo $maVoiture->getDateFin(); ?></li>

