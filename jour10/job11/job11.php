<?php

// A l’aide d’une requête
// SQL, sélectionnez la capacité moyenne des salles. Affichez le résultat de cette requête
// dans un tableau html. La première ligne de votre tableau html doit contenir le nom des
// champs. Les suivantes doivent contenir les données présentes dans votre base de
// données.
require_once '../config/config.php';
require_once '../config/db.php';
function getMoyenneCapacite($pdo)
{
    $stmt = $pdo->query("SELECT AVG(capacite) AS capacite_moyenne FROM salles");
    return $stmt->fetch(PDO::FETCH_ASSOC);
}
$moyenneCapacite = getMoyenneCapacite($pdo);
// var_dump($moyenneCapacite);
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Capacité moyenne des salles</title> 
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
        <h1 class="mb-4">Capacité moyenne des salles</h1>
        <table  class="table table-bordered">
            <thead>
                <tr>
                    <th>capacite_moyenne</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><?= htmlspecialchars($moyenneCapacite['capacite_moyenne']) ?></td>
                </tr>
            </tbody>
        </table>
    </div>
</body>
</html>
