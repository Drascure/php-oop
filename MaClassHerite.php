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

    public function getVariableProtected()
    {
        return $this->varProtected;
    }
}