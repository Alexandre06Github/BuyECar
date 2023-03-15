<?php 

class Voiture                    // on défini la class 'Ticket' qui va contenir les informations de chaque ticket
{
protected $marque;
protected $modele;
protected $chevaux;                 // squelette d'un ticket de cinéma
protected $annee;
protected $couleur;
protected $description;
protected $prixReserve;

public function __construct($marque, $modele, $chevaux, $annee, $couleur, $description, $prixReserve)      // je créé mon objet 'ticket'   
{
    $this->marque = $marque;
    $this->modele = $modele;
    $this->chevaux = $chevaux;                          // j'attribut les valeurs passées en paramètres
    $this->annee = $annee;
    $this->couleur = $couleur;
    $this->description = $description;
    $this->prixReserve = $prixReserve;
}

public function getMarque()
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

public function getDescription()
{
    return $this->description;
}

public function getPrixReserve()
{
    return $this->prixReserve;
}


}
