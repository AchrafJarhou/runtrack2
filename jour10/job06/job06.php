<?php

// A l’aide d’une requête
// SQL, récupérez le nombre total d’étudiants dans une colonne nommée “nb_etudiants”.
// Affichez le résultat de cette requête dans un tableau html. La première ligne de votre
// tableau html doit contenir le nom du champ.
require_once '../config/config.php';
require_once '../config/db.php';
function getTotalStudents($pdo)
{
    $stmt = $pdo->query("SELECT COUNT(*) AS nb_etudiants FROM etudiants");
    return $stmt->fetch(PDO::FETCH_ASSOC);
}
$totalStudents = getTotalStudents($pdo);
// var_dump($totalStudents);
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nombre total d'étudiants</title> 
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
        <h1 class="mb-4">Nombre total d'étudiants</h1>
        <table  class="table table-bordered">
            <thead>
                <tr>
                    <th>nb_etudiants</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><?= htmlspecialchars($totalStudents['nb_etudiants']) ?></td>
                </tr>
            </tbody>
        </table>
    </div>
</body>
</html>