<?php require_once __DIR__ . "/inscriptionClass.php"; ?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>S'inscrire</title>
    <link rel="stylesheet" href="Style/style.css">

</head>

<body>

    <?php

    $monVisiteur = new Visiteur(
        $_POST["nom"],
        $_POST["prenom"],
        $_POST["email"],
        $_POST["motDePasse"],
    );
    ?>

    <h2>Votre compte vient d'être créé</h2>

    <li>Nom :
        <?php echo $monVisiteur->getNom(); ?>
    </li>
    <li>Prénom :
        <?php echo $monVisiteur->getPrenom(); ?>
    </li>
    <li>Email :
        <?php echo $monVisiteur->getEmail(); ?>
    </li>

    <!-- read the data from the database -->
    <?php
    $dbh = new PDO("mysql:dbname=BuyECar;port=8889", "root", "root");
    $result = $dbh->prepare('SELECT * FROM Visiteurs WHERE nom=:nom AND prenom=:prenom AND email=:email AND motDePasse=:motDePasse');

    $result->bindValue(':nom', $monVisiteur->getNom(), PDO::PARAM_STR);
    $result->bindValue(':prenom', $monVisiteur->getPrenom(), PDO::PARAM_STR);
    $result->bindValue(':email', $monVisiteur->getEmail(), PDO::PARAM_STR);
    $result->bindValue(':motDePasse', $monVisiteur->getMotDePasse(), PDO::PARAM_STR);

    $result->execute();

    $results = $result->fetchAll(); ?>

    <!-- write the data into the database -->

    <?php
    $dbh = new PDO("mysql:dbname=BuyECar;port=8889", "root", "root");

    // Prepare the SQL query
    $sql = "INSERT INTO Visiteurs (nom, prenom, email, motDePasse) VALUES (:nom, :prenom, :email, :motDePasse)";
    $stmt = $dbh->prepare($sql);

    // Bind the values to the parameters in the query
    $stmt->bindValue(':nom', $monVisiteur->getNom());
    $stmt->bindValue(':prenom', $monVisiteur->getPrenom());
    $stmt->bindValue(':email', $monVisiteur->getEmail());
    $stmt->bindValue(':motDePasse', $monVisiteur->getMotDePasse());

    // Execute the query
    $stmt->execute(); ?>

</body>
<?php include('footer.php'); ?>

</html>