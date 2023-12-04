<?php

//Création d'une classe
class  MaClass {
    //Pour déclarer un attribut, on lui donne une visibilité (public ou private) pour savoir s'il va être instancié en dehors de la class ou non
    public string $attribut;
    public string $couleur = "vert";
    public int $age = 54;
    public string $prenom;
    //Les constantes sont toujours en majuscules
    public const PI = 3.14;

    //En private, on met un _ devant le nom de l'attribut
    private string $_nom = "Michel PLIK";
    private string $_attributPrivate;

    //Déclaration d'une méthode
    public function displayMethode($value) : string
    {
        echo "Je suis une méthode qui affiche " . $value . "<br>";
        //Pour pouvoir afficher le return, il faudra utiliser le echo
        return $this-> prenom . ' aime la couleur ' . $this->couleur . "<br>";
    }

    public function calculAire(float|int $rayon) : float|int
    {
        //self permet d'appeler un élément de la class dans laquel il se trouve
        // echo self::PI;
        return self::PI * $rayon * $rayon;
    }
}

//Pour instancier un objet:
$obj = new MaClass();

//Pour faire appel à un attribut d'une classe, on retire le $
echo "Couleur :" . $obj->couleur;
echo "<br>";
echo "Age :" . $obj->age . "<br>";

//On associe une valeur à l'attribut prenom
$obj->prenom = "Bill";

//Le echo est pour afficher le contenu du return
//Le typage de la méthode étant en string, je dois donner un paramètre en string
echo $obj->displayMethode("8");

echo $obj->calculAire(5);