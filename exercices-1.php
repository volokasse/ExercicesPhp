<?php

/*
EXERCICES NUMERO 1

Commençons par la base de la base en php avec quelques fonctions que j'utilise très très souvent.
Chaque étape est à faire indépendament avec un retour à la ligne à chaque fois.
Exemple de résultat affiché :
"
Hello World

Machin bidule
"

1 - Je souhaite qu'en éxecutant ce script, celui-ci m'affiche la valeur "Hello world".
=> Voir la fonction suivante : echo @ https://www.php.net/manual/fr/function.echo.php

2 - Je souhaite qu'en éxecutant ce script, celui-ci m'affiche un espace entre l'étape 1 et l'étape 2 (et que ce soit le cas entre chaque étape par la suite).
=> Voir @ https://domainregister.international/knowledgebase/75/How-To-Insert-a-Carriage-Return-in-a-PHP-String.html

3 - Je souhaite qu'en éxecutant ce script, celui-ci m'affiche la valeur "machin bidule".
En sachant que je souhaite que la valeur "machin" soit stocké dans une variable $bidule et que "bidule" soit stocké dans une variable $machin
(oui, soyons toujours plus confus)
=> Voir la concaténation @ http://www.lephpfacile.com/cours/5-concatener-deux-chaines

4 - Je souhaite qu'en éxecutant ce script, celui-ci m'affiche le résultat d'un calcul simple.
En sachant que le calcul sera le suivant : x + y * z
Où x, y et z seront des variables de ton choix et que le résultat du calcul sera stocké dans une variable nommé $resultat, ne pas oublié que celle-ci doit être affiché après cela.
=> Voir ce lien qui parle de calculs et de concaténation @ https://www.pierre-giraud.com/php-mysql-apprendre-coder-cours/operateur-concatenation/

5 - Je souhaite qu'en éxecutant ce script, celui-ci m'affiche une liste des nombre de 0 à 10 (avec un retour à la ligne entre chaque chiffre).
Exemple :
0
1
2
etc...
En sachant que je souhaite que cela se fasse via une boucle for() classique.
=> voir @ https://www.php.net/manual/fr/control-structures.for.php

5 - Je souhaite qu'en éxecutant ce script, celui-ci m'affiche une liste des nombre de 0 à 10 (avec un retour à la ligne entre chaque chiffre).
Exemple :
0
1
2
etc...
En sachant que je souhaite que cela se fasse via une boucle foreach().
Tu peux créer un tableau avec les différents chiffres à afficher au préalable.
=> voir @ https://www.php.net/manual/fr/control-structures.foreach.php

6 - Pareil que l'étape précédente, seulement je souhaite qu'au lieu de créer un tableau avec tous les chiffres au préalable tu utilises la fonctions range.
=> voir @ https://www.php.net/manual/en/function.range.php
*/




//Exo 1
echo 'Hello world';
echo '<br>';

//Exo 2
$bidule = "machin";
$machin = "bidule";

echo $bidule.' '.$machin;
echo '<br>';

//Exo 3
$x = 3;
$y = 6;
$z = 2;

$resultat = $x + ($y * $z);
echo $resultat;
echo '<br>';

//Exo 4
for ($i = 0 ; $i < 11 ; $i++) 
{ 
	echo "$i";
}
echo '<br>';

//Exo 5
$nombres = [1,2,3,4,5,6,7,8,9,10];
foreach ($nombres as $nombre) {
	echo "$nombre";
}
echo '<br>';

//Exo 6
foreach (range(0,10) as $nombre_range) {
	echo $nombre_range;
}
echo '<br>';

?>

