<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>eCar enchères</title>

</head>

<body>
    <!-- displaying the enchere number which is equal to the car id -->
    <h1>Vente aux enchères</h1>
    <h2>Enchère numéro
        <?php

        $dbh = new PDO("mysql:dbname=BuyECar;port=8889", "root", "root");
        $result = $dbh->prepare('SELECT * FROM Cars WHERE ID =:ID');
        $id = $_GET['id'];
        $result->bindValue(':ID', $id, PDO::PARAM_INT);
        $result->execute();
        $row = $result->fetch(PDO::FETCH_ASSOC); // Fetch a single row as an associative array
        echo $id; ?>
    </h2>




    <!-- displaying the enchere details including enchere amount per car -->
    <form action="encheresDisplay.php" method="POST">

        <input type="number" name="mise" placeholder="Ma mise" />

        <button type="submit">Poster</button>

    </form>

    <?php
    $dbe = new PDO("mysql:dbname=BuyECar;port=8889", "root", "root");
    $total = $dbe->prepare("SELECT Encheres.cars_ID, Encheres.MontantFinal, Cars.marque, Cars.modele, Cars.annee, Cars.chevaux, Cars.couleur, Cars.prixReserve, Cars.dateFin, Cars.descriptions FROM Encheres LEFT JOIN Cars ON Encheres.cars_ID = Cars.ID");

    $MontantFinal = $_GET['id'];
    $total->bindValue(':ID', $id, PDO::PARAM_STR);


    $total->execute();
    $row = $total->fetch(PDO::FETCH_ASSOC);
    ?>

    <?php
    echo "<table>
        <tr>
            <th>Marque</th>
            <th>Modèle</th>
            <th>Année</th>
            <th>Puissance (en ch)</th>
            <th>Couleur</th>
            <th>Prix de réserve</th>
            <th>Date limite d'enchère</th>
            <th>Description</th>
            <th>Montant des enchères</th>
        </tr>
        <tr>
            <td>" . $row["marque"] . "</td>
            <td>" . $row["modele"] . "</td>
            <td>" . $row["annee"] . "</td>
            <td>" . $row["chevaux"] . "</td>
            <td>" . $row["couleur"] . "</td>
            <td>" . $row["prixReserve"] . "€</td>
            <td>" . $row["dateFin"] . "</td>
            <td>" . $row["descriptions"] . "</td>
            <td>" . $row['MontantFinal'] . "€</td>

        </tr>
    </table>"
        ?>
</body>

</html>