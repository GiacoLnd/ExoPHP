<h1>Exercice 4</h1>
<h2>Ecrire un algorithme permettant de savoir si une phrase est palindrome</h2>
<?php
$phrase = str_replace(" ", "","engage le jeu que je le gagne");
$reverse = strrev($phrase);

 if($phrase == $reverse){                                        //// vérification de la condition palindrome
    $result = "Cette phrase est un palindrome";
        echo $result ;
 } else {
    $faux = "Cette phrase n'est pas un palindrome";
        echo $faux;
 }


?>