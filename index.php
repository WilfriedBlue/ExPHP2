<?php

// Créer une variable age et l'initialiser avec une valeur.
// Si l'âge est supérieur ou égale à 18, afficher Vous êtes majeur. Dans le cas contraire, afficher Vous êtes mineur.

$age = 29;
if ( $age >= 18) {
    echo "Vous êtes majeur !<br><br>";
}
else { 
    echo "Vous êtes mineur";
}

//Créer une variable isEasy de type booléan et l'initialiser avec une valeur.
//Afficher C'est facile!! si c'est vrai. Dans le cas contraire afficher C'est difficile !!!.
//Bonus : L'écrire de deux manières différentes.

$isEasy = true;

if ($isEasy == true) {
    echo "C'est facile !<br><br>";
}
else {
    echo "C'est dificile !!!";
}

$eas = ($isEasy) ? "C'est facile ! <br> <br>" : "C'est dificile !!!";
echo $eas;
 

//Créer deux variables age et gender. La variable gender peut prendre comme valeur :
//Homme
//Femme
//En fonction de l'âge et du genre afficher la phrase correspondante :
//Vous êtes un homme et vous êtes majeur
//Vous êtes un homme et vous êtes mineur
//Vous êtes une femme et vous êtes majeur
//Vous êtes une femme et vous êtes mineur
//Gérer tous les cas.

$age = 29;
$genre = "Homme";

if ( $age >= 18 && $genre == "Homme") {
    echo "Vous êtes un homme et vous êtes majeur<br><br>";
}
else if ( $age >= 18 && $genre != "Homme") {
    echo "Vous êtes une femme et vous êtes majeur<br><br>";
}
else if ( $age <= 18 && $genre == "Homme") {
    echo "Vous êtes un homme et vous êtes mineur<br><br>";
}
else if ( $age <= 18 && $genre != "Homme") {
    echo "Vous êtes une femme et vous êtes mineur<br><br>";
}

//L'échelle de Richter est un outil de mesure qui permet de définir la magnitude de moment d'un tremblement de terre. Cette échelle va de 1 à 9.
//Créer une variable magnitude. Selon la valeur de magnitude, afficher la phrase correspondante.

$magnitude = 9;

switch ($magnitude)
{ 
    case 1:
        echo "Micro-séisme impossible à ressentir.";
    break;
    
    case 2: 
        echo "Micro-séisme impossible à ressentir mais enregistrable par les sismomètres.";
    break;
    
    case 3:
        echo "Ne cause pas de dégats mais commence à pouvoir être légèrement ressenti.";
    break;
    
    case 4:
        echo "Séisme capable de faire bouger des objets mais ne causant généralement pas de dégats.";
    break;
    
    case 5:
        echo "Séisme capable d'engendrer des dégats importants sur de vieux bâtiments ou bien des bâtiments présentants des défauts de construction. Peu de dégats sur des bâtiments modernes.";
    break;
    
    case 6:
        echo "Fort séisme capable d'engendrer des destructions majeures sur une large distance (180 km) autour de l'épicentre.";
    break;
    case 7:
        echo "Séisme capable de destructions majeures à modérées sur une très large zone en fonction de la distance.";
    break;
    case 8:
        echo "Séisme capable de destructions majeures sur une très large zone de plusieurs centaines de kilomètres.";
    break;
    case 9:
        echo "Séisme capable de tout détruire sur une très vaste zone.";
    break;
    
    default:
        echo "Désolé, je n'ai pas de message à afficher pour cette note";
}
echo "<br><br>";

//Traduire ce code avec des if et des else :
//echo ($gender != 'Homme') ? 'C\'est une développeuse !!!' : 'C\'est un développeur !!!';

$genre = true;

if ($genre == false) {
    echo "C'est une développeuse !!!<br><br>";
}
else {
    echo "C'est un développeur !!! <br><br>";
}

//Traduire ce code avec des if et des else :
//echo ($age >= 18) ? 'Tu es majeur' : 'Tu n\'es pas majeur';

$age = 29;
if ( $age >= 18) {
    echo "Tu es majeur !<br><br>";
}
else { 
    echo "Tu es mineur";
}

//Traduire ce code avec des if et des else :
//echo ($isOk == false) ? 'c\'est pas bon !!!' : 'c\'est ok !!';

$isOK = true;
if ( $isOK = true) {
    echo "C'est pas bon !!!!";
}
else { 
    echo "C'est ok !!!";
}
echo "<br><br>";
    
//Traduire ce code avec des if et des else :
//echo ($isOk) ? 'c'est ok !!' : 'c'est pas bon !!!';

$isOK = true;
if ( $isOK = true ) {
    echo "C'est ok !!!!";
}
else { 
    echo "C'est pas bon !!!";
}
