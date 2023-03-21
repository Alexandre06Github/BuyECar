<?php define('ROOT_PATH', './'); ?>
<!DOCTYPE html>
<html lang="fr">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>eCar enchères</title>
	<link rel="stylesheet" type="text/css" href="Style/style.css">

</head>
<nav>
	<div class="banner">

	</div>
	<div class="car-container">
		<img src="./images/petite.png" alt="Car" class="car">
	</div>
	<div class="btn-container">
		<button class="btn" onclick="window.location.href='<?php echo ROOT_PATH . "#" ?>'">Accueil</button>
		<button class="btn" onclick="window.location.href='<?php echo ROOT_PATH . "formulaireAnnonce.php" ?>'">Déposer
			une
			annonce</button>
		<button class="btn"
			onclick="window.location.href='<?php echo ROOT_PATH . "connexion.php" ?>'">Connexion</button>
		<button class="btn"
			onclick="window.location.href='<?php echo ROOT_PATH . "inscription.php" ?>'">Inscription</button>
		<button class="btn" onclick="window.location.href='<?php echo ROOT_PATH . "profil.php" ?>'">Profil</button>
	</div>

</nav>

</html>