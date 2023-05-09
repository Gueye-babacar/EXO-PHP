<?php

class Word {
    private string $word;
    public function __construct(string $word)
    {
        $this->word = $word ;
    }

    public function getWord()
    {
        return $this->word;
    }
    public function setWord(string $word)
    {
        $this->word = $word;
    }
}

// $wordObj = new Word('Hello Word');
// echo $wordObj->getWord(); // Output: Hello Word

$films = array("L'homme", "La Ligne Verte", "Forrest Gump", "Fight Club", "Inception");

foreach($films as $film) {
    echo $film . "<br>";
}

$num = 1;
while($num <= 50) {
    echo $num . "<br>";
    $num++;
}


// exo 4 Exercice 4 :
// Déclarer une variable $age qui contient un entier, ensuite :
// Si $age est plus grand ou égale à 18 afficher : Je suis majeur
// Si $age est plus petit à 18 afficher : je suis mineur
// Si non afficher : Y a un problème

$sage = -5; 

if ($sage >= 18) {
    echo 'je suis majeur'; // affiche je suis majeur 
} 
elseif ($sage >= 0 && $sage < 18) {
    echo 'je suis mineur'; // affiche je suis mineur 
}
else {
    echo 'Y a un problème';
}
// Exercice 5 :
// Même énoncé que l’exercice 4, mais en utilisant switch au lieu du if/else

$sage = -5;
switch($sage >= 18){
    case 1: echo 'je suis majeur';
    case 2: echo 'je suis mineur';
    case 3: echo 'y\'a problème';

}
// exo 6
// Afficher la taille de la chaîne :
// Ceci est une chaîne de caractère.

$string = "Ceci est une chaîne de caractère.";
$length = strlen($string);
echo "La taille de la chaîne est de $length caractères.";


// exo 7
// Déclarer 2 variables entiers, et afficher le plus grand entre les 2 
$a = 29;
$b = 35;
if ($a > $b) {
    echo ' le plus grand est $a';
} else { 
    echo 'le plus grand est $b';
}

//  exo 8 Afficher les différents mots de la phrase :
// Ceci est une chaîne de caractère.

$string = "Ceci est une chaîne de caractère.";
$words = explode(" ", $string);

foreach ($words as $word) {
    echo $word . "<br>";
}

//exo 9 Afficher la sous chaîne “est une chaîne” de la chaîne de caractère :
// Ceci est une chaîne de caractère.

$string = "Ceci est une chaîne de caractère.";
$subString = substr($string, 5, 15);
echo $subString;

//exo 10 Déclarer une variable :
// $word = "hello";
// afficher $word mais en mettant la 1ère lettre en majuscule (modifié) 
$word = "hello";
$modifiedWord = ucfirst($word);
echo $modifiedWord;
 ?>