<?php

// A l’aide d’une requête
// SQL, récupérez la superficie totale des étages dans une colonne nommée
// “superficie_totale”. Affichez le résultat de cette requête dans un tableau html. La
// première ligne de votre tableau html doit contenir le nom des champs. Les suivantes
// doivent contenir les données présentes dans votre base de données.
require_once '../config/config.php';
require_once '../config/db.php';
function getTotalSuperficie($pdo)
{
    $stmt = $pdo->query("SELECT SUM(superficie) AS superficie_totale FROM etage");
    return $stmt->fetch(PDO::FETCH_ASSOC);
}
$totalSuperficie = getTotalSuperficie($pdo);
// var_dump($totalSuperficie);
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Superficie totale des étages</title> 
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
        <h1 class="mb-4">Superficie totale des étages</h1>
        <table  class="table table-bordered">
            <thead>
                <tr>
                    <th>superficie_totale</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><?= htmlspecialchars($totalSuperficie['superficie_totale']) ?></td>
                </tr>
            </tbody>
        </table>
    </div>
</body>
</html>
