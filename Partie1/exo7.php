<h1>Exercice 7</h1>
<h2>Ecrire un algorithme permettant de renvoyer la catégorie d’un enfant en fonction de son âge :</h2>

<?php
/*  POUSSIN ENTRE 6 ET 7 ANS
    PUPILLE ENTRE 8 ET 9 ANS
    MINIME ENTRE 10 ET 11 ANS
    CADET A PARTIR DE 11 ANS
    SI CAT. PAS GEREE, PRECISER
*/
$age = 12.5;
settype($age, "integer");

if ($age >= 18) {
        echo "l'enfant est trop âgé !";
}   else if ($age >= 11) {
        $result = "cadet";
            echo "l'enfant qui a $age ans est $result";
}   else if ($age >= 10) {
        $result = "minime";
            echo "l'enfant qui a $age ans est $result";
}   else if($age >= 8){
        $result = "pupille";
            echo "l'enfant qui a $age ans est $result";
}   else if ($age >= 6){
        $result = "poussin";
            echo "l'enfant qui a $age ans est $result";
}        
    else {
        echo "l'enfant est trop jeune !";
}







?>