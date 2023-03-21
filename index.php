<?php include('navbar.php'); ?>

<body>
  <div class="front">
    <div class="clock">
      <p id="date"></p>
      <p id="heure"></p>

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
      </script>
    </div>
    <div class="dispo">
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

        echo "<table>"; // Afficher le contenu de ma base de donnée sous forme de tableau HTML
        echo "<tr>
        <th>Marque</th>
        <th>Modèle</th>
        <th>Année</th>
        <th>Prix de réserve</th>
        <th>Montant en cours</th>
        <th>Date limite d'enchère</th>
       
      </tr>";

        while ($ligne = mysqli_fetch_assoc($resultat)) {
          echo "<tr>
              <td>" . $ligne["marque"] . "</td>
              <td>" . $ligne["modele"] . "</td>
              <td>" . $ligne["annee"] . "</td>
              <td>" . $ligne["prixReserve"] . "€</td>
              <td>" . $ligne["prixEnCours"] . "€</td>
              <td>" . $ligne["dateFin"] . "</td>
              <td><button onclick='window.location.href=\"encheres.php?id=" . $ligne["ID"] . "\"'>Plus de détails</button></td>
             </tr>";
        }

        echo "</table>";
        ?>
      </div>
    </div>
  </div>
</body>
<?php include('footer.php'); ?>

</html>