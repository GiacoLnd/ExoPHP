<h1>Exercice 5</h1>
<h2>Ecrire un algorithme qui déclare une valeur en francs et qui la convertit en euros. 
Attention, la valeur générée devra être arrondie à 2 décimales</h2>

<?php
$franc = 100;
$euros = 15.24;

$conversion = round($franc/6.56, 2);    //// conversion avec deux décimales en sortie
echo $conversion;







?>