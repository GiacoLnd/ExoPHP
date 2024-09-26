<h1>Exercice 7</h1>
<h2>Ecrire un algorithme permettant de renvoyer la catégorie d’un enfant en fonction de son âge :</h2>

<?php
/*  POUSSIN ENTRE 6 ET 7 ANS
    PUPILLE ENTRE 8 ET 9 ANS
    MINIME ENTRE 10 ET 11 ANS
    CADET A PARTIR DE 11 ANS
    SI CAT. PAS GEREE, PRECISER
*/
$age = 8;
settype($age, "integer");

if ($age >= 18) {
        echo "l'enfant est trop âgé !";
}   else if ($age >= 11) {
        $result = "cadet";
}   else if ($age >= 10) {
        $result = "minime";
}   else if($age >= 8){
        $result = "pupille";
}   else if ($age >= 6){
        $result = "poussin";
}   else {
        echo "l'enfant est trop jeune !";
}
echo "L'enfant est $result.";







?>