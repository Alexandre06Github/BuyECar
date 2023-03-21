<?php
// Récupérer l'ID de la voiture à partir de l'URL
if (!isset($_GET['id'])) {
    header('Location: index.php'); // Rediriger vers la page d'accueil si aucun ID n'est spécifié
    exit();
}
$id = $_GET['id'];

?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>eCar enchères</title>
    <link rel="stylesheet" type="text/css" href="Style/style.css">

</head>
<?php include('navbar.php'); ?>

<body>
    <div class="front">
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
        <br>
        <br>

        <?php
        $conn = mysqli_connect("localhost", "root", "root", "BuyECar");
        $resultat = mysqli_query($conn, "SELECT * FROM Cars WHERE ID = '$id'");
        $ligne = mysqli_fetch_assoc($resultat);
        mysqli_close($conn);
        ?>
        <h2>
            <?php echo
            $ligne["marque"] . " " .
                $ligne["modele"];
            ?>
        </h2>
        <br>

        <p>Puissance : <?php echo $ligne["chevaux"] . "ch";  ?></p>
        <p>Année : <?php echo $ligne["annee"]; ?></p>
        <p>Couleur : <?php echo $ligne["couleur"]; ?></p>
        <p>Prix de réserve : <?php echo $ligne["prixReserve"] . " €"; ?></p>
        <p>Date limite d'enchère : <?php echo $ligne["dateFin"]; ?></p>
        <p>Description : <?php echo $ligne["descriptions"]; ?></p>
        <br>
        <input type="number" name="mise" placeholder="Ma mise" min=100 />
        <button type="submit">Enchérir</button>

        </form>


    </div>
</body>
<?php include('footer.php'); ?>

</html>