<h1>Exercice 2</h1>
<h2>A partir de la phrase de l’exercice 1, écrire l’instruction permettant de compter le nombre de mots 
contenus dans celle-ci : <br>
La phrase « Notre formation DL commence aujourd’hui » contient 5 mots.
</h2>
<?php
$phrase = "Notre formation DL commence aujourd'hui";
 echo str_word_count($phrase);                  // fonction native de comptage de mots sans espaces
 ?>