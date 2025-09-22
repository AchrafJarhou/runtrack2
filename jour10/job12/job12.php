<?php

// A l’aide d’une requête
// SQL, sélectionnez le prénom, le nom et la date de naissance des étudiants qui sont nés
// entre 1998 et 2018. Affichez le résultat de cette requête dans un tableau html. La
// première ligne de votre tableau html doit contenir le nom des champs. Les suivantes
// doivent contenir les données présentes dans votre base de données.
require_once '../config/config.php';
require_once '../config/db.php';
function getStudentsByBirthYear($pdo)
{
    $stmt = $pdo->query("SELECT prenom, nom, naissance FROM etudiants WHERE naissance BETWEEN '1998-01-01' AND '2018-12-31'");
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}
$students = getStudentsByBirthYear($pdo);
// var_dump($students);
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des étudiants nés entre 1998 et 2018</title> 
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
        <h1 class="mb-4">Liste des étudiants nés entre 1998 et 2018</h1>
        <table  class="table table-bordered">
            <thead>
                <tr>
                    <th>Prénom</th>
                    <th>Nom</th>
                    <th>Naissance</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($students as $student): ?>
                    <tr>
                        <td><?= htmlspecialchars($student['prenom']) ?></td>
                        <td><?= htmlspecialchars($student['nom']) ?></td>
                        <td><?= htmlspecialchars($student['naissance']) ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</body>
</html>