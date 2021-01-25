<?php
//exo 1

$annee = ["janvier", "février", "mars", "avril", "mai", "juin", "juillet", "aout", "septembre", "octobre", "novembre", "décembre"];

//exo 2

echo $annee[2]."<br>";

// exo 3
echo $annee[5]."<br>";

// exo 4

$annee[7] = "août";
echo $annee[7]."<br>";

//exo 5

$departement = ["02" => "Aisne", "59" => "Nord", "60" => "Oise", "62" => "Pas-de-Calais", "80" => "Somme"];

// exo 6

echo $departement["59"] . "<br>";

// exo 7

echo $departement["51"]."<br>";

// exo 8

foreach ($annee as $mois) {
    echo $mois . "<br>";
}

// exo 9

foreach($departement as $x => $y) {
    echo $y . "<br>";
}

// exo 10

foreach($departement as $x => $y) {
    echo "Le département $y a pour numéro $x <br>";
}