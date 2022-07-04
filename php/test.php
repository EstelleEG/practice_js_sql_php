<?php
include "./myClass.php";

//@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@
//@@@@@ Niveau/ level 1 @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@
//@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@
//-- Les types de variables -----------------------------
// TODO Note en commentaire le type de chaque variable

$type1 = "0";//string
$type2 = "0.0";//string
$type3 = 0;//int
$type4 = 0.0;//float
$type5 = false; //bolean //value by default is 0
$type6 = [];//array //empty so value is 0 by default

$type7 = new Exception('Mon erreur'); 
//is an object of type 'exception'



//sum up objects : 
//J'instancie/je crée une nouvel objet qui est 'Exception' et qui appartient a la class 'MyClass'. Cette classe va afficher un erreur.
//Les exceptions peuvent servir a arreter l'execution d'une fontion quand elle passe des datas qui ne peuvent pas etre utilisées.

// un objet est un type de variable, c'est une instanciation/creation
//l'objet possede des variables, des proprietes

// les classes possedent des variables/ attributs/ des caracteristiques, c'est la definition de l'objet, ils definissent l'objet
// Les methodes = ce sont les actions/comportements de l’objet
// Les attributs a l'interieure de la fonction publique, sont accessibles en dehors de la class



//-- Les comparaisons de valeur ---------------------------
// TODO Note en commentaire le résultat affiché par le var_dump (true ou false ?)
//Le var dump affiche le type et les infos compris dans la variable

    var_dump($type1 == $type2); // '==' compare values //false

    var_dump($type1 === $type2); // '===' compare values and values must be strictly equal in type //true
    
    var_dump($type1 == $type3); //true
    
    var_dump($type1 === $type3); //false
    
    var_dump($type1 == $type5); //true
    
    var_dump($type1 === $type5); //false



//-- Valeurs des variables --------------------------------
// TODO Quel sera le nombre affiché par l'instruction echo ?

    //addition 
    //add +1
    //$a =$a +$b 
    //le resulat sera 16
    //+= est un operateur numérique qui fait une addition

$nombre = 10;
$unAutreNombre = 5;

$nombre++; //add  +1 to 10
$nombre += $unAutreNombre;

echo $nombre;


//#########################################################
//-- Retour de fonction  ---------------------------------
// TODO Quel sera la phrase affichée par l'instruction echo ?

    //echo affichera :  Premier return et Deuxieme return
    //car le if execute le code tant que la condition est true (et 5 est bien inf. à 10)

function maFonction (int $nombre) {
    if ($nombre < 10) {
        return "Premier return";
    }
    if ($nombre < 8) {
        return "Deuxième return";
    }
}

$test = maFonction(5);
echo $test;


//#########################################################
//@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@
//@@@@@ Niveau 2 @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@
//@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@
//-- Portée des variables ---------------------------------
// TODO Quel sera la phrase affichée par l'instruction echo ?

    //REPONSE : Salut, ca va ? 
    // Car l'echo est en dehors de la premiere fonction

    $unTexte = "Salut, ";

    function uneAutreFonction () {
        $unTexte = $unTexte . "comment ";
    }
    uneAutreFonction();
    
    $unTexte = $unTexte . "ça va ?";
    echo $unTexte;
    // result is : Salut, ça va ?
    




    // function uneAutreFonction () {
    //     $unTexte = "Salut, ";
    //     $unTexte = $unTexte . "comment ";
    //     return $unTexte;
    // }
    
    // echo uneAutreFonction() . "ça va ?";
    // result is : Salut, comment ça va ?




//#########################################################

//-- Strucure de controle conditionnelle (IF ELSE) --------
// TODO Quel sera la phrase affichée par l'instruction echo ?

$nombre = 10;
$texteAAfficher = "";

if ($nombre > 5) {
    $texteAAfficher = "Condition 1";
} elseif ($nombre > 6) {
    $texteAAfficher = "Condition 2";
}

echo $texteAAfficher;

//REPONSE : Condition 1 
//Car elseif sera exécuté si le if précédent est false, la condition actuelle (elseif) sera donc true.
//Elseif permet d'exécuter du code pour plusieurs conditions
//#########################################################





//@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@
//@@@@@ Niveau 3 @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@
//@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@






//#########################################################

//-- Variables objets ou "références" ---------------------
// TODO Quels seront les nombres affichés par les instructions echo ?

    //REPONSE : echo va afficher "coucou" et "coucou"
    //on assigne la meme valeur 'coucou' à l'attribut de la variable 'object1' et 'object2'

$object1 = new myClass();
$object2 = $object1;

$object1->myField = "Coucou";

echo $object1->myField;
echo $object2->myField;

//#########################################################