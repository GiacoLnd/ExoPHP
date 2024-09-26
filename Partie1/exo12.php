<h1>exercice 12</h1>
<h2>A partir d'une fonction personnalisée et à partir d'un tableau de prénoms et de langue associée
(tableau contenant clé et valeur), dire bonjour aux différentes personnes dans leur langue
respective (français ➔ « Salut », anglais ➔ « Hello », espagnol ➔ « Hola ») en utilisant un switch</h2>

<?php

$langues = [
    "ANG" => "Marie-Claire",
    "FRA" => "Mickael",
    "ESP" => "Virgile"
];

function direBonjour(array $langues) {
    $salutation = "";
    foreach ($langues as $pays => $prenom) {
        switch (true) {
            case $pays == "ANG" : $salutation = "Hello"; break;
            case $pays == "FRA" : $salutation = "Salut"; break;
            case $pays == "ESP" : $salutation = "Hola"; break;
            default : echo "rien à déclarer";
        }
        echo $salutation." ".$prenom;
    }
}

direBonjour($langues);
















?>
