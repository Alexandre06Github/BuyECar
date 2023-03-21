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

class Encheres // on défini la class 'Ticket' qui va contenir les informations de chaque ticket
{

    protected $mise;

    public function __construct($mise) // je créé mon objet 'ticket'   
    {
        $this->mise = $mise;

    }

    public function getMise()
    {
        return $this->mise;


    }


    public function upMontantFinal()
    {
        $conn = mysqli_connect("localhost", "root", "root", "BuyECar");


        $sql = "UPDATE Encheres SET MontantFinal = {$this->mise} + MontantFinal";
        mySqli_query($conn, $sql);
        mysqli_close($conn);
    }


}



?>
<?php include('footer.php'); ?>