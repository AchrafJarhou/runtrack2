<?php

// Créez une fonction nommée “leetSpeak($str)”. Cette fonction prend en paramètre une
// chaîne de caractères nommée “$str”.
// Elle doit retourner la chaîne de caractères “$str” convertie en leet speak. Cela signifie
// qu’elle doit la modifier de sorte à ce que :
// ● les “A” deviennent des “4”,
// ● les “B” des “8”,
// ● les “E” des “3”,
// ● les “G” des “6”,
// ● les “L” des “1”,
// ● les “S” des “5”
// ● les “T” des “7”.
// Cela est valable que l’on crie ou non (majuscules et minuscules).
function leetSpeak($str)
{
    $leet = str_replace(
        ['A', 'B', 'E', 'G', 'L', 'S', 'T', 'a', 'b', 'e', 'g', 'l', 's', 't'],
        ['4', '8', '3', '6', '1', '5', '7', '4', '8', '3', '6', '1', '5', '7'],
        $str
    );
    return $leet;
}
// function leetSpeak($str)
// {
//     $lenth = strlen($str);
//     $newStr = "";
//     for ($i = 0; $i < $lenth; $i++) {
//         switch ($str[$i]) {
//             case 'A':
//             case 'a':
//                 $newStr .= '4';
//                 break;
//             case 'B':
//             case 'b':
//                 $newStr .= '8';
//                 break;
//             case 'E':
//             case 'e':
//                 $newStr .= '3';
//                 break;
//             case 'G':
//             case 'g':
//                 $newStr .= '6';
//                 break;
//             case 'L':
//             case 'l':
//                 $newStr .= '1';
//                 break;
//             case 'S':
//             case 's':
//                 $newStr .= '5';
//                 break;
//             case 'T':
//             case 't':
//                 $newStr .= '7';
//                 break;
//             default:
//                 $newStr .= $str[$i];
//                 break;
//         }
//     }
// }
echo leetSpeak("Bonjour LaPlateforme");
echo "<br>";
echo leetSpeak("Leet Speak");
