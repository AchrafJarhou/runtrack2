<?php
// Créez une variable de session nommée “nbvisites”. A chaque fois que la page est
// visitée, ajoutez 1. Afficher le contenu de cette variable.
// Ajoutez un bouton nommé “reset” qui permet de réinitialiser ce compteur.
session_start();
if (!isset($_SESSION['nbvisites'])) {
    $_SESSION['nbvisites'] = 0;
}
if (isset($_POST['reset'])) {
    $_SESSION['nbvisites'] = 0;
} else {
    $_SESSION['nbvisites']++;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Compteur de visites</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Compteur de visites</h1>
    <p>Nombre de visites : <?php echo $_SESSION['nbvisites']; ?></p>
    <form method="post">
        <button type="submit" name="reset">Reset</button>
    </form>
</body>
</html>
