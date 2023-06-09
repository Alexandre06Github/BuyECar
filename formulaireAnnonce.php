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
        <h1>Déposer votre annonce</h1>

        <h2>Renseignez votre véhicule</h2>

        <form action="voitureAnnonce.php" method="POST">

            <select id="marque" name="marque">
                <!-- marque -->
                <option value="" disabled selected>Marques</option>
                <option name="marque" value="Renault">Renault</option>
                <option name="marque" value="Citroen">Citroen</option>
                <option name="marque" value="Tesla">Tesla</option>
                <option name="marque" value="Audi">Audi</option>
            </select>

            <select id="modele" name="modele">
                <!-- modele -->
                <option value="" disable selected>Modèle</option>
                <option name="modele" value="Zoé">Zoé</option>
                <option name="modele" value="Ami">Ami</option>
                <option name="modele" value="Modèle 3">Modèle 3</option>
                <option name="modele" value="e-Tron">e-Tron</option>
            </select>

            <select id="chevaux" name="chevaux">
                <!-- chevaux -->
                <option value="" disable selected>Puissance (en ch)</option>
                <option name="chevaux" value="12">12</option>
                <option name="chevaux" value="135">135</option>
                <option name="chevaux" value="350">350</option>
                <option name="chevaux" value="360">360</option>
            </select>

            <select id="annee" name="annee">
                <!-- année -->
                <option value="" disable selected>Mise en circulation</option>
                <option name="annee" value="2020">2020</option>
                <option name="annee" value="2021">2021</option>
                <option name="annee" value="2022">2022</option>
                <option name="annee" value="2023">2023</option>
            </select>

            <select id="couleur" name="couleur">
                <!-- couleur -->
                <option value="" disable selected>Couleur</option>
                <option name="couleur" value="Blanc">Blanc</option>
                <option name="couleur" value="Noir">Noir</option>
                <option name="couleur" value="Rouge">Rouge</option>
                <option name="couleur" value="Bleu">Bleu</option>
            </select>

            <input name="descriptions" type="text" placeholder="Description"></input> <!-- description -->
            <input name="prixReserve" type="number" min="100" placeholder="Prix de réserve"></input>
            <!-- prix de réserve -->
            <input type="date" name="dateFin" value="<?php echo date('Y-m-d'); ?>" min="<?php echo date('Y-m-d'); ?>"
                max="2023-03-30" required />

            <button type="submit">Poster</button>

        </form>
    </div>
</body>
<?php include('footer.php'); ?>

</html>