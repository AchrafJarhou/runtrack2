<?php
// Créez un cookie nommé “nbvisites”. A chaque fois que la page est visitée, ajoutez 1.
// Afficher le contenu du cookie.
// Ajoutez un bouton nommé “reset” qui permet de réinitialiser ce compteur.
if (!isset($_COOKIE['nbvisites'])) {
    $nbvisites = 0;
} else {
    $nbvisites = $_COOKIE['nbvisites'];
}
if (isset($_POST['reset'])) {
    $nbvisites = 0;
} else {
    $nbvisites++;
}
// var_dump($_COOKIE);
setcookie('nbvisites', $nbvisites, time() + 365 * 24 * 3600);
// var_dump($_COOKIE);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Compteur de visites avec cookie</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Compteur de visites avec cookie</h1>
    <p>Nombre de visites : <?php echo $nbvisites; ?></p>
    <form method="post">
        <button type="submit" name="reset">Reset</button>
    </form> 
</body>
</html>
