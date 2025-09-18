<?php

$hauteur = 5; // changez cette valeur pour modifier la hauteur

echo '<pre>';

for ($i = 1; $i <= $hauteur; $i++) {
    // espaces avant le premier /
    for ($s = 0; $s < $hauteur - $i; $s++) {
        echo ' ';
    }
    // bord gauche
    echo '/' ;


    // intérieur du triangle ou _
    if ($i == $hauteur) {
        // base : que des _
        for ($j = 0; $j < 2 * $i - 2; $j++) {
            echo '_';
        }
    } else {
        // intérieur : espaces
        for ($j = 0; $j < 2 * $i - 2; $j++) {
            echo ' ';
        }
    }

    // bord droit
    if ($i >= 1) {
        echo '\\';
    }
    echo "\n";
}
echo '</pre>';
