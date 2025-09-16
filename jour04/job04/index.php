<!-- Développer un algorithme qui affiche dans un tableau HTML <table> l’ensemble des
arguments $_POST et les valeurs associées.
Il doit y avoir deux colonnes : argument et valeur. -->
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Test POST</title>
</head>
<body>
    <h2>Formulaire de test (méthode POST)</h2>   
   
    <form method="POST" action="">
        <label>Nom : <input type="text" name="nom"></label><br><br>
        <label>Prénom : <input type="text" name="prenom"></label><br><br>
        <label>Ville : <input type="text" name="ville"></label><br><br>
        <input type="submit" value="Envoyer">
    </form>
    <?php if (isset($_POST) && !empty($_POST)): ?>
    <table border='1' style="margin-top:20px; border-collapse: collapse;">
        <thead>
            <tr>
                <th>Argument</th>
                <th>Valeur</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($_POST as $key => $value): ?>
                <tr>
                    <td><?= htmlspecialchars($key) ?></td>
                    <td><?= htmlspecialchars($value) ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <?php endif; ?>
    

  
</body>
</html>


