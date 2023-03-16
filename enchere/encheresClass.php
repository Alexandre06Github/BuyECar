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

}