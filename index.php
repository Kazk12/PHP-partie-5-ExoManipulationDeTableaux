<?php


// Exo 1
echo "<br>";
echo "<br>";
echo "Exercice 1";
echo "<br>";
echo "<br>";


$months = ["Janvier","Février","Mars","Avril","Mai","Juin","Juillet","Aout","Septembre","Octobre","Novembre","Décembre"];
print_r($months);

// Exo 2
echo "<br>";
echo "<br>";
echo "Exercice 2";
echo "<br>";
echo "<br>";


echo "{$months[2]} <br>";


// Exo 3
echo "<br>";
echo "<br>";
echo "Exercice 3";
echo "<br>";
echo "<br>";


echo "{$months[5]} <br>";


// Exo 4

echo "<br>";
echo "Exercice 4";
echo "<br>";
echo "<br>";


$months[7] = "Août";

echo $months[7];


// Exo 5

echo "<br>";
echo "<br>";
echo "Exercice 5";
echo "<br>";
echo "<br>";



$HautFrance = array(
    02  =>  "Aisne",
    59   => "Nord",
    60   => "Oise",
    62   =>  "Pas-de-Calais",
    80   => "Somme",
);

print_r($HautFrance);
echo "<br>";
echo($HautFrance[80]);


// Exo 6

echo "<br>";
echo "<br>";
echo "Exercice 6";
echo "<br>";
echo "<br>";


echo($HautFrance[59]);



// Exo 7

echo "<br>";
echo "<br>";
echo "Exercice 7";
echo "<br>";
echo "<br>";


$HautFrance[51] = "Reims";

print_r($HautFrance);


// Exo 8

echo "<br>";
echo "<br>";
echo "Exercice 8";
echo "<br>";
echo "<br>";


for($i = 0; $i < count($months); $i +=1){
    echo " {$months[$i]} <br> ";
};


// Exo 9 et 10

echo "<br>";
echo "<br>";
echo "Exercice 9";
echo "<br>";
echo "<br>";


foreach($HautFrance as $index => $Departement){
    echo "Le departement {$Departement} a le numéro {$index} <br>";
};