<?php
// Créer un formulaire qui contient une liste déroulante nommée “style” et un bouton
// submit. La liste déroulante doit proposer au moins “style1”, “style2” et “style3. Créer 3
// fichiers css nommés “style1.css”, “style2.css” et “style3.css”. Chaque style doit avoir
// des effets sur le design du formulaire, la couleur de background, la police d’écriture...
// Lorsque l’on valide le formulaire, le style sélectionné doit être inclus et donc le visuel
// doit changer.
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['style'])) {
    $style = $_POST['style'] ?? "";
    $cssFile = '';
    if (in_array($style, ['style1', 'style2', 'style3'])) {
        $cssFile = $style . '.css';

    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>   
    <link rel="stylesheet"  href="<?= isset($cssFile) ? $cssFile : ""; ?>">
</head>
<body>
    <form method="post" action="">
    <label for="style">Choisissez un style :</label>
    <select name="style" id="style">
        <option value="style1" <?=(isset($style) && $style == 'style1') ? 'selected' : '' ?>>Style 1</option>
        <option value="style2" <?=(isset($style) && $style == 'style2') ? 'selected' : '' ?>>Style 2</option>
        <option value="style3" <?=(isset($style) && $style == 'style3') ? 'selected' : '' ?>>Style 3</option>
    </select>
    <input type="submit" value="Appliquer le style">
</form>
    
</body>
</html>

