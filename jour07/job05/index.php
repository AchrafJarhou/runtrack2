<?php

// Créez une fonction nommée “occurrences($str, $char)”.
// Cette fonction prend en paramètre une chaîne de caractères nommée “$str” et un
// caractère nommé “$char”.
// Elle doit retourner le nombre d'occurrences du caractère “$char” dans “$str”.
// Exemple : si $str = “Bonjour” et $char=”o” alors le nombre d'occurrences de $char dans
// $str sera : 2
function occurrences($str, $char)
{
    $count = 0;
    $length = strlen($str);
    for ($i = 0; $i < $length; $i++) {
        if ($str[$i] === $char) {
            $count++;
        }
    }
    echo 'le nombre d\'occurrences de ' . $char . ' dans ' . $str . ' est : '.$count;

}

echo  occurrences("Bonjour", "o");
