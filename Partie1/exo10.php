<h1>Exercice 10</h1>
<h2>A partir d'un montant à payer et d'une somme versée pour régler un achat, écrire l'algorithme qui 
affiche à un utilisateur un rendu de monnaie en nombre de billets de 10 € et 5 €, de pièces de 2 € et 
1 €</h2>


<?php
// 4 billets 10 ; 1 billet 5 ; 1 pièce 2 ; 1 pièce 1  total rendu 48 EUR

$fare = 152;
$paidAmount = 200;
$cash = $paidAmount-$fare;
$money = [10,5,2,1];


$billets10 = intdiv($cash,$money[0]);
$cash = $cash - ($billets10*$money[0]);
$billets5 = intdiv($cash,$money[1]);
$cash = $cash - ($billets5*$money[1]);
$piece2 = intdiv($cash,$money[2]);
$cash = $cash - ($piece2*$money[2]);
$piece1 = intdiv($cash,$money[3]);
$cash = $cash - ($piece1*$money[3]);
echo " Rendu : billets de 10€ : $billets10 | billets de 5€ : $billets5 | pièces de 2€ : $piece2 | pièces de 1€ : $piece1"
















?>
