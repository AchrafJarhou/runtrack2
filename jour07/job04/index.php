<?php

// Créez une fonction nommée “calcule()” qui prend 3 paramètres :
// ● le premier, “$a”, est un nombre,
// ● le deuxième, "$operation", est un caractère (string) contenant le type d’opération
// (+, -, *, /, %),
// ● le troisième, “$b”, est un nombre.
// La fonction doit retourner le résultat de l’opération.
function calcule($a, $operation, $b)
{
    switch ($operation) {
        case '+':
            return $a + $b;
        case '-':
            return $a - $b;
        case '*':
            return $a * $b;
        case '/':
            if ($b != 0) {
                return $a / $b;
            } else {
                return "Erreur : Division par zéro.";
            }            
        case '%':
            if ($b != 0) {
                return $a % $b;
            } else {
                return "Erreur : Modulo par zéro.";
            }            
        default:
            return "Erreur : Opération non reconnue.";
    }
}
echo calcule(10, '+', 5) . "<br>";
echo calcule(10, '-', 5) . "<br>";
echo calcule(10, '*', 5) . "<br>";
echo calcule(10, '/', 5) . "<br>";
echo calcule(10, '%', 3) . "<br>";
echo calcule(10, '/', 0) . "<br>";
