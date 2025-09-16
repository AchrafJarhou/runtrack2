<?php

// Créez une variable de type string nommée $str et affectez y le texte :
// “Certaines choses changent, et d'autres ne changeront jamais.”
// Créer un algorithme qui parcourt cette string en remplaçant le premier caractère par le
// deuxième, le deuxième par le troisième etc.. et le dernier par le premier.
// Ex. : Ertaines choses changent, et d'autres ne changeront jamais.c
$str = "Certaines choses changent, et d'autres ne changeront jamais.";
$length = strlen($str);
$rotatedStr = ""; // Chaîne résultat

for ($i = 1; $i < $length; $i++) {
    $rotatedStr .= $str[$i];
}
$rotatedStr .= $str[0]; // Ajoute le premier caractère à la fin

echo $rotatedStr;
