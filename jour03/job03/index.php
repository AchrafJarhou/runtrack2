<?php 
// Créez une variable de type string nommée $str et affectez y le texte :
// “I'm sorry Dave I'm afraid I can't do that”.
// Créez un algorithme qui parcourt cette chaîne et affiche uniquement les voyelles.
// Ex. : IoyaeIaaiIaoa
$str = "I'm sorry Dave I'm afraid I can't do that";
$voyelles = "aeiouyAEIOUY";
for ($i = 0; $i < strlen($str); $i++) {
    if (strpos($voyelles, $str[$i]) !== false) {
        echo $str[$i];
    }
}