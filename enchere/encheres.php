<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>eCar enchères</title>

</head>

<body>

    <h1>Vente aux enchères</h1>
    <h2>Enchère numéro
        <?php

        $dbh = new PDO("mysql:dbname=BuyECar;port=8889", "root", "root");
        $result = $dbh->prepare('SELECT * FROM Encheres WHERE cars_ID =:cars_ID');

        $result->bindValue(':cars_ID', $some_value, PDO::PARAM_INT);

        $result->execute();

        $row = $result->fetch(PDO::FETCH_ASSOC); // Fetch a single row as an associative array
        $cars_ID = $row['cars_ID']; // Access the value of the 'cars_ID' column
        ?>
    </h2>

    <form action="encheresDisplay.php" method="POST">

        <input type="number" name="mise" placeholder="Ma mise" />

        <button type="submit">Poster</button>

    </form>


</body>

</html>