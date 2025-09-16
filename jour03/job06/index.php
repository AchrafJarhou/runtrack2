<?php

// Créez une variable de type string nommée $str et affectez y le texte :
// “Les choses que l'on possède finissent par nous posséder."
// Créez un algorithme qui parcourt et écrit cette chaine à l’envers.
// Ex. : redessop suon rap tnessinif edessop no'l euq sesohc seL
$str = "Les choses que l'on possede finissent par nous posseder.";
$reversedStr = "";
for ($i = strlen($str) - 1; $i >= 0; $i--) {
    $reversedStr .= $str[$i];
}
echo $reversedStr;
