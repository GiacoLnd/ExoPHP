<h1>Exercice 8</h1>
<h2>Ecrire un algorithme qui renvoie la table de multiplication d'un nombre passé en paramètre sous la 
forme :</h2>
<?php

$number = 5;
$i=1;

while ($i <= 10) {
    $result = $number * $i;
    echo "$number x $i = $result<br>";
    $i++;
}
?>
<br>
<?php
for ($i = 1; $i <= 10; $i++) {
    $result = $number * $i;
        echo "$number x $i = $result<br>";
}





?>