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
  <?php include('navbar.php'); ?>
  <br><br>
  <div class="clock">
  <p id="date"></p>
  <p id="heure"></p>
</div>
  <script>
    function afficherHeure() {
  const maintenant = new Date();
  const date = maintenant.toLocaleDateString();
  const heure = maintenant.toLocaleTimeString();
  document.getElementById('date').textContent = date;
  document.getElementById('heure').textContent = heure;
}

afficherHeure();
setInterval(afficherHeure, 1000);
  </script><br><br>

  <h2 class="textAlign">Voitures disponibles</h2>
  <br>

  <div class="alignItemsCenter">
    <?php
    $conn = mysqli_connect("localhost", "root", "root", "BuyECar"); // Établir une connexion à votre base de données
    
    if (!$conn) { // Vérifier la connexion
      die("Échec de la connexion : " . mysqli_connect_error());
    }

    $resultat = mysqli_query($conn, "SELECT * FROM Cars"); // Exécuter la requête SQL pour récupérer les données de la table "Cars"
    mysqli_close($conn); // Fermer la connexion à votre base de données
    
    echo "<table border='1'>"; // Afficher le contenu de ma base de donnée sous forme de tableau HTML
    echo "<tr>
        <th>Marque</th>
        <th>Modèle</th>
        <th>Année</th>
        <th>Puissance (en ch)</th>
        <th>Couleur</th>
        <th>Prix de réserve</th>
        <th>Date limite d'enchère</th>
        <th>Description</th>
        <th>Enchérir</th>
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
                <td><a href='enchere/encheres.php?id=" . $ligne["ID"] . "'>Plus de détails</a></td>
         </tr>";
    }
    echo "</table>";
    ?>
  </div><br>

  <?php include('footer.php'); ?>
</body>

</html>