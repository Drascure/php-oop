<?php

//Création d'une classe
class  MaClass {
    //Pour déclarer un attribut, on lui donne une visibilité (public ou private) pour savoir s'il va être instancié en dehors de la class ou non
    public $attribut;
    public $couleur = "vert";
    public $age = 54;
    //En private, on met un _ devant le nom de l'attribut
    private $_nom = "Michel PLIK";
    private $_attributPrivate;

    //Déclaration d'une méthode
    public function displayMethode($value)
    {
        echo "Je suis une méthode qui affiche " . $value;
        //Pour pouvoir afficher le return, il faudra utiliser le echo
        return $this->couleur;
    }
}

//Pour instancier un objet:
$obj = new MaClass();

//Pour faire appel à un attribut d'une classe, on retire le $
echo "Couleur :" . $obj->couleur;
echo "<br>";
echo "Age :" . $obj->age . "<br>";

$obj->displayMethode(8);

//Le echo est pour afficher le contenu du return
echo $obj->displayMethode(8);