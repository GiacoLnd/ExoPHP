<h1>Exercice 9</h1>
<h2>Nous souhaitons savoir si une personne est imposable en fonction de son âge et de son sexe.
Si la personne est une femme dont l'âge est compris entre 18 et 35 ans ou si c'est un homme de 
plus de 20 ans, alors celle-ci est imposable (sinon ce n'est pas le cas, « non imposable »).</h2>


<?php
$sexe = false;
$age = 20; 

if ($sexe == true && $age >= 20) {
    echo "vous êtes un homme de $age ans imposable !<br>";
} else if ($sexe == false && $age >= 18 && $age <= 35) {
    echo "vous êtes une femme de $age ans imposable<br>";
} else {
    echo "vous n'êtes pas imposable<br>";
}

$homme ="un homme";
$femme = "une femme";
if ($homme && $age >=20 or $femme && $age >= 18 && $age <= 35){
    echo "Vous êtes imposable";
} else {
    echo "Vous n'êtes pas imposable";
}
?>
