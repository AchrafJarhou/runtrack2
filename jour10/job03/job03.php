<?php

// En utilisant php et mysqli, connectez-vous à la base de données “jour09”. A l’aide d’une
// requête SQL, récupérez le prenom, le nom et la date de naissance des étudiants de sexe
// féminin. Affichez le résultat de cette requête dans un tableau html. La première ligne de
// votre tableau html doit contenir le nom des champs. Les suivantes doivent contenir les
// données présentes dans votre base de données.
require_once '../config/config.php';
require_once '../config/db.php';
function getFemaleStudents($pdo)
{
    $stmt = $pdo->query("SELECT prenom, nom, naissance FROM etudiants WHERE sexe = 'Femme'");
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}
$femaleStudents = getFemaleStudents($pdo);
// var_dump($femaleStudents);
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des étudiantes</title> 
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
        <h1 class="mb-4">Liste des étudiantes</h1>
        <table  class="table table-bordered">
            <thead>
                <tr>
                    <th>Prénom</th>
                    <th>Nom</th>
                    <th>Naissance</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($femaleStudents as $student): ?>
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
