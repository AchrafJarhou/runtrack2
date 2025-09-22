<?php

// A l’aide d’une requête
// SQL, récupérez l’ensemble des informations des étudiants qui ont moins de 18 ans.
// Affichez le résultat de cette requête dans un tableau html. La première ligne de votre
// tableau html doit contenir le nom des champs.
// Les suivantes doivent contenir les données présentes dans votre base de données.
require_once '../config/config.php';
require_once '../config/db.php';
function getMinorStudents($pdo)
{
    $stmt = $pdo->query("SELECT * FROM etudiants WHERE naissance > DATE_SUB(CURDATE(), INTERVAL 18 YEAR)");
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}
// DATE_SUB(CURDATE(), INTERVAL 18 YEAR)  : permet de soustraire 18 ans à la date actuelle (la date ya 18 ans)

// naissance > DATE_SUB(CURDATE(), INTERVAL 18 YEAR (veut dire si la date de naissance est superieur a la date actuelle - 18 ans)
$students = getMinorStudents($pdo);
// var_dump($students);
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des étudiants mineurs</title> 
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
        <h1 class="mb-4">Liste des étudiants mineurs</h1>
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