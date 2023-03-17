<?php

class Visiteur // on défini la class 'Ticket' qui va contenir les informations de chaque ticket
{
    protected $nom;
    protected $prenom;
    protected $email; // squelette d'un ticket de cinéma
    protected $motDePasse;

    public function __construct($nom, $prenom, $email, $motDePasse) // je créé mon objet 'ticket'   
    {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->email = $email; // j'attribut les valeurs passées en paramètres
        $this->motDePasse = $motDePasse;

    }

    public function getNom()
    {
        return $this->nom;
    }

    public function getPrenom()
    {
        return $this->prenom;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function getMotDePasse()
    {
        return $this->motDePasse;
    }

}