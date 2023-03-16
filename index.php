<!DOCTYPE html>
<html lang="fr">

<head>
	<title>ECar enchère</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<header>
		<img src="./images/Banniere.jpg" alt="Description de l'image">
	</header>
	<nav>
		<div class="logo">
			<img src="logo.png" alt="Description du logo">
		</div>
		<ul>
  <li><a class="btn" href="#">Accueil</a></li>
  <li><a class="btn" href="#">Déposer une annonce</a></li>
  <li><a class="btn" href="#">Inscription</a></li>
  <li><a class="btn" href="#">Connexion</a></li>
</ul>
<div class="wrapper">
  <div class="nav"></div>
  <div class="car"></div>
</div>
	</nav><br><br>
<p id="date"></p>
  <p id="heure"></p>

  <script>
    function afficherHeure() {
      var date = new Date();

      var optionsDate = { weekday: 'long', year: 'numeric', month: 'long', day: 'numeric' };
      var optionsHeure = { hour: 'numeric', minute: 'numeric', second: 'numeric' };

      document.getElementById("date").innerHTML = date.toLocaleDateString('fr-FR', optionsDate);
      document.getElementById("heure").innerHTML = date.toLocaleTimeString('fr-FR', optionsHeure);
    }
    setInterval(afficherHeure, 1000);
  </script><br><br>
  

    <h1 class="textAlign">Vente aux enchères</h1>
    <br>
    <h2 class="textAlign">Renseignez votre véhicule</h2>

    <form class="textAlign" action="voitureAnnonce.php" method="POST">

        <select id="marque" name="marque"> <!-- marque -->
            <option value="" disabled selected>Marques</option>
            <option name="marque" value="Renault">Renault</option>
            <option name="marque" value="Citroen">Citroen</option>
            <option name="marque" value="Tesla">Tesla</option>
            <option name="marque" value="Audi">Audi</option>
        </select>

        <select id="modele" name="modele"> <!-- modele -->
            <option value="" disable selected>Modèle</option>
            <option name="modele" value="Zoé">Zoé</option>
            <option name="modele" value="Ami">Ami</option>
            <option name="modele" value="Modèle 3">Modèle 3</option>
            <option name="modele" value="e-Tron">e-Tron</option>
        </select>

        <select id="chevaux" name="chevaux"> <!-- chevaux -->
            <option value="" disable selected>Puissance (en ch)</option>
            <option name="chevaux" value="12">12</option>
            <option name="chevaux" value="135">135</option>
            <option name="chevaux" value="350">350</option>
            <option name="chevaux" value="360">360</option>
        </select>

        <select id="annee" name="annee"> <!-- année -->
            <option value="" disable selected>Mise en circulation</option>
            <option name="annee" value="2020">2020</option>
            <option name="annee" value="2021">2021</option>
            <option name="annee" value="2022">2022</option>
            <option name="annee" value="2023">2023</option>
        </select>

        <select id="couleur" name="couleur"> <!-- couleur -->
            <option value="" disable selected>Couleur</option>
            <option name="couleur" value="Blanc">Blanc</option>
            <option name="couleur" value="Noir">Noir</option>
            <option name="couleur" value="Rouge">Rouge</option>
            <option name="couleur" value="Bleu">Bleu</option>
        </select>

        <input name="descriptions" type="text" placeholder="Description"></input> <!-- description -->
        <input name="prixReserve" type="number" min="100" placeholder="Prix de réserve"></input> <!-- prix de réserve -->
        <input type="date" name="dateFin" value="<?php echo date('Y-m-d'); ?>" min="<?php echo date('Y-m-d'); ?>" max="2023-03-30" required />

        <button type="submit">Poster</button>
        <br>
        <br>
        <br>

    </form>

    <h2 class="textAlign">Voitures disponibles</h2>

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