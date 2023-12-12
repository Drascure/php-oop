<?php 
include "MaClass.php";
include "MaClassHerite.php";


/*//Les variable statique peuvent être appelé sans qu'on ai besoin d'instancer l'objet
echo MaClass::$varStatic;
echo "<br>";

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
echo "<br>";

echo $obj->calculAire(5);
echo "<br>";

echo MaClass::staticFunc();*/

$objHerite = new MaClassHerite();

// echo $objHerite->getCouleur();

echo '<br>';

echo $objHerite->getVariableProtected();

echo '<br>';


$objHerite->setVariableProtected("Une chaine de caractère");

echo '<br>';


echo $objHerite->getVariableProtected();

echo '<br>';


$obj2 = new MaClass();

echo '<br>';

$obj2->setNom("Jean-Jacques Goldman");

echo '<br>';


echo $obj2->getNom();

