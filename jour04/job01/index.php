<?php

$arguments = [];
foreach ($_GET as $key => $value) {
    if (!empty($value)) {
        $arguments[] = $key;
    }

}
$nbArguments = count($arguments);


?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Test GET</title>
</head>
<body>
    <h2>Formulaire de test (méthode GET)</h2>   
   
    <form method="GET" action="">
        <label>Nom : <input type="text" name="nom"></label><br><br>
        <label>Prénom : <input type="text" name="prenom"></label><br><br>
        <label>Ville : <input type="text" name="ville"></label><br><br>
        <input type="submit" value="Envoyer">
    </form>

    <?php if ($nbArguments > 0): ?>
        <p>Le nombre d’arguments GET envoyés est : <strong><?= $nbArguments ?></strong></p>
    <?php endif; ?>
</body>
</html>
