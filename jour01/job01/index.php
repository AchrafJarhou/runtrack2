<?php 
// Dans le fichier runtrack2/jour01/job01, créer un fichier index.php.
// Dans ce fichier, créez une variable nommée str. Affectez lui la valeur
// “LaPlateforme”. Affichez le contenu de la variable str. Créez une variable str2
// contenant “Vive” et une variable str3 contenant “!”.
// Affichez “Vive LaPlateforme !” en concaténant l’ensemble de ces variables.
// ● Créez une variable nommée val. Affectez à cette variable la valeur 6.
// Affichez le contenu de la variable. Ajoutez 4 à cette variable. Affichez à nouveau
// le contenu.
// ● Créez une variable myBool, affectez à cette variable true, affichez le contenu de
// la variable. Affectez false à la variable et affichez à nouveau le contenu
$str = "LaPlateforme";
echo $str . "<br />";
$str2 = "Vive";
$str3 = "!";
echo $str2 . " " . $str . " " . $str3 . "<br />";
$val = 6;
echo $val . "<br />";
$val += 4;
echo $val . "<br />";
$myBool = true;
echo $myBool . "<br />";
$myBool = false;
echo $myBool . "<br />";
