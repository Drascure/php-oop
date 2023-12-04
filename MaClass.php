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
    //Variable static
    static string $varStatic = "Je suis une variable statique";

    //En private, on met un _ devant le nom de l'attribut
    private string $_nom = "Michel PLIK";
    private string $_attributPrivate;

    //Une variable protected n'est accessible qu'avec une class qui va hériter de celle ci, on y accède que via l'héritage
    protected string $varProtected = "Je suis une variable protected";

    //Le construct s'initie dès le chargement de la page donc on la met au début de la class
    public function __construct() 
    {
        echo "Je suis une méthode magique de la " . __CLASS__ . '<br>';
    }

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

    static function staticFunc()
    {
        return "Methode statique qui affiche une variable statique " . self::$varStatic;
    }

    //Fonction qui permet de récupérer une variable privée, le GETeur
    public function getNom()
    {
        return $this->_nom;
    }

    //Fonction qui permet de récupéré une information pour l'attribué à une variable privé
    public function setNom($nom)
    {
        $this->_nom = $nom;
    }

    //Le destruct s'initie dès que l'instance se termine
    public function __destruct() 
    {
        echo "Je suis une méthode magique (--destruct) de la " . __CLASS__ . '<br>';
    }

}

