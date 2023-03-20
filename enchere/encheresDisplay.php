<?php require_once __DIR__ . "/encheresClass.php"; ?>

<?php

$monEnchere = new Encheres(
    $_POST["mise"],

);



?>


<h2>Votre Mise</h2>

<p>Ma mise :
    <?php echo $monEnchere->getMise();
    ?>€
</p>




<?php
$conn = mysqli_connect("localhost", "root", "root", "BuyECar");
$resultat = mysqli_query($conn, "SELECT Encheres.cars_ID, Encheres.MontantFinal, Cars.marque, Cars.modele, Cars.annee, Cars.chevaux, Cars.couleur, Cars.prixReserve, Cars.dateFin, Cars.descriptions FROM Encheres LEFT JOIN Cars ON Encheres.cars_ID = Cars.ID"); // Exécuter la requête SQL pour récupérer les données de la table "Cars""); // Exécuter la requête SQL pour récupérer les données de la table "Cars"
mysqli_close($conn); // Fermer la connexion à votre base de données

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
        <th>MontantFinal</th>
      </tr>";

while ($ligne = mysqli_fetch_assoc($resultat)) {
    echo "<tr>
                <td>" . $ligne["marque"] . "</td>
                <td>" . $ligne["modele"] . "</td>
                <td>" . $ligne["annee"] . "</td>
                <td>" . $ligne["chevaux"] . "</td>
                <td>" . $ligne["couleur"] . "</td>
                <td>" . $ligne["prixReserve"] . "€</td>
                <td>" . $ligne["dateFin"] . "</td>
                <td>" . $ligne["descriptions"] . "</td>
                <td>" . $ligne["MontantFinal"] . "€</td>
                
         </tr>";
}
echo "</table>";
?>