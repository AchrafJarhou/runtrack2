<?php
// Créez un formulaire de connexion qui contient un input de type de text nommé
// “prenom” et un bouton submit nommé “connexion”. Lorsque l’on valide le formulaire, le
// prénom est ajouté dans un cookie. Si un utilisateur a déjà entré son prénom, n'affichez
// plus le formulaire de connexion. A la place, écrivez “Bonjour prenom !” et ajouter un
// bouton “Déconnexion” nommé “deco”. Lorsque l’utilisateur se déconnecte, il faut à
// nouveau afficher le formulaire de connexion.
if (isset($_POST['deconexion'])) {
    setcookie('prenom', '', time() - 3600); // Supprimer le cookie en le mettant à une date passée
    header("Location: index.php");
    exit();
}
if (isset($_POST['connexion']) && !empty($_POST['prenom'])) {
    setcookie('prenom', $_POST['prenom'], time() + 365 * 24 * 3600); // Cookie valable 1 an
    header("Location: index.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire de connexion</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Formulaire de connexion</h1>
    <?php if (isset($_COOKIE['prenom']) && !empty($_COOKIE['prenom'])): ?>
        <p>Bonjour <?php echo htmlspecialchars($_COOKIE['prenom']); ?> !</p>
        <form method="post">
            <button type="submit" name="deconexion">Déconnexion</button>
        </form>
    <?php else: ?>
        <form method="post">
            <input type="text" name="prenom" placeholder="Entrez votre prénom" required>
            <button type="submit" name="connexion">Connexion</button>
        </form>
    <?php endif; ?>
</body>
</html>
