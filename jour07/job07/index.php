<?php
// Créez un formulaire <form> qui contient :
// ● un champ <input> nommé “str” de type “text”,
// ● une liste déroulante <select> nommée “fonction”
// ● un bouton <button> submit.
// Lorsque vous validez le formulaire, vous devez appliquer des transformations à “str” en
// fonction de l’option <option> choisie dans la liste déroulante.
// Les choix possibles sont :
// ● “gras” : une fonction qui prend en paramètre “str” : gras($str). Elle écrit “str” en
// mettant en gras (<b>) les mots commençant par une lettre majuscule.
// ● “cesar” : une fonction qui prend en paramètre “$str” et un nombre “$decalage”
// (qui vaut 2 par défaut) : cesar($str, $decalage). $str doit s’afficher en décalant
// chaque caractère d’un nombre égal à “$decalage”.
// ex : Si $decalage vaut 1 alors “e” devient “f”. Si décalage vaut 3 alors “z” devient
// “c”.
// ● “plateforme”, une fonction qui prend en paramètre “$str” : plateforme($str).
// Elle affiche “$str” en ajoutant un “_” aux mots finissant par “me”.
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $str = $_POST['str'] ?? '';
    $fonction = $_POST['fonction'] ?? '';

    switch ($fonction) {
        case 'gras':
            echo gras($str);
            break;
        case 'cesar':
            echo cesar($str);
            break;
        case 'plateforme':
            echo plateforme($str);
            break;
        default:
            echo "Fonction non reconnue.";
            break;
    }
}
function gras($str)
{
    $words = explode(' ', $str);
    foreach ($words as &$word) {
        if (ctype_upper($word[0])) {
            $word = '<b>' . $word . '</b>';
        }
    }
    return implode(' ', $words);
}
function cesar($str, $decalage = 2)
{
    $result = '';
    $length = strlen($str);
    for ($i = 0; $i < $length; $i++) {
        $char = $str[$i];
        if (ctype_alpha($char)) {
            $asciiOffset = ctype_upper($char) ? ord('A') : ord('a');
            $newChar = chr((ord($char) - $asciiOffset + $decalage) % 26 + $asciiOffset);
            $result .= $newChar;
        } else {
            $result .= $char;
        }
    }
    return $result;
}
function plateforme($str)
{
    $words = explode(' ', $str);
    foreach ($words as &$word) {
        if (substr($word, -2) === 'me') {
            $word .= '_';
        }
    }
    return implode(' ', $words);
}
?>
<form method="POST" action="">
    <input type="text" name="str" required>
    <select name="fonction" required>
        <option value="gras">Gras</option>
        <option value="cesar">César</option>
        <option value="plateforme">Plateforme</option>
    </select>
    <button type="submit">Valider</button>
</form>


