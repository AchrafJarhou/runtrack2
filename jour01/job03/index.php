<?php

// Dans le dossier runtrack2/jour01/job03, créez un fichier index.php.
// En PHP, il existe différents types de variables. Créez des variables de types primitifs
// (boolean, entier, chaîne de caractères, nombre à virgule flottante) et affectez-y des
// valeurs.
// A l’aide de php, générer un tableau html qui contient dans son header trois colonnes
// (type, nom, valeur) et dans son body, une ligne pour chacune des variables et de leurs
// informations.
$str = "LaPlateforme";
$val = 10;
$myBool = true;
$floatVal = 10.5;
echo "<table border='1'>
        <thead>
            <tr>
                <th>Type</th>
                <th>Nom</th>
                <th>Valeur</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>" . gettype($str) . "</td>
                <td>str</td>
                <td>" . $str . "</td>
            </tr>
            <tr>
                <td>" . gettype($val) . "</td>
                <td>val</td>
                <td>" . $val . "</td>
            </tr>
            <tr>
                <td>" . gettype($myBool) . "</td>
                <td>myBool</td>
                <td>" . ($myBool ? 'true' : 'false') . "</td>
            </tr>
            <tr>
                <td>" . gettype($floatVal) . "</td>
                <td>floatVal</td>
                <td>" . $floatVal . "</td>
            </tr>
        </tbody>
      </table>";
