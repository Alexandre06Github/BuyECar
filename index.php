<?php define('ROOT_PATH', './'); ?>
<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>eCar enchères</title>
  <link rel="stylesheet" type="text/css" href="style.css">
  
</head>

<body>
  <?php include ('navbar.php'); ?>
  <br><br>
  <p id="date"></p>
  <p id="heure"></p>

  <script>
    function afficherHeure() { // afficher l'heure et la date
      var date = new Date();

      var optionsDate = {
        weekday: 'long',
        year: 'numeric',
        month: 'long',
        day: 'numeric'
      };
      var optionsHeure = {
        hour: 'numeric',
        minute: 'numeric',
        second: 'numeric'
      };

      document.getElementById("date").innerHTML = date.toLocaleDateString('fr-FR', optionsDate);
      document.getElementById("heure").innerHTML = date.toLocaleTimeString('fr-FR', optionsHeure);
    }
    setInterval(afficherHeure, 1000);
  </script><br><br>



  <h2 class="textAlign">Voitures disponibles</h2>
  <br>

  <div class="alignItemsCenter">
    <?php
    $conn = mysqli_connect("localhost", "root", "root", "BuyECar");         // Établir une connexion à votre base de données

    if (!$conn) {       // Vérifier la connexion
      die("Échec de la connexion : " . mysqli_connect_error());
    }

    $resultat = mysqli_query($conn, "SELECT * FROM Cars");     // Exécuter la requête SQL pour récupérer les données de la table "Cars"
    mysqli_close($conn);                // Fermer la connexion à votre base de données

    echo "<table border='1'>";          // Afficher le contenu de ma base de donnée sous forme de tableau HTML
    echo "<tr>
        <th>Marque</th>
        <th>Modèle</th>
        <th>Année</th>
        <th>Puissance (en ch)</th>
        <th>Couleur</th>
        <th>Prix de réserve</th>
        <th>Date limite d'enchère</th>
        <th>Description</th>
      </tr>";

    while ($ligne = mysqli_fetch_assoc($resultat)) {
      echo "<tr>
                <td>" . $ligne["marque"] . "</td>
                <td>" . $ligne["modele"] . "</td>
                <td>" . $ligne["annee"] . "</td>
                <td>" . $ligne["chevaux"] . "</td>
                <td>" . $ligne["couleur"] . "</td>
                <td>" . $ligne["prixReserve"] . "</td>
                <td>" . $ligne["dateFin"] . "</td>
                <td>" . $ligne["descriptions"] . "</td>
         </tr>";
    }
    echo "</table>";
    ?>
  </div>

</body>

</html>