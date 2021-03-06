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

$arg = empty($argv[1]) ? "" : $argv[1];
$arg = strtoupper($arg);

if ($arg == "COUCOU")
{
	echo "Salut bro' !\r\n";
}
elseif ($arg == "HELLO") 
{
	echo "Whassup dude ?!\r\n";
}
else
{
	echo "Euh... ok... j'suis pressé, j'ai aqua poney, à la prochaine.\r\n";
}

?>