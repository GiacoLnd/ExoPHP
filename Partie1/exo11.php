<h1>Exercice1</h1>
<h2>Initialiser un tableau de x marques de voitures. Ecrire un algorithme permettant de parcourir ce 
tableau et d'en afficher le contenu (une marque de voiture par ligne). Il est également demandé 
d'afficher le nombre de marques de voitures présentes dans le tableau.</h2>

<?php

$marques = ["Ferrari", "Alfa Romeo", "Fiat", "Lancia"];
$nbTableau = count($marques);
echo "le tableau contient $nbTableau marques.<br>";


foreach ($marques as $v) {
    echo "-$v<br>";
}


