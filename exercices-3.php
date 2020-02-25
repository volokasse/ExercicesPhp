<?php

/* EXERCICE NUMERO 3

Ce script sera à exécuter via un terminal.
grosso modo, avec un terminal ouvert dans le dossier actuel ça donnera :
php exercices-3.php

Je veux donc pouvoir appeler ce script avec les arguments suivants :
- Coucou
- Hello

Et qu'en fonction de l'argument que je lui aurais passé il me donne une réponse différente :
- Coucou -> Salut bro' !
- Hello -> Whassup dude ?!

Dans le cas d'un argument qui n'est pas l'un des deux, je veux que le script réponde :
- Euh... ok... j'suis pressé, j'ai aqua poney, à la prochaine.

=> voir @ http://zetcode.com/lang/php/basics/
=> voir @ https://www.php.net/manual/fr/language.control-structures.php

*/

if ($argv[1] == "Coucou")
{
	echo "Salut bro' !";
}
elseif ($argv[1] == "Hello") 
{
	echo "Whassup dude ?!";
}
else
{
	echo "Euh... ok... j'suis pressé, j'ai aqua poney, à la prochaine.";
}

?>