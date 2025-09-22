<?php

// En utilisant php et mysqli, connectez-vous à la base de données “jour09”. A l’aide d’une
// requête SQL, récupérez le nom et la capacité de chacune des salles. Affichez le résultat
// de cette requête dans un tableau html. La première ligne de votre tableau html doit
// contenir le nom des champs. Les suivantes doivent contenir les données présentes
// dans votre base de données.

require_once '../config/db.php';
require_once '../config/config.php';
function getSalles($pdo)
{
    $stmt = $pdo->query("SELECT nom, capacite FROM salles");
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}
$salles = getSalles($pdo);
// var_dump($salles);
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des salles</title> 
    <style>
        table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <h1 class="mb-4">Liste des salles</h1>
        <table  class="table table-bordered">
            <thead>
                <tr>
                    <th>Nom</th>
                    <th>Capacité</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($salles as $salle): ?>
                    <tr>
                        <td><?= htmlspecialchars($salle['nom']) ?></td>
                        <td><?= htmlspecialchars($salle['capacite']) ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</body>
</html>

