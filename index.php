<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>eCar enchère</title>

</head>

<body>

    <h1>Vente aux enchères</h1>
    <h2>Renseignez votre véhicule</h2>

    <form action="" method="POST">

        <select id="marques" name="marques">
            <option value="" disabled selected>Marques</option>
            <option value="Renault">Renault</option>
            <option value="Citroen">Citroen</option>
            <option value="Tesla">Tesla</option>
            <option value="Audi">Audi</option>
        </select>

        <select id="modele" name="modele">
            <option value="" disable selected>Modèle</option>
            <option name="modele" value="Zoé">Zoé</option>
            <option name="modele" value="Ami">Ami</option>
            <option name="modele" value="Modèle 3">Modèle 3</option>
            <option name="modele" value="e-Tron">e-Tron</option>
        </select>

        <select id="chevaux" name="chevaux">
            <option value="" disable selected>Puissance (en ch)</option>
            <option name="chevaux" value="12">12</option>
            <option name="chevaux" value="135">135</option>
            <option name="chevaux" value="350">350</option>
            <option name="chevaux" value="360">360</option>
        </select>

        <select id="annee" name="annee">
            <option value="" disable selected>Mise en circulation</option>
            <option name="2020" value="2020">2020</option>
            <option name="2021" value="2021">2021</option>
            <option name="2022" value="2022">2022</option>
            <option name="2023" value="2023">2023</option>
        </select>

        <select id="couleurs" name="couleurs">
            <option value="" disable selected>Couleur</option>
            <option name="blanc" value="Blanc">Blanc</option>
            <option name="noir" value="Noir">Noir</option>
            <option name="rouge" value="Rouge">Rouge</option>
            <option name="bleu" value="Bleu">Bleu</option>
        </select>

        <input type="text" placeholder="Description"></input>
        <input type="number" min="100" placeholder="Prix de réserve"></input>
        <input type="date" name="date" value="<?php echo date('Y-m-d'); ?>" min="<?php echo date('Y-m-d'); ?>" max="2023-03-30" required />

        <button type="submit">Poster</button>

    </form>








    </form>












</body>

</html>