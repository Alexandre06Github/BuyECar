<?php

class Voiture                    // on défini la class 'Voiture' qui va contenir les informations de chaque ticket
{
    protected $marque;
    protected $modele;
    protected $chevaux;                 // squelette d'une voiture
    protected $annee;
    protected $couleur;
    protected $descriptions;
    protected $prixReserve;
    protected $dateFin;

    public function __construct($marque, $modele, $chevaux, $annee, $couleur, $descriptions, $prixReserve, $dateFin)      // je créé mon objet 'voiture'   
    {
        $this->marque = $marque;
        $this->modele = $modele;
        $this->chevaux = $chevaux;                          // j'attribut les valeurs passées en paramètres
        $this->annee = $annee;
        $this->couleur = $couleur;
        $this->descriptions = $descriptions;
        $this->prixReserve = $prixReserve;
        $this->dateFin = $dateFin;
    }

    public function getMarque()         // retourner la marque avec get car elle est protected
    {
        return $this->marque;
    }

    public function getModele()
    {
        return $this->modele;
    }

    public function getChevaux()
    {
        return $this->chevaux;
    }

    public function getAnnee()
    {
        return $this->annee;
    }

    public function getCouleur()
    {
        return $this->couleur;
    }

    public function getDescriptions()
    {
        return $this->descriptions;
    }

    public function getPrixReserve()
    {
        return $this->prixReserve;
    }

    public function getDateFin()
    {
        return $this->dateFin;
    }

}
