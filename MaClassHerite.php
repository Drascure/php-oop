<?php

class MaClassHerite extends MaClass
{

    function __construct() 
    {
        //La class hérite des méthodes magique du parent
        parent::__construct();
    }

    public function getCouleur()
    {
        return $this->couleur;
    }

    //Fonction qui récupère la valeur de la variable protégé
    public function getVariableProtected()
    {
        return $this->varProtected;
    }

    //Fonction qui permet de modifier la variable protégé
    public function setVariableProtected($value)
    {
        return $this->varProtected = $value;
    }
}