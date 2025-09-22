<?php

require_once '../config/config.php';
require_once '../config/db.php';

function getEtudiants($pdo)
{
    $stmt = $pdo->query("SELECT * FROM etudiants");
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}
$students = getEtudiants($pdo);
// var_dump($students);
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des étudiants</title> 
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
        <h1 class="mb-4">Liste des étudiants</h1>
        <table  class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Prénom</th>
                    <th>Nom</th>
                    <th>Naissance</th>
                    <th>Sexe</th>
                    <th>Email</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($students as $student): ?>
                    <tr>
                        <td><?= htmlspecialchars($student['id']) ?></td>
                        <td><?= htmlspecialchars($student['prenom']) ?></td>
                        <td><?= htmlspecialchars($student['nom']) ?></td>
                        <td><?= htmlspecialchars($student['naissance']) ?></td>
                        <td><?= htmlspecialchars($student['sexe']) ?></td>
                        <td><?= htmlspecialchars($student['email']) ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</body>
</html>

