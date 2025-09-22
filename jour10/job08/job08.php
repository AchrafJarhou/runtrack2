<?php

// A l’aide d’une requête
// SQL, sélectionnez dans une colonne nommée “capacite_totale” la somme des capacités
// des salles. Affichez le résultat de cette requête dans un tableau html. La première ligne
// de votre tableau html doit contenir le nom des champs. Les suivantes doivent contenir
// les données présentes dans votre base de données.
require_once '../config/config.php';
require_once '../config/db.php';
function getTotalCapacite($pdo)
{
    $stmt = $pdo->query("SELECT SUM(capacite) AS capacite_totale FROM salles");
    return $stmt->fetch(PDO::FETCH_ASSOC);
}
$totalCapacite = getTotalCapacite($pdo);
// var_dump($totalCapacite);
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Capacité totale des salles</title> 
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
        <h1 class="mb-4">Capacité totale des salles</h1>
        <table  class="table table-bordered">
            <thead>
                <tr>
                    <th>capacite_totale</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><?= htmlspecialchars($totalCapacite['capacite_totale']) ?></td>
                </tr>
            </tbody>
        </table>
    </div>
</body>
</html>
