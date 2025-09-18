<?php

// Faire un algorithme qui affiche un triangle de 5 de hauteur. Cette dimension devra être
// stockée dans une variable $hauteur, modifiable facilement.
// $hauteur = 5;
// // for ($i = 1; $i <= $hauteur; $i++) {
// //     echo str_repeat("*", $i) . "<br />";
// // }
// for ($i = 1; $i <= $hauteur; $i++) {
//     for ($j = 1; $j <= $i; $j++) {
//         echo "*";
//     }
//     echo "<br />";
// }
$hauteur = 5;  // Height of the isosceles triangle / Hauteur du triangle isocèle

echo "<pre>"; // Preserve formatting / Préserver le formatage

for ($i = 1; $i <= $hauteur; $i++) {
    //  Calculer le nombre d'espaces avant les étoiles
    $spaces = $hauteur - $i;


    //  Calculer le nombre d'étoiles pour la ligne actuelle
    $stars = 2 * $i - 1;

    //  Afficher les espaces
    echo str_repeat(" ", $spaces);

    //  Afficher les étoiles
    echo str_repeat("*", $stars);

    echo "\n"; //  Passe à la ligne suivante
}
