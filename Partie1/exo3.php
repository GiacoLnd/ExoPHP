<h1>Exercice 3</h1>
<h2>A partir de la phrase de l'exercice 1, écrire l'instruction permettant de remplacer le mot 
« aujourd'hui » par le mot « demain ». Afficher l'ancienne et la nouvelle phrase.</h2>
<?php
$phrase = "Notre formation DL commence aujourd'hui<br>";

echo $phrase;

$ancienMot = "aujourd'hui";
$nouveauMot = "demain";
$nouvellePhrase = str_replace($ancienMot, $nouveauMot, $phrase);                // fontion native de remplacement de mot

echo $nouvellePhrase;

?>