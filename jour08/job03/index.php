<?php
// Créez un formulaire qui contient un input de type de text nommé “prenom” et un bouton
// submit. Lorsque l’on valide le formulaire, le prénom est ajouté dans une variable de
// session. Afficher l’ensemble des prénoms.
// Ajoutez un bouton nommé “reset” qui permet de réinitialiser la liste.
session_start();
if (!isset($_SESSION['prenoms'])) {
    $_SESSION['prenoms'] = [];
}
if (isset($_POST['reset'])) {
    $_SESSION['prenoms'] = [];
} elseif (isset($_POST['prenom']) && !empty($_POST['prenom'])) {
    $_SESSION['prenoms'][] = $_POST['prenom'] ?? '';
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste de prénoms</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Liste de prénoms</h1>
    <form method="post">
        <input type="text" name="prenom" placeholder="Entrez un prénom" >
        <button type="submit">Ajouter</button>
        <button type="submit" name="reset">Reset</button>
    </form>
    <?php if (!empty($_SESSION['prenoms'])): ?>
        <h2>Prénoms ajoutés :</h2>
        <ul>
            <?php foreach ($_SESSION['prenoms'] as $prenom): ?>
                <li><?php echo $prenom; ?></li>
            <?php endforeach; ?>
        </ul>
    <?php else: ?>
        <p>Aucun prénom ajouté.</p>
    <?php endif; ?>
</body>
</html>
