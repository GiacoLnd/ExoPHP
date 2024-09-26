<h1>Exercice 6</h1>
<h2>Ecrire un algorithme permettant de calculer un montant de facture à régler à partir de la quantité 
d'articles, son prix hors taxe et un taux de TVA (exprimé en décimal. Ex : 20 % -> 0.2)
</h2>

<?php
/*Prix unitaire de l’article : 9.99 €
Quantité : 5
Taux de TVA : 0.2
Le montant de la facture à régler est de : 59.94 */

$quantité = 5;
$tva = 0.2;
$PUHT = 9.99;

$prixTTC = 5*9.99*(1+0.2);
echo $prixTTC




?>