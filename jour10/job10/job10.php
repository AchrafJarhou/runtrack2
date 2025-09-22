<?php
// A l’aide d’une requête
// SQL, sélectionnez l’ensemble des informations des salles en les triant par capacité
// décroissante. Affichez le résultat de cette requête dans un tableau html. La première
// ligne de votre tableau html doit contenir le nom des champs. Les suivantes doivent
// contenir les données présentes dans votre base de données.
require_once '../config/config.php';
require_once '../config/db.php';
function getSallesByCapacite($pdo)
{
    $stmt = $pdo->query("SELECT * FROM salles ORDER BY capacite ASC");
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}
$salles = getSallesByCapacite($pdo);
// var_dump($salles);
?>
<!DOCTYPE html>
<html lang="fr">
<head>  
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des salles par capacité</title> 
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
        <h1 class="mb-4">Liste des salles par capacité</h1>
        <table  class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nom</th>
                    <th>Capacité</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($salles as $salle): ?>
                    <tr>
                        <td><?= htmlspecialchars($salle['id']) ?></td>
                        <td><?= htmlspecialchars($salle['nom']) ?></td>
                        <td><?= htmlspecialchars($salle['capacite']) ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</body>
</html>