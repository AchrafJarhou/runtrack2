<!-- Développer un algorithme qui affiche dans un tableau HTML <table> l’ensemble des
arguments $_GET et les valeurs associées.
Il doit y avoir deux colonnes : argument et valeur. -->
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
    <?php if (isset($_GET) && !empty($_GET)): ?>
    <table border='1' style="margin-top:20px; border-collapse: collapse;">
        <thead>
            <tr>
                <th>Argument</th>
                <th>Valeur</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($_GET as $key => $value): ?>
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


