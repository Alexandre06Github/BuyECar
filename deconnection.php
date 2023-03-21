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
<?php include('navbar.php'); ?>

<?php
session_start();

session_destroy(); //session_destroy sert à detruire la session  
echo " Vous êtes  déconnecté";
?>
<?php include('footer.php'); ?>