<h1>Exercice 13</h1>
<h2>Calculer la moyenne générale d'un élève dont les notes sont renseignées dans un tableau (pas de
coefficient). Elle devra être affichée avec 2 décimales.
</h2>

<?php
$notes = [10, 12, 8, 19, 3, 16, 11, 13, 9];
$nbNotes = count( $notes);
$sommesNotes = array_sum($notes);
$moyenne = round($sommesNotes / $nbNotes, 2);
echo "Notes : ".implode(", ", $notes);
echo "<br>Sa moyenne est de : $moyenne";




?>