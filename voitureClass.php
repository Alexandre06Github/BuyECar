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

class Voiture // on défini la class 'Voiture' qui va contenir les informations de chaque ticket
{
    protected $annee;
    protected $chevaux;
    protected $couleur; // squelette d'une voiture
    protected $dateFin;
    protected $descriptions;
    protected $marque;
    protected $modele;
    protected $prixReserve;

    public function __construct($annee, $chevaux, $couleur, $dateFin, $descriptions, $marque, $modele, $prixReserve) // je créé mon objet 'voiture'   
    {
        $this->annee = $annee;
        $this->chevaux = $chevaux;
        $this->couleur = $couleur; // j'attribut les valeurs passées en paramètres
        $this->dateFin = $dateFin;
        $this->descriptions = $descriptions;
        $this->marque = $marque;
        $this->modele = $modele;
        $this->prixReserve = $prixReserve;
    }

    public function getAnnee() // retourner la marque avec get car elle est protected
    {
        return $this->annee;
    }

    public function getChevaux()
    {
        return $this->chevaux;
    }

    public function getCouleur()
    {
        return $this->couleur;
    }

    public function getDateFin()
    {
        return $this->dateFin;
    }

    public function getDescriptions()
    {
        return $this->descriptions;
    }

    public function getMarque()
    {
        return $this->marque;
    }

    public function getModele()
    {
        return $this->modele;
    }

    public function getPrixReserve()
    {
        return $this->prixReserve;
    }

} ?>